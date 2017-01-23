<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://fitkost.dk',
    'ck_59558a0a57dd07d0660e1eaf457fb693804cff17',
    'cs_a7a615564a9b6aa713a390d8f425ea94dec0ef1f',
    [
        'wp_api' => true,
        'version' => 'wc/v1',
        'verify_ssl' => true,
        'debug' => false
    ]
);

?>
