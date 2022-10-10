<?php

//jualan Produk
// komik
// game
class Produk {
    public $judul,
           $penulis,
           $penertbit,
           $harga;
          
    public function __construct( $judul= "judul", $penulis ="penulis", $penertbit ="penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penertbit;
        $this->harga = $harga;
       
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoproduk() {
     $str = "{$this->judul} | {$this->getlabel()} (Rp.{$this->harga})";

        return $str;
 }


}

class Novel extends Produk{
    public $jmlhalaman;

    public function __construct($judul= "judul", $penulis ="penulis", $penertbit ="penerbit", $harga = 0, 
    $jmlhalaman = 0) {

        parent::__construct($judul, $penulis, $penertbit, $harga);

        $this->jmlhalaman = $jmlhalaman;

    }

    public function getinfoproduk(){
        $str = "Novel : " .parent::getinfoproduk() ." - {$this->jmlhalaman} halaman.";

        return $str;
    }
}

class Game extends produk {
    public $waktumain;

    public function __construct( $judul= "judul", $penulis ="penulis", $penertbit ="penerbit", $harga = 0, 
    $waktumain = 0) {
        parent::__construct($judul, $penulis, $penertbit , $harga );
        
        $this->waktumain = $waktumain;
    }
    public function getinfoproduk(){
        $str = "Game :   " .parent::getinfoproduk() ."- {$this->waktumain} jam.";
        return $str;
    }
}

class CetakInfoProduk {
        public function cetak( Produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
    return $str;
    }
}


$produk1 = new Novel("Garis Waktu", "Fiersa Besari", "Ryan Fany Fadlyllah AR", 100000, 100);
$produk2 = new Game("Basara", "Lukman", "Sony Computer", 25000,50);




echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();