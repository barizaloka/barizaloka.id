<?php

test('kalkulator biaya admin marketplace page can be rendered', function () {
    $response = $this->get('/kalkulator-biaya-admin-marketplace');

    $response->assertSuccessful();
    $response->assertSeeLivewire('kalkulator-biaya-admin-marketplace');
});
