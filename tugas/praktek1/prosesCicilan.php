<?php 

    $namaKred = $_POST['namaKred'];
    $jumlahPinjam = $_POST['jumlahPinjam'];
    $lamaPinjam = $_POST['lamaPinjam'];
    $jenisBunga = $_POST['radioKategori'];
    $tipeKar=$_POST['karType'];
    $persenBunga = $_POST['persenBunga'];


    function hitungBungaSebulan($jenisB,$persenB,$pinjam){
        if ($jenisB=="bulanan") {
            $persenB = ($persenB/100);
        } else if ($jenisB=="tahunan") {
            $persenB = ($persenB/100)/12;
        } else {
            $persenB = 0;
        }
        return ($persenB*$pinjam);
    }

    function pokokPinjaman($jmlPinjam, $lamaP){
        return ($jmlPinjam/$lamaP);
    }

    function hitungAsuransiSebulan($pinjam,$lamaP,$type){
        if (strcmp($type,"Karyawan Tetap")==0) {
            $persenAs = (10/100)/$lamaP;
        } else if (strcmp($type,"Out Sourcing")==0) {
            $persenAs = (15/100)/$lamaP;
        } else if (strcmp($type,"Tenaga Harian")==0) {
            $persenAs = (20/100)/$lamaP;
        }
        return ($persenAs*$pinjam);
    }

    $asuransi =0;
    $totalBunga =0;
    $totalAsuransi =0;
    $bungaPerBln = hitungBungaSebulan($jenisBunga,$persenBunga,$jumlahPinjam);
    $pokokCicilan = pokokPinjaman($jumlahPinjam,$lamaPinjam);

    echo "Nama Kreditor : $namaKred <br>";
    echo "Pinjaman : $jumlahPinjam ,";
    echo "Lama Pinjaman : $lamaPinjam bulan,";
    echo "Prosentase Bunga : $persenBunga %, ";
    echo "Jenis Bunga : $jenisBunga <br>";
    echo "Type Karyawan : $tipeKar <br>";
    echo "Tambahan Pilihan : <br>";
    if (isset($_POST['asuransi'])) {
        echo "- ".$_POST['asuransi']." <br>";
        $asuransi = hitungAsuransiSebulan($jumlahPinjam,$lamaPinjam,$tipeKar);
    }
    if (isset($_POST['biChek'])) {
            echo "-".$_POST['biChek']."<br>";
    }

    $bayarPerBln = $pokokCicilan+$bungaPerBln+$asuransi;
    echo "<br>";
    echo "Bunga Per Bulan : $bungaPerBln ,";
    echo "Asuransi Per Bulan : $asuransi <br>";

    echo "Pembayaran Cicilan : <br>";

    for ($x = 1; $x <= $lamaPinjam; $x++) {
        echo "Bulan : $x ,";
        echo "Pokok : $pokokCicilan ,";
        echo "Bunga : $bungaPerBln ,";
        echo "Asuransi/Bln : $asuransi ,";
        echo "Bayar Per Bulan : $bayarPerBln ,";
        $jumlahPinjam -=$pokokCicilan;
        echo "Saldo : $jumlahPinjam <br>";
        $totalBunga +=$bungaPerBln;
        $totalAsuransi +=$asuransi;
    }
    echo "<br> <br>";
    echo "Total Bunga yang diBayarkan = $totalBunga <br>";
    echo "Total Asuransi yang diBayarkan = $totalAsuransi <br>";

?>