<?php 
//koneksi ke database
$conn=mysqli_connect("localhost", "baseanalyzer", "worm21011", "analyzer");

//ambil data dari database
$result=mysqli_query($conn, "SELECT * FROM mahasiswa");

if (!$result) {
	echo mysqli_error($conn);
}

 ?>