<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>
<body>
	<table style="width: 100%;">
		<thead>
			<td>checklist</td>
			<td>kode barang</td>
			<td>nama barang</td>
			<td>satuan</td>
			<td>jumlah</td>
			<td>harga</td>
			<td>kategori</td>
		</thead>
		<?php echo form_open(site_url('MyController/delete_barang')); ?>
		<form method="post" action="<?php echo base_url().'index.php/MyController/delete_barang'?>">
		<tbody>
		<?php foreach($data1 as $x) { ?>
			<tr>
			<td><input type="checkbox" name="barang[]" value="<?php echo $x['kode_barang']?>"></td>
			<td><?= $x['kode_barang'] ?></td>
			<td><?= $x['nama_barang'] ?></td>
			<td><?= $x['satuan'] ?></td>
			<td><?= $x['jumlah'] ?></td>
			<td><?= $x['harga'] ?></td>
			<td><?= $x['kategori'] ?></td>
			<td><?= anchor('ShoppingCart/buy/'.$x['kode_barang'], 'Buy');?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table><br><br>
	<input type="submit" value="Delete">
	</form>
	<?php echo form_close(); ?>
	<a href="<?= base_url() ?>"><button>Back</button></a>
</body>
</html>
