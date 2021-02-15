<?php
include "koneksi.php";

	$nm = $_POST['name'];
	$jml = $_POST['jumlah'];
	$hrg = $_POST['harga'];
	$subt = $_POST['total'];
	$q = "insert into dosen values ('$nm','$jml','$hrg','$subt')";
	
	$exQuery = mysqli_query($kon,$q);
	if (!exQuery){
		exit("ADA KESALAHAN");
	}else{
		echo"<font color='green'>BERHASIL";	
	}
	header("location:t_pesan.php");
?>