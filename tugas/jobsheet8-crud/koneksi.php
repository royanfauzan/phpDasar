<?php
    $koneksi = mysqli_connect("localhost","root","","akademik");
    if (mysqli_connect_errno()) {
        echo "KOneksi database gagal : ".mysqli_connect_errno();
    }
?>