<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>

	<?php echo form_open(site_url('Home/create')); ?>
	<!--<form action="base_url/MyController/create" method="post">-->
	<!-- helper form, referensi :
	// https://www.codeigniter.com/userguide3/helpers/form_helper.html-->
	<br>
	<input type="text" name="kode_barang" placeholder="kode
	barang"><br><br>
	<input type="text" name="nama_barang" placeholder="nama
	barang"><br><br>
	<input type="text" name="satuan" placeholder="satuan"><br><br>
	<input type="number" name="jumlah" placeholder="jumlah"><br><br>
	<input type="number" name="harga" placeholder="harga"><br><br>
	<input type="text" name="kategori" placeholder="kategori"><br><br>
  <td colspan="2" align="center"><input name="adiputra" type="file" /></td>
	<input type="submit" name="submit" value="Submit">
	<?php echo form_close(); ?><br>
	<!--</form>-->
	<a href="<?php echo site_url('read')  ?>"><button>Read</button></a>
</body>
</html>
