<?php 

require 'functions.php';

if (isset($_POST["submit"])) {
	if (tambah($_POST) > 0 ) {
		echo 
		"
			<script>
				alert('data berhasil ditambahkan !');
				document.location.href = 'base.php';
			</script>
		";
	} else {
		echo 
		"
			<script>
				alert('data gagal ditambahkan !');
				document.location.href = 'base.php';
			</script>
		";
} 

}



 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
</head>
<body>
	<h1>Tambah Produk</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="brand">Brand :</label>
				<input type="text" name="brand" id="brand" required>
			</li>
			<li>
				<label for="type">Type :</label>
				<input type="text" name="type" id="type" required>
			</li>
			<li>
				<label for="code">Code :</label>
				<input type="text" name="code" id="code" required>
			</li>
			<li>
				<label for="purchaseorder">Purchaseorder :</label>
				<input type="text" name="purchaseorder" id="purchaseorder" required>
			</li>
			<li>
				<label for="serialnum">Serial Number :</label>
				<input type="text" name="serialnum" id="serialnum" required>
			</li>
			<li>
				<label for="spec">Spec :</label>
				<input type="text" name="spec" id="spec" required>
			</li>
			<li>
				<label for="customer">Customer :</label>
				<input type="text" name="customer" id="customer" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data !</button>
			</li>
		</ul>
		


	</form>
</body>
</html>