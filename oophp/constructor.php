<?php

//jualan Produk
// komik
// game
class Produk {
    public $judul ="judul",
           $penulis ="penulis",
           $penertbit ="penerbit",
           $harga = 0;

    public function __construct( $judul, $penulis, $penertbit, $harga ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penertbit;
        $this->harga = $harga;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }


}


$produk1 = new Produk("Garis Waktu", "Fiersa Besari", "Ryan Fany Fadlyllah AR", 100000);
$produk2 = new Produk("Basara", "Lukman", "Sony Computer", 25000);


echo "Novel : " . $produk1->getlabel();
echo "<br>";
echo "Game : " .$produk2->getlabel();