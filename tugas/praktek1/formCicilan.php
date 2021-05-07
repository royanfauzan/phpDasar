<!DOCTYPE html>
<html>
<title>Form Penjualan</title>

<body>
    <form name="form_cicilan" method="POST" action="prosesCicilan.php">
        Nama Kreditur : <input type="text" name="namaKred"><br>
        Jumlah Pinjaman :  <input type="number" name="jumlahPinjam"><br>
        Lama Pinjam : <input type="text" name="lamaPinjam"> Bulan<br>
        Prosentase Bunga : <input type="text" name="persenBunga">%<br>
        <p>Jenis Bunga</p>
        <input type="radio" name="radioKategori" value="bulanan" />Bulanan
	    <input type="radio" name="radioKategori" value="tahunan" />Tahunan
        <br>
        <p>Type Karyawan</p>
        <select name="karType">
			<option value="Karyawan Tetap"> Karyawan Tetap </option>
			<option value="Out Sourcing"> Out Sourcing </option>
			<option value="Tenaga Harian"> Tenaga Harian </option>
		</select>
        <br>
        <p>Tambahan Pilihan :</p>
        <input type="checkbox" name="asuransi" value="Asuransi">Asuransi<br>
        <input type="checkbox" name="biChek" value="BI Cheking">BI Checking<br>
        <br>
        <input type="submit" name="Proses" value="Proses">
    </form>
</body>

</html>