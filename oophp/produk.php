<?php

//jualan Produk
// komik
// game
class Produk {
    public $judul ="judul",
           $penulis ="penulis",
           $penertbit ="penerbit",
           $harga = 0;

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }


}
//$produk1 = new Produk();
//$produk1->judul = "Tsubatsa";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = "FIFA22";
//$produk2->tambahProperty = "WOW";
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Garis Waktu";
$produk3->penulis = "Fiersa Bersari";
$produk3->penerbit ="Ryan fany fadlyllah AR";
$produk3->harga = 100000;




$produk4 = new produk();
$produk4 -> judul = "Basara";
$produk4 -> penulis = "Lukman";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 25000;

echo "Novel : " . $produk3->getlabel();
echo "<br>";
echo "Game : " .$produk4->getlabel();