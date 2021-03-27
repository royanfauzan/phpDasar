<!DOCTYPE html>
<html>
<body>
    <?php
        $kalimat="Saya sedang belajar php dasar";

        echo "<h2> Contoh penggunaan strlen () , str_word_count (),strrev (),strpos (), dan str_replace () </h2>";
        echo "<h3> Kalimat : ".$kalimat." </h3>";
        echo "Hasil Strlen() : ".strlen($kalimat)."<br>";
        echo "Hasil Str_word_count() : ".str_word_count($kalimat)."<br>";
        echo "Hasil Strrev() : ".strrev($kalimat)."<br>";
        echo "Hasil Strpos() : ".strpos($kalimat,"php")."<br>";
        echo "Hasil Str_replace() \"belajar\" menjadi \"latihan\" : ".str_replace("belajar","latihan",$kalimat)."<br>";
    ?>
</body>
</html>