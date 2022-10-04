<?php

//jualan Produk
// komik
// game
class Produk {
    public $judul,
           $penulis,
           $penertbit,
           $harga;

    public function __construct( $judul= "judul", $penulis ="penulis", $penertbit ="penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penertbit;
        $this->harga = $harga;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }


}


class CetakInfoProduk {
        public function cetak( Produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Produk("Garis Waktu", "Fiersa Besari", "Ryan Fany Fadlyllah AR", 100000);
$produk2 = new Produk("Basara", "Lukman", "Sony Computer", 25000);



echo "Novel : " . $produk1->getlabel();
echo "<br>";
echo "Game : " .$produk2->getlabel();
echo "<br>";

$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);

