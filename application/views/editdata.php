<!DOCTYPE html>
<html>
<head>
	<title>Halaman Awal</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url();?>index.php/Home/editdata">
		Kode Barang : <br><input type="text" name="kode_barang" value="<?php echo $kode_barang ?>" readonly="$kode_barang"><br>
		Nama Barang : <br><input type="text" name="nama_barang" value="<?php echo $nama_barang ?>"><br>
		Satuan : <br><input type="text" name="satuan" value="<?php echo $satuan ?>"><br>
		Jumlah : <br><input type="int" name="jumlah" value="<?php echo $jumlah ?>"><br>
		Harga : <br><input type="text" name="harga" value="<?php echo $harga ?>"><br>
		Kategori : <br><input type="text" name="kategori" value="<?php echo $kategori ?>"><br>
		<button type="submit">Tambahkan</button>
	</form>

</body>
</html>
