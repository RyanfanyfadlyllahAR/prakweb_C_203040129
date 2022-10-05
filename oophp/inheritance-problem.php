<?php

//jualan Produk
// komik
// game
class Produk {
    public $judul,
           $penulis,
           $penertbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct( $judul= "judul", $penulis ="penulis", $penertbit ="penerbit", $harga = 0, 
    $jmlhalaman = 0, $waktumain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penertbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe =$tipe;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfolengkap() {
     //Novel : Garis Waktu | Fiersa Besari, Ryan Fany Fadlyllah Ar (RP.100000) - 100 Halaman.   
     $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga})";

    if( $this->tipe == "Novel") {
        $str .= " - {$this->jmlhalaman}Halaman.";
    } else if( $this->tipe =="Game"){
        $str .= " -{$this->waktumain}jam.";
    }

        return $str;
 }


}


class CetakInfoProduk {
        public function cetak( Produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Produk("Garis Waktu", "Fiersa Besari", "Ryan Fany Fadlyllah AR", 100000, 100, 0, "Novel");
$produk2 = new Produk("Basara", "Lukman", "Sony Computer", 25000, 0 ,50, "Game");




echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();