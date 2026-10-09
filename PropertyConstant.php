<?php

class Produk
{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

}

//object
$produk = new Produk();

//input ke propertyyyyyyyyyyy
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung
$pajak = Produk::PAJAK * 100;
$JumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $JumlahPajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: Rp.".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>"
;
echo "Pajak: ".$pajak;
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$total;