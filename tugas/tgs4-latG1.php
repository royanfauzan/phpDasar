<!DOCTYPE html>
<html>
<body>
        <?php
        $awal=5;
        $akhir=20;
        $i=1;
        $max_i=10;
        $acc_angka=0;
        while($i<$max_i){
                $i++;
                $angka = rand($awal,$akhir);
                echo ("Angka ke-". $i ." : ".$angka."<br>");
                $acc_angka=$acc_angka+$angka;
        }
        echo("<br>");
        echo("Jumlah seluruh angka = ".$acc_angka);
        ?>    
</body>
</html>