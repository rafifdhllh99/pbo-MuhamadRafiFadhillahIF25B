<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk();

$produk ->setKode("P001")
        ->setNama("Laptop")
        ->setHarga(10000000)
        ->setStok(5);

//output
echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "Harga: ".$produk->getHarga();
echo "<br/>";

echo "Stok: ".$produk->getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.".$produk->total();