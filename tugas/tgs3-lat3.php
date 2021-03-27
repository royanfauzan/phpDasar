<html>
<title>
    Belajar Menggunakan Operator di PHP
</title>
<head>
    <h1>
        <b>
            OPERATOR PHP
        </b>
    </h1>
</head>
<body>
    <?php
        define("a", 4);
        define("b", 3);
        $tambah = a + b;
        $kurang = a - b;
        $kali = a * b;
        $bagi = a / b;

        echo "nilai a : ".a." <br>";
        echo "nilai b : ".b." <br>";

        echo "Hasil Penambahan : $tambah <br>";
        echo "Hasil Pengurangan : $kurang <br>";
        echo "Hasil Perkalian : $kali <br>";
        echo "Hasil Pembagian : $bagi <br>";
    ?>
</body>
</html>
