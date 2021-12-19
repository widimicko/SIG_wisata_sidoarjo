<?php 
	$connection = mysqli_connect("localhost","root","","kuliah_sig");

	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
?>