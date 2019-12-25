 <?php 
	$conn = mysqli_connect("localhost", "baseanalyzer", "worm21011", "analyzer");


	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$bases = [];
		while ($base = mysqli_fetch_assoc($result)) {
			$bases[] = $base;
		}
		return $bases;
	}


function tambah($data) {
	 global $conn;
	 $brand = htmlspecialchars($data["brand"]);
	 $type = htmlspecialchars($data["type"]);
	 $code = htmlspecialchars($data["code"]);
	 $purchaseorder = htmlspecialchars($data["purchaseorder"]);
	 $serialnum = htmlspecialchars($data["serialnum"]);
	 $spec = htmlspecialchars($data["spec"]);
	 $customer = htmlspecialchars($data["customer"]);

	 $query = "INSERT INTO product
	 			VALUES
	 			('', '$brand', '$type', '$code', '$purchaseorder', '$serialnum', '$spec', '$customer')
	 			";

	 mysqli_query($conn, $query);

	 return mysqli_affected_rows($conn);
}


function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM product WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function update($data) {
	 global $conn;

	 $id = $data["id"];
	 $brand = htmlspecialchars($data["brand"]);
	 $type = htmlspecialchars($data["type"]);
	 $code = htmlspecialchars($data["code"]);
	 $purchaseorder = htmlspecialchars($data["purchaseorder"]);
	 $serialnum = htmlspecialchars($data["serialnum"]);
	 $spec = htmlspecialchars($data["spec"]);
	 $customer = htmlspecialchars($data["customer"]);

	 $query = "UPDATE product SET 
	 			brand = '$brand', 
	 			type = '$type',
	 			code = '$code',
	 			purchaseorder = '$purchaseorder',
	 			serialnum = '$serialnum',
	 			spec = '$spec',
	 			customer = '$customer'
	 			WHERE id = $id
	 			";

	 mysqli_query($conn, $query);

	 return mysqli_affected_rows($conn);
}









 ?>