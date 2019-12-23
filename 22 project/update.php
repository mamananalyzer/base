<?php 

require 'functions.php';

$id = $_GET["id"];

$prod = query("SELECT * FROM product WHERE id = $id")[0 ];

if (isset($_POST["submit"])) {
	if (update($_POST) > 0 ) {
		echo 
		"
			<script>
				alert('data berhasil diubah !');
				document.location.href = 'base.php';
			</script>
		";
	} else {
		echo 
		"
			<script>
				alert('data gagal diubah !');
				document.location.href = 'base.php';
			</script>
		";
} 

}



 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Update Produk</title>
</head>
<body>
	<h1>Update Produk</h1>

	<form action="" method="POST">
		<input type="hidden" name="id" value="<?= $prod["id"]; ?>">
		<ul>
			<li>
				<label for="brand">Brand :</label>
				<input type="text" name="brand" id="brand" required value="<?= $prod["brand"]; ?>">
			</li>
			<li>
				<label for="type">Type :</label>
				<input type="text" name="type" id="type" required value="<?= $prod["type"]; ?>">
			</li>
			<li>
				<label for="code">Code :</label>
				<input type="text" name="code" id="code" required value="<?= $prod["code"]; ?>">
			</li>
			<li>
				<label for="purchaseorder">Purchaseorder :</label>
				<input type="text" name="purchaseorder" id="purchaseorder" required value="<?= $prod["purchaseorder"]; ?>">
			</li>
			<li>
				<label for="serialnum">Serial Number :</label>
				<input type="text" name="serialnum" id="serialnum" required value="<?= $prod["serialnum"]; ?>">
			</li>
			<li>
				<label for="spec">Spec :</label>
				<input type="text" name="spec" id="spec" required value="<?= $prod["spec"]; ?>">
			</li>
			<li>
				<label for="customer">Customer :</label>
				<input type="text" name="customer" id="customer" required value="<?= $prod["customer"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data !</button>
			</li>
		</ul>
		


	</form>
</body>
</html> 