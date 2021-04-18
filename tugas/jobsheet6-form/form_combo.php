<!DOCTYPE html>
<html>
<head>
	<title>Form Input Combobox</title>
</head>
<body>
	<p>Bahasa Pemrograman yang paling anda suka</p>
	<form id="form_combo" name="form_combobox" method="POST" action="Proses_combobox.php">
		<select name="favorit">
			<option value="Java"> Java </option>
			<option value="Visual"> Visual </option>
			<option value="Delphi"> Delphi </option>
			<option value="PHP"> PHP </option>
			<option value="C++"> C++ </option>
		</select>
			<p></p>
			<p><input type="submit" name="button" value="Tampil"></p>
	</form>
</body>
</html>