<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Barang</h1>
	<form method="post" action=".php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>kode_barang</td>
		<td><input type="text" name="kode_barang"></td>
	</tr>
	<tr>
		<td>nama_barang</td>
		<td><input type="text" name="nama_barang"></td>
	</tr>
	<tr>
		<td>satuan</td>
		<td><input type="text" name="satuan"></td>
	</tr>
	<tr>
		<td>jumlah</td>
		<td><input type="text" name="jumlah"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input name="harga"></textarea></td>
	</tr>
	<tr>
		<td>kategori</td>
		<td><input name="kategori"></textarea></td>
	</tr>
	<tr>
		<td>gambar</td>
		<td><input type="file" name="gambar"></td>
	</tr>
	</table>

	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
