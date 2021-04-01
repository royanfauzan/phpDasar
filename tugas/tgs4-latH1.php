<!DOCTYPE html>
<html>
<body>
        <?php
        $awal=0;
        $akhir=48;
        $i=1;
        $max_i=10;
        $acc_angka=0;
        $terbesar=0;
        while($i<$max_i){
                $i++;
                $angka = rand($awal,$akhir);
                echo ("Angka ke-". $i ." : ".$angka."<br>");
                $acc_angka=$acc_angka+$angka;
                if($angka>$terbesar){
                        $terbesar=$angka;
                }
        }
        echo("<br>");
        echo("Jumlah seluruh angka = ".$acc_angka."<br>");
        echo("angka yang paling besar = ".$terbesar);
        ?>    
</body>
</html>