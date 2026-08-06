<?php

use App\Livewire\KalkulatorBiayaAdminMarketplace;
use Livewire\Livewire;

test('selecting a marketplace resets previous inputs and rows', function () {
    Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'shopee')
        ->set('shopeeAdminFee', 6.5)
        ->call('pilihMarketplace', 'tokopedia')
        ->assertSet('marketplace', 'tokopedia')
        ->assertSet('shopeeAdminFee', null)
        ->assertCount('rows', 1);
});

test('can add and remove price rows', function () {
    $component = Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'shopee')
        ->call('tambahBaris')
        ->assertCount('rows', 2);

    $secondRowId = $component->get('rows')[1]['id'];

    $component->call('hapusBaris', $secondRowId)
        ->assertCount('rows', 1);
});

test('calculates shopee price including admin fee', function () {
    $component = Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'shopee')
        ->set('shopeeAdminFee', 6.5)
        ->set('rows.0.price', 100000)
        ->call('hitung');

    expect($component->get('rows')[0]['result'])->toMatchArray([
        'harga' => 106952,
    ]);
});

test('calculates tokopedia price including merchant and shipping fees', function () {
    $component = Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'tokopedia')
        ->set('tokopediaAdminFeeMerchant', 4.25)
        ->set('tokopediaAdminFeeOngkir', 1)
        ->set('rows.0.price', 100000)
        ->call('hitung');

    expect($component->get('rows')[0]['result'])->toMatchArray([
        'harga' => 105541,
    ]);
});

test('calculates tiktok shop price including admin fee', function () {
    $component = Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'tiktok-shop')
        ->set('tiktokAdminFee', 5)
        ->set('rows.0.price', 50000)
        ->call('hitung');

    expect($component->get('rows')[0]['result'])->toMatchArray([
        'harga' => 52632,
    ]);
});

test('reset form clears inputs but keeps the selected marketplace', function () {
    Livewire::test(KalkulatorBiayaAdminMarketplace::class)
        ->call('pilihMarketplace', 'shopee')
        ->set('shopeeAdminFee', 6.5)
        ->set('rows.0.price', 100000)
        ->call('hitung')
        ->call('resetForm')
        ->assertSet('marketplace', 'shopee')
        ->assertSet('shopeeAdminFee', null)
        ->assertCount('rows', 1);
});
