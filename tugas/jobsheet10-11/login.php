<!DOCTYPE html>
<html>
<head>
	<title>CRUD php dan MYSQLI</title>
</head>
<body>
	<h2>LOGIN USER DENGAN SESSION</h2>
	<br>
    <?php 
        if (isset($_GET["pesan"])) {
            if ($_GET["pesan"]=="gagal") {
                echo "Login gagal, username dan password salah!!";
            } else if ($_GET["pesan"]=="login") {
                echo "anda telah berhasil Login";
                header("location:menu_akademik.php");
                exit();
            } else if ($_GET["pesan"]=="belum_login") {
                echo "anda harus Login untuk mengakses halaman admin";
            }
            
        }
    
    ?>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
                <td>:</td>
				<td><input type="text" name= "username"></td>
			</tr>
			<tr>
				<td>Password</td>
                <td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>
</html>