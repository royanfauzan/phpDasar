<?php
    $jabatan = $_POST['jabatan'];
    $hariKerja = $_POST['hariker'];
    $nama = $_POST['nama'];
    $gajiPokok=$_POST['gajip'];
    $alamat = $_POST['alamat'];

    function uangMakan($hk,$um){
        return $hk*$um;
    }

    function totalGaji($gp,$tj,$um){
        return $gp+$um+$tj;
    }

    if (strtolower($jabatan)=="manajer") {
        $uangMakan = 50000;
        $tunjanganJabat = 1500000;
    } elseif(strtolower($jabatan)=="supervisor") {
        $uangMakan = 30000;
        $tunjanganJabat = 500000;
    }elseif(strtolower($jabatan)=="staf") {
        $uangMakan = 50000;
        $tunjanganJabat = 150000;
    }else {
        $uangMakan = 0;
        $tunjanganJabat = 0;
    }

    $hitungMakan = uangMakan($hariKerja,$uangMakan);
    $totalGaji= totalGaji($gajiPokok,$tunjanganJabat,$hitungMakan);
    
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jabatan : $jabatan <br>";
    echo "Gaji Pokok : $gajiPokok <br>";
    echo "Jumlah Hari Kerja : $hariKerja <br>";
    echo "Uang Makan = $hariKerja x $uangMakan = $hitungMakan <br>";
    echo "Tunjangan Jabatan = $tunjanganJabat <br>";
    echo "Total Gaji = $hitungMakan + $gajiPokok + $tunjanganJabat = $totalGaji <br>";

?>