<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\Produk;
class Jasa {
    use Produk;
    public function payment($tipe) {

        return match($tipe) {
            "virtual" => 'virtual account',
            "qris" => 'qris',
            default => 'hanya bisa pembayaran va dan qris'
        };
    }
}