<?php
        $hari = 3;

        switch ($hari) {
                case '1';
                        $ket ="Senin";
                        break;
                case '2';
                        $ket ="Selasa";
                        break;
                case '3';
                        $ket ="Rabu";
                        break;
                case '4';
                        $ket ="Kamis";
                        break;
                case '5';
                        $ket ="Jumat";
                        break;
                case '6';
                        $ket ="Sabtu";
                        break;
                case '7';
                        $ket ="Minggu";
                        break;
        }
        echo "hari ke-",$hari," adalah hari $ket";
        
?>