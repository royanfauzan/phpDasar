<?php 

    $namaProd = $_POST['namaProd'];
    $kodeProd = $_POST['kodeProd'];
    $kategori = $_POST['radioKategori'];
    $hargaPokok=$_POST['hargaPokok'];
    $persenUntung = $_POST['persenUntung'];

    function hitungUntung($proUntung, $hpk){
        return ($proUntung/100)*$hpk;
    }

    function hitungJual($hpk,$untung){
        return $hpk+$untung;
    }

    function hargaPajak($ktProduk,$hJual,$hpk){
        if ($ktProduk=="lokal") {
            $persenPajak = 0.1;
        } else if ($ktProduk=="import") {
            $persenPajak = 0.15;
        } else {
            $persenPajak = 0;
        }
        return ($persenPajak*$hJual)+$hpk;
    }

    $keuntungan = hitungUntung($persenUntung,$hargaPokok);
    $hargaJual = hitungJual($hargaPokok,$keuntungan);
    $setelahPajak = hargaPajak($kategori,$hargaJual,$hargaPokok);

    echo "Nama Produk : $namaProd <br>";
    echo "Kode Produk : $kodeProd <br>";
    echo "Kategori : $kategori <br>";
    echo "Dapat Digunakan Oleh : <br>";
    if (isset($_POST['pengguna1'])) {
        echo "+".$_POST['pengguna1']."<br>";
    }
    if (isset($_POST['pengguna2'])) {
            echo "+".$_POST['pengguna2']."<br>";
    }
    if (isset($_POST['pengguna3'])) {
            echo "+".$_POST['pengguna3']."<br>";
    }
    echo "Harga Pokok : $hargaPokok <br>";
    echo "Prosentase Keuntungan : $persenUntung % <br>";
    echo "Keuntungan : $keuntungan <br>";
    echo "Harga Jual : $hargaJual <br>";
    echo "Harga Setelah Pajak : $setelahPajak <br>";

?>