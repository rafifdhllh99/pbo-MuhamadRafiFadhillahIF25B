<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk('P001','Laptop',1000000,5);

//output
echo "produk: ".$produk -> nama;
echo "<br/>";

echo "harga: ".$produk -> harga;
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.".$produk->total();