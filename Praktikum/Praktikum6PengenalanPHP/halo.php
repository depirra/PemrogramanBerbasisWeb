<?php
    echo "Halo, selamat datang di dunia PHP";

    $nama = "Budi";
    $umur = 20;

    //Menampilkan nilai variabel
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . "tahun<br>";

    //Konstanta
    define("NAMA_KONSTANTA", nilai);

    define("SITE_NAME", "unsika.ac.id");
    define("VERSION", "1.0");

    echo "Selamat datang di " . SITE_NAME . "<br>";
    echo "Versi Sistem: " . VERSION . "<br>";

    //Tipe Data String
    $nama = "Andi";
    echo "Nama saya adalah”. $nama;

    //Tipe Data Integer
    $umur = 25;
    echo "Umur saya” . $umur . “tahun";

    //Tipe Data Float
    $berat = 55.5;
    echo "Berat badan saya". $berat ."kg";

    //Tipe Data Boolean
    $isLogin = true;

    //Tipe Data Array
    $buah = ["apel", "jeruk", "mangga"];
    echo $buah[1];

    //Tipe Data Object
    class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();

   //Tipe Data Null
   $data = null;
   var_dump($data);
?>
