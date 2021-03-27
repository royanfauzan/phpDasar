<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar dasar PHP ulang</title>
</head>
<body>
    <?php
        define("phi",3.14);
        $nim = '1915323044';
        $nama = 'Royski';
        $alamat = 'Jln. jalan';
        $nilai = 99;
        $radius = 10;
        $lingkaran = phi*$radius*$radius;
        echo "NIM :". $nim. "<br>";
        echo "Nama :". $nama. "<br>";
        echo "Alamat :". $alamat. "<br>";
        echo "Nilai : $nilai". "<br>";

        echo "Pake Devine". "<br>";
        echo "Luas lingkaran :".$lingkaran . "<br>";



    ?>
</body>
</html>