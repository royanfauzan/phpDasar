<?php

$saldo = $jumlahPinjaman;

for ($x = 1; $x <= $lamaPinjam; $x++) {
    echo "Bulan : $x ,";
    echo "Pokok : $pokokCicilan ,";
    
    $saldo = $saldo - $pokokCicilan;
    echo "Saldo : $saldo <br>";

    $totalBunga = $totalBunga+$bungaPerBln;
    $totalAsuransi =$totalAsuransi+$asuransiBulanini;
}

function pokokPinjaman($jmlPinjam, $lamaP){
    return ($jmlPinjam/$lamaP);
}


function hitungBungaSebulan($jenisB,$persenB,$pinjam){
    if ($jenisB=="bulanan") {
        $hitung = ($persenB/100)*$pinjam;
    } else if ($jenisB=="tahunan") {
        $hitung = (($persenB/100)/12)*$pinjam;
    }
    return $hitung;
}

?>