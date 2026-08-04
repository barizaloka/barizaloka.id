<?php

namespace Database\Seeders;

use App\Models\PackageJasaWebsite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageJasaWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Paket Landing',
                'tagline' => 'Satu Halaman, Langsung Online. Cocok untuk jadwal kajian, info acara, atau profil sederhana.',
                'price' => 350000,
                'price_label' => 'Rp 350rb',
                'price_period' => 'per tahun',
                'features' => [
                    ['text' => '<strong>Domain .my.id GRATIS</strong>', 'indent' => false],
                    ['text' => '1 Halaman Landing Page', 'indent' => false],
                    ['text' => 'Desain Responsif (HP & Desktop)', 'indent' => false],
                    ['text' => 'SSL/HTTPS Gratis (Aman)', 'indent' => false],
                    ['text' => 'Hosting 1 Tahun', 'indent' => false],
                    ['text' => 'Pengerjaan Cepat (1-3 Hari)', 'indent' => false],
                    ['text' => '<strong>Layanan Ubah Isi GRATIS:</strong>', 'indent' => false],
                    ['text' => 'Ganti teks/gambar fleksibel (retensi normal)', 'indent' => true],
                    ['text' => 'Revisi layout ringan (retensi normal)', 'indent' => true],
                    ['text' => 'Backup Data Rutin', 'indent' => false],
                    ['text' => 'Konsultasi Konten via WhatsApp', 'indent' => false],
                ],
                'cta_label' => 'Pilih Paket Landing',
                'whatsapp_message' => 'Halo Barizaloka, saya tertarik dengan Paket Landing',
                'is_featured' => false,
                'badge_label' => null,
                'order' => 1,
            ],
            [
                'name' => 'Paket CMS',
                'tagline' => 'Bisa Diurus Sendiri. Cocok untuk UMKM, organisasi, atau masjid yang aktif update informasi.',
                'price' => 600000,
                'price_label' => 'Rp 600rb',
                'price_period' => 'per tahun',
                'features' => [
                    ['text' => '<strong>Domain .my.id GRATIS</strong>', 'indent' => false],
                    ['text' => 'Menggunakan Laravel<strong>Terbaru</strong>', 'indent' => false],
                    ['text' => 'Gratis Upgrade Versi Laravel (Tiap Tahun)', 'indent' => false],
                    ['text' => 'Dashboard Sendiri (Bisa edit sendiri)', 'indent' => false],
                    ['text' => 'Tampilan Profesional & Responsif', 'indent' => false],
                    ['text' => 'Maksimal 5 Halaman Kustom', 'indent' => false],
                    ['text' => 'SSL/HTTPS Gratis', 'indent' => false],
                    ['text' => 'Termasuk Hosting', 'indent' => false],
                    ['text' => 'Backup Mingguan (Retensi 7 hari)', 'indent' => false],
                    ['text' => 'Keamanan & Monitoring Dasar', 'indent' => false],
                    ['text' => 'Pengerjaan 3-7 Hari', 'indent' => false],
                    ['text' => 'Gratis Konsultasi via WhatsApp', 'indent' => false],
                    ['text' => '<strong>Layanan Ubah Isi GRATIS:</strong>', 'indent' => false],
                    ['text' => 'Ganti teks/gambar fleksibel (retensi normal)', 'indent' => true],
                    ['text' => 'Revisi layout ringan (retensi normal)', 'indent' => true],
                    ['text' => '<strong>Penambahan Fitur Baru:</strong> biaya menyesuaikan kompleksitas', 'indent' => false],
                ],
                'cta_label' => 'Pilih Paket CMS',
                'whatsapp_message' => 'Halo Barizaloka, saya tertarik dengan Paket CMS',
                'is_featured' => true,
                'badge_label' => 'Paling Populer',
                'order' => 2,
            ],
            [
                'name' => 'Paket Marketplace Digital',
                'tagline' => 'Jualan Produk Digital Sendiri. Cocok untuk kreator ebook, template, atau kelas online (mirip Lynk.id).',
                'price' => 1200000,
                'price_label' => 'Mulai Rp 1,2jt',
                'price_period' => 'per tahun',
                'features' => [
                    ['text' => '<strong>Domain .my.id GRATIS</strong>', 'indent' => false],
                    ['text' => 'Menggunakan Laravel<strong>Terbaru</strong>', 'indent' => false],
                    ['text' => 'Dashboard Sendiri (Kelola produk & pesanan)', 'indent' => false],
                    ['text' => 'Halaman Katalog Produk Digital', 'indent' => false],
                    ['text' => 'Upload Produk Digital (ebook, template, video, dll)', 'indent' => false],
                    ['text' => 'Checkout Manual (Transfer + Konfirmasi WhatsApp)', 'indent' => false],
                    ['text' => 'Pengiriman Produk Otomatis Setelah Konfirmasi', 'indent' => false],
                    ['text' => 'SSL/HTTPS Gratis', 'indent' => false],
                    ['text' => 'Termasuk Hosting', 'indent' => false],
                    ['text' => 'Backup Mingguan (Retensi 7 hari)', 'indent' => false],
                    ['text' => 'Laporan Penjualan Dasar', 'indent' => false],
                    ['text' => 'Pengerjaan 7-14 Hari', 'indent' => false],
                    ['text' => 'Gratis Konsultasi via WhatsApp', 'indent' => false],
                    ['text' => '<strong>Layanan Ubah Isi GRATIS:</strong>', 'indent' => false],
                    ['text' => 'Ganti teks/gambar fleksibel (retensi normal)', 'indent' => true],
                    ['text' => 'Revisi layout ringan (retensi normal)', 'indent' => true],
                    ['text' => '<strong>Biaya Tambahan (Opsional):</strong>', 'indent' => false],
                    ['text' => 'Integrasi Payment Gateway Otomatis (Midtrans/Xendit)', 'indent' => true],
                    ['text' => 'Multi-Vendor / Banyak Penjual', 'indent' => true],
                    ['text' => 'Penambahan Fitur Lain: biaya menyesuaikan kompleksitas', 'indent' => true],
                ],
                'cta_label' => 'Pilih Paket Marketplace',
                'whatsapp_message' => 'Halo Barizaloka, saya tertarik dengan Paket Marketplace Digital',
                'is_featured' => false,
                'badge_label' => null,
                'order' => 3,
            ],
        ];

        foreach ($packages as $package) {
            PackageJasaWebsite::updateOrCreate(
                ['slug' => Str::slug($package['name'])],
                $package
            );
        }
    }
}
