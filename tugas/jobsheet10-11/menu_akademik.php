<!DOCTYPE html>
<html>
<head>
	<title>CRUD php dan MYSQLI</title>
</head>
<body>
	<h2>LOGIN USER DENGAN SESSION</h2>
	<br>
    <?php 
        session_start();
        $username = $_SESSION['username'];
        $status = $_SESSION['status'];
        echo "<h2>Selamat datang $username, anda berhasil login</h2>
        Menu Utama <br><br>
        <a href='listMahasiswa.php'>Data Mahasiswa</a><br><br>
        <a href='listDosen.php'>Data Dosen</a>";
    ?>
	<form method="post" action="logout.php">
        <input type="submit" value="LOGOUT">
	</form>
</body>
</html>