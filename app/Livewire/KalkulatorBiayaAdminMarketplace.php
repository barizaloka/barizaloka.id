<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class KalkulatorBiayaAdminMarketplace extends Component
{
    private const int MAX_SHOPEE_GRATONG_XTRA_FEE = 40000;

    private const int MAX_SHOPEE_CASHBACK_XTRA_FEE = 10000;

    private const int MAX_TOKOPEDIA_ONGKIR_FEE = 10000;

    public ?string $marketplace = null;

    public ?float $shopeeAdminFee = null;

    public bool $shopeeGratongXtra = false;

    public ?float $shopeeGratongXtraFee = null;

    public bool $shopeeCashbackXtra = false;

    public ?float $shopeeCashbackXtraFee = null;

    public ?float $tokopediaAdminFeeMerchant = null;

    public ?float $tokopediaAdminFeeOngkir = null;

    public ?float $tiktokAdminFee = null;

    /** @var array<int, array{id: int, price: ?float, result: ?array}> */
    public array $rows = [];

    public int $nextRowId = 1;

    public function mount(): void
    {
        $this->rows = [$this->newRow()];
    }

    public function pilihMarketplace(string $marketplace): void
    {
        $this->reset([
            'shopeeAdminFee', 'shopeeGratongXtra', 'shopeeGratongXtraFee',
            'shopeeCashbackXtra', 'shopeeCashbackXtraFee',
            'tokopediaAdminFeeMerchant', 'tokopediaAdminFeeOngkir',
            'tiktokAdminFee',
        ]);

        $this->marketplace = $marketplace;
        $this->rows = [$this->newRow()];
    }

    public function tambahBaris(): void
    {
        $this->rows[] = $this->newRow();
    }

    public function hapusBaris(int $id): void
    {
        $this->rows = array_values(array_filter(
            $this->rows,
            fn (array $row): bool => $row['id'] !== $id,
        ));
    }

    public function resetForm(): void
    {
        if ($this->marketplace !== null) {
            $this->pilihMarketplace($this->marketplace);
        }
    }

    public function hitung(): void
    {
        foreach ($this->rows as $index => $row) {
            $price = (float) ($row['price'] ?? 0);

            $this->rows[$index]['result'] = $price > 0 ? $this->hitungHarga($price) : null;
        }
    }

    /** @return array{id: int, price: ?float, result: ?array} */
    private function newRow(): array
    {
        return [
            'id' => $this->nextRowId++,
            'price' => null,
            'result' => null,
        ];
    }

    /** @return array{harga: int, rincian: array<int, array{label: string, value: int}>}|null */
    private function hitungHarga(float $price): ?array
    {
        return match ($this->marketplace) {
            'shopee' => $this->hitungShopee($price),
            'tokopedia' => $this->hitungTokopedia($price),
            'tiktok-shop' => $this->hitungTiktok($price),
            default => null,
        };
    }

    /** @return array{harga: int, rincian: array<int, array{label: string, value: int}>}|null */
    private function hitungShopee(float $price): ?array
    {
        $adminFeeRate = ($this->shopeeAdminFee ?? 0) / 100;
        $gratongRate = ($this->shopeeGratongXtraFee ?? 0) / 100;
        $cashbackRate = ($this->shopeeCashbackXtraFee ?? 0) / 100;

        $upper = $price;
        $divider = 1 - $adminFeeRate;

        if ($this->shopeeGratongXtra) {
            if (round($price * $gratongRate) > self::MAX_SHOPEE_GRATONG_XTRA_FEE) {
                $upper += self::MAX_SHOPEE_GRATONG_XTRA_FEE;
            } else {
                $divider -= $gratongRate;
            }
        }

        if ($this->shopeeCashbackXtra) {
            if (round($price * $cashbackRate) > self::MAX_SHOPEE_CASHBACK_XTRA_FEE) {
                $upper += self::MAX_SHOPEE_CASHBACK_XTRA_FEE;
            } else {
                $divider -= $cashbackRate;
            }
        }

        if ($divider <= 0) {
            return null;
        }

        $hasil = (int) ceil($upper / $divider);
        $adminFee = (int) round($hasil * $adminFeeRate);

        $rincian = [
            ['label' => 'Harga', 'value' => $hasil],
            ['label' => 'Biaya Administrasi', 'value' => $adminFee],
        ];

        $gratongFee = 0;
        if ($this->shopeeGratongXtra) {
            $gratongFee = min((int) round($hasil * $gratongRate), self::MAX_SHOPEE_GRATONG_XTRA_FEE);
            $rincian[] = ['label' => 'Biaya Layanan (Gratis Ongkir XTRA)', 'value' => $gratongFee];
        }

        $cashbackFee = 0;
        if ($this->shopeeCashbackXtra) {
            $cashbackFee = min((int) round($hasil * $cashbackRate), self::MAX_SHOPEE_CASHBACK_XTRA_FEE);
            $rincian[] = ['label' => 'Biaya Layanan (Cashback XTRA)', 'value' => $cashbackFee];
        }

        $rincian[] = ['label' => 'Penghasilan', 'value' => $hasil - $adminFee - $gratongFee - $cashbackFee];

        return ['harga' => $hasil, 'rincian' => $rincian];
    }

    /** @return array{harga: int, rincian: array<int, array{label: string, value: int}>}|null */
    private function hitungTokopedia(float $price): ?array
    {
        $merchantRate = ($this->tokopediaAdminFeeMerchant ?? 0) / 100;
        $ongkirRate = ($this->tokopediaAdminFeeOngkir ?? 0) / 100;

        $upper = $price;
        $divider = 1 - $merchantRate;

        if (round($price * $ongkirRate) > self::MAX_TOKOPEDIA_ONGKIR_FEE) {
            $upper += self::MAX_TOKOPEDIA_ONGKIR_FEE;
        } else {
            $divider -= $ongkirRate;
        }

        if ($divider <= 0) {
            return null;
        }

        $hasil = (int) ceil($upper / $divider);
        $merchantFee = (int) round($hasil * $merchantRate);
        $ongkirFee = min((int) round($hasil * $ongkirRate), self::MAX_TOKOPEDIA_ONGKIR_FEE);

        return [
            'harga' => $hasil,
            'rincian' => [
                ['label' => 'Harga', 'value' => $hasil],
                ['label' => 'Biaya Layanan Merchant', 'value' => $merchantFee],
                ['label' => 'Biaya Layanan Bebas Ongkir', 'value' => $ongkirFee],
                ['label' => 'Penghasilan', 'value' => $hasil - $merchantFee - $ongkirFee],
            ],
        ];
    }

    /** @return array{harga: int, rincian: array<int, array{label: string, value: int}>}|null */
    private function hitungTiktok(float $price): ?array
    {
        $adminRate = ($this->tiktokAdminFee ?? 0) / 100;
        $divider = 1 - $adminRate;

        if ($divider <= 0) {
            return null;
        }

        $hasil = (int) ceil($price / $divider);
        $adminFee = (int) round($hasil * $adminRate);

        return [
            'harga' => $hasil,
            'rincian' => [
                ['label' => 'Harga', 'value' => $hasil],
                ['label' => 'Biaya Admin', 'value' => $adminFee],
                ['label' => 'Penghasilan', 'value' => $hasil - $adminFee],
            ],
        ];
    }

    public function render(): View
    {
        return view('livewire.kalkulator-biaya-admin-marketplace');
    }
}
