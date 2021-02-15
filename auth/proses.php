<?php
require_once "../config/config.php";

if(isset($_POST['registrasi'])) {
	$npm = trim(mysqli_real_escape_string($con, $_POST['npm']));
	$email = trim(mysqli_real_escape_string($con, $_POST['email']));
	$nama= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$password = trim(mysqli_real_escape_string($con, $_POST['password']));
	$jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan']));
	$angkatan = trim(mysqli_real_escape_string($con, $_POST['angkatan']));

	mysqli_query($con, "INSERT INTO login_user (npm, email, nama, password, jurusan, angkatan) VALUES ('$npm', '$email', '$nama', '$password', '$jurusan', '$angkatan')") or die (mysqli_error($con));
	echo "<script>window.location='login.php';</script>";
}
?>
