<?php 
require 'functions.php';

$barang = query("SELECT * FROM product")
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Amptron Instrumindo</title>
</head>
<body>
	<h1>Produk Amptron Instrumindo</h1>
	<a href="tambahproduk.php">Tambah Produk</a>
	<br><br>
	<table border="4" cellpadding="14" cellspacing="4">
		
		<tr>
			<th>No.</th>
			<th>Action</th>
			<th>ID</th>
			<th>Brand</th>
			<th>Type</th>
			<th>Code</th>
			<th>Purchase Order</th>
			<th>Serial Number</th>
			<th>Spec.</th>
			<th>Customer</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ( $barang as $base) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="update.php?id=<?= $base["id"]; ?>">Edit</a> |
					<a href="delete.php?id=<?= $base["id"]; ?>" onclick=" return confirm ('yakin menghapus data ?');">Delete</a>
				</td>
				<td><?= $base["id"]; ?></td>
				<td><?= $base["brand"]; ?></td>
				<td><?= $base["type"]; ?></td>
				<td><?= $base["code"]; ?></td>
				<td><?= $base["purchaseorder"]; ?></td>
				<td><?= $base["serialnum"]; ?></td>
				<td><?= $base["spec"]; ?></td>
				<td><?= $base["customer"]; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>
</html>