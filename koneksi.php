<?php

	$host = "localhost";
	$name = "root";
	$pass = "";
	$db_name = "pnilai";
	$koneksi = mysql_connect($host, $name, $pass) or die ("Koneksi gagal, kesalahan : " . mysql_error());
	
	mysql_select_db($db_name, $koneksi) or die ("Memilih database gagal, kesalahan : " . mysql_error());

?>