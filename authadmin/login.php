<?php
require_once "../config/config.php";
if(isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url()."';</script>";
} else {

?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

	<title>Login</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?=base_url()?>/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/font-awesome/css/font-awesome.min.css">

</head>
<body>
<div style="margin-top: 10%;">
	<div style="margin-top: 150px;
				margin: auto;
				width: 32%;
				box-shadow: 5px 3px 20px;
				padding: 50px;
				background-color: white; 
			   ">
		<h2 class="text-center">Admin Login</h2>	
		<hr>
	<?php 
		if(isset($_POST['login'])) {
			$user = trim(mysqli_real_escape_string($con, $_POST['user']));
			$pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
			$sql_login = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_login);
				if (mysqli_num_rows($sql_login) > 0) {
					$_SESSION['user'] = $data['username'];
					$_SESSION['nama'] = $data['nama'];
					$_SESSION['level'] = $data['level'];
						if($_SESSION['level'] == 'admin') {
							echo "<script>window.location='".base_url()."/dashboard/index.php';</script>";
						}
			} else { ?>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1"> 
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<center><span class="fa fa-times-circle-o" aria-hidden="true"></span>
							 <strong>Login Gagal</strong> </center><center>Username / Password yang</center> <center> anda masukan salah </center>
					</div>
				</div>
			<?php
			}
		}
		?>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label> 
				<input type="text" name="user" class="form-control" placeholder="Username Anda" required>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="pass" class="form-control" placeholder="password Anda" required>
			</div>
			<div >
				<button style="width: 49%; border-radius: 20px;" type="submit" name="login" class="btn btn-primary" value="login">Login</button>
				<button style="width: 49%; float: right; border-radius: 20px;" type="clear" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
	<script src="<?=base_url('assets/js/jquery-1.10.2.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script> 
</body>
</html>

<?php 
	}
?>