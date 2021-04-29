<!DOCTYPE html>
<html>
<title>Form Penjualan</title>

<body>
    <form name="form_penjualan" method="POST" action="prosesPenjualan.php">
        Nama Produk : <input type="text" name="namaProd"><br>
        Kode Produk :  <input type="text" name="kodeProd"><br>
        <p>Kategori Produk</p>
        <input type="radio" name="radioKategori" value="lokal" />Lokal
	    <input type="radio" name="radioKategori" value="import" />Import
        <br>
        <p>Dapat digunakan oleh :</p>
        <input type="checkbox" name="pengguna1" value="Balita">Balita<br>
        <input type="checkbox" name="pengguna2" value="Anak-Anak">Anak-Anak<br>
        <input type="checkbox" name="pengguna3" value="Dewasa">Dewasa<br>
        <br>
        Harga Pokok : <input type="text" name="hargaPokok"><br>
        Prosentase Keuntungan : <input type="text" name="persenUntung">%<br>
        <input type="submit" name="Proses" value="Proses">
    </form>
</body>

</html>