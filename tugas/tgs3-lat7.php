<?php
        $nilai = 77;

        if ($nilai<=100&&$nilai>=85) {
                $grade = "A";
        }elseif ($nilai<=84&&$nilai>=78) {
                $grade = "AB";
        }elseif ($nilai<=77&&$nilai>=72) {
                $grade = "B";
        }elseif ($nilai<=71&&$nilai>=68) {
                $grade = "BC";
        }elseif ($nilai<=67&&$nilai>=56) {
                $grade = "C";
        }elseif ($nilai<=55&&$nilai>=40) {
                $grade = "D";
        }elseif ($nilai<=39&&$nilai>=0) {
                $grade = "E";
        }else{
                $grade = " UNKOWN ";
        }
        echo "Nilai Anda ",$nilai,", GRADE Anda $grade";
        
?>