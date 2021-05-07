<?php
    $expire = time()+10;
    setcookie('kunjungan',1,$expire);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Program Cookies</title>
</head>
<body>
    <?php 
    if (isset($_COOKIE['kunjungan'])) {
        echo "Selamat datang kembali";
    }else {
        echo "Ini Kunjungan anda pertama kali";
    }
    ?>
</body>
</html>