<!DOCTYPE html>
<html>
<head>
	<title>CRUD php dan MYSQLI</title>
</head>
<body>
	<h2>CRUD DATA MAHASISWA</h2>
	<br>
	<a href="tambahMahasiswa.php"> + Tambah Mahasiswa</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
			include 'koneksi.php';
			$no = 1;

			//Menentukan Batas, cek halaman dan posisi data
			$batas = 5;
			$halaman =@$_GET['halaman'];
			if (empty($halaman)) {
				$posisi = 0;
				$halaman = 1;
			}else {
				$posisi = ($halaman-1)*$batas;
			}

			// HItung jumlah data dan pembuatan halaman (link)
			$query2 = mysqli_query($koneksi, "select * from mahasiswa");
			$jumlahData = mysqli_num_rows($query2);
			$jumlahHalaman = ceil($jumlahData/$batas);

			echo "<br> Halaman : ";

			for ($i=1; $i <= $jumlahHalaman; $i++) { 
				if ($i!=$halaman) {
					echo "<a href='listMahasiswa.php?halaman=$i'>$i</a> |";
				} else {
					echo "<b>$i</b> |";
				}
				
			}

			echo "<p>Total Mahasiswa :<b> $jumlahData</b> Orang</p>";

			$data = mysqli_query($koneksi, "select * from mahasiswa LIMIT $posisi,$batas");
			while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama'] ?></td>
				<td><?php echo $d['nim'] ?></td>
				<td><?php echo $d['alamat'] ?></td>
				<td>
					<a href="edit.php?id= <?php echo $d['id'];?>"> EDIT</a>
					<a href="hapus.php?id= <?php echo $d['id'];?>"> HAPUS</a>
				</td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>