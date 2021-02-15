
<?php
require_once "../config/config.php";
if(isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url()."';</script>";
} else {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Pelanggan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style type="text/css">
	body{
		margin: 0;
		font-family:Arial, Helvetica, sans-serif;
		color: #010000;
	}

	.hearder {
		margin:auto;
		width: 100%;
		height: 148px;
		background-color: #262525;
		
	}

	.hearder h2 {
	margin: 0;
	margin-left: 5.0%;
	font-size: 28px;
	color: #FEFEFE;
	}

	ul {
		list-style-type: none;
		margin-top: 50px;
  		margin: 10;	
  		padding-left: 205px;
  		overflow: hidden;
  		font-size: 13px;
	}

	.top ul li { 
  		float: left;
	}

	li a {
  		display: block;
  		height: 100%;
  		color: white;
  		text-align: left;
  		padding:1px 12px;
  		text-decoration: none;
	}


	.info img {
	float: right; 
    margin-top: -10px;
    margin-right: 103%;
    margin-bottom: -20%;
    padding: 2px;
    width: 25px;
    height: 25px;
	}

	.info h5 {
	float: right;
	font-size: 12px; 
    margin-top: -68px;
    margin-right: 70.7%;
    padding: 2px;
    width: 145px;
    height: 22px;
    color: white;
	}

	.info h4 {
	float: right;
	font-size: 12px; 
    margin-top: -68px;
    margin-right: 62%;
    padding: 2px;
    width: 160px;
    height: 22px;
    color: white;
	}

	.info h3 {
	float: right;
	font-size: 12px; 
    margin-top: -69px;
    margin-right: 47%;
    padding: 2px;
    width: 237px;
    height: 32px;
    color: white;
	}

	.login input {
	float: right;
    margin-top: -75px;
    margin-right: 70px;
    padding: 2px;
    width: 130px;
    height: 25px;
	cursor: pointer;
	background-color: #FEB201;
	border-radius:5px;
	color: #010101;
	border: 0;
	font-size: 12px;
	}

	.login ul {
	float: right;
	margin-top: -73px;
    margin-right: 200px; 
    padding: 3px;
    width: 130px;
    height: 28px;
    font-size: 12px;
	}

	.garis hr {
	margin-top: -30px;
	margin-right: 70px;
	}

	.search input{
 	float: right;
	margin-top: -14px;
    margin-right: 180px; 
    padding: 3px;
    width: 170px;
    height: 17px;
    font-size: 11px;
    background: #FEFEFE;
    border: 0;
    border-radius: 3px;
	}

	.search h5 {
	float: right;
	font-size: 14px; 
	margin-top: -12px;
    margin-right: -250px; 
    padding: 2px;
    width: 50px;
    height: 22px;
    color: white;
	} 

	.button1:hover {
	background-color: #262525;
	border: 2px solid #262525;
	}

	.beli img {
	float: right;
	margin-top: -14px;
    margin-right: -285px; 
    padding: 3px;
    width: 30px;
    height: 26px;
    text-decoration: none;
	}

	.form-login {
	float: left;
	width: 37%;
	margin-top: 5%;
	margin-left: 7%;
	box-shadow: 1px 3px 10px;
	padding: 40px;
	background-color: white;
	font-size: 13px;
	}

	.form-register {
	float: right;
	width: 34%;
	margin-top: 5%;
	margin-right: 7%;
	box-shadow: 1px 3px 10px;
	padding: 37px;
	background-color: white;
	font-size: 13px;
	}
	.form-login input, button{
		height: 25px;
	}
	.footer{
    background-color:#000;
    color: white;
    padding: 5px;
    text-align:center;
    font-size: 12px;
    margin-top: 300px;
    position: relative;
    float: right;
	width: 100%;
	margin-top: 6%;
  	}
</style>
<body bgcolor="#FEFDEE">
	<div class="hearder">
		<font face="Serif">
			<h2>
				Yura<br>
				<img src="../img/f.png" width="auto" height="57">  Store 
			</h2>
		</font>
	<div class="info">
		<h5><img src="../img/price.jpg" width="auto" height="25"> Best Price </h5>
		<h4><img src="../img/quality.jpg" width="auto" height="25"> 100% Original </h4>
 		<h3><img src="../img/telp.jpg" width="auto" height="25"> Telp: +62 895331428778 </h3>
	</div>

	<div class="login">
		<a href="login.php"><input type="button" value="LOGIN / REGISTER"></a>
		<ul>
			<li>
				<a style="text-decoration: none;" href="#">HOW TO ORDER</a>
			</li>
		</ul>
	</div>

	<div class="garis">
		<hr width="78.6%" align="right">
	</div>

	<div class="search">
  		<input type="text" placeholder=" Search Product" name="search">
  		<h5> My cart </h5>
  	</div>

	<div class="beli">
		<a href="t_pesan.php"><img src="../img/kb.png"></a>
	</div>

	<div class="top">
		<ul>
			<li><a style="text-decoration: none;" href="http://localhost/dwxstore/">HOME</a></li>
			<li><a style="text-decoration: none;" href="../makanan.php">MAKANAN RINGAN</a></li>
  			<li><a style="text-decoration: none;" href="../jasa.php">JASA</a></li>
  			<li><a style="text-decoration: none;" href="../buku.php">BUKU</a></li>
  			<li><a style="text-decoration: none;" href="../baju.php">FASION</a></li>

		</ul>
	</div>
</div>


<div class="form-login">
	<h3 style="text-align: left; font-size: 19px;">LOGIN DISINI</h3>
	<hr>
	<?php 
		if(isset($_POST['login'])) {
			$npm = trim(mysqli_real_escape_string($con, $_POST['npm']));
			$pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
			$sql_login = mysqli_query($con, "SELECT * FROM login_user WHERE npm = '$npm' AND password = '$pass'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_login);
				if (mysqli_num_rows($sql_login) > 0) {
					$_SESSION['npm'] = $data['npm'];
					$_SESSION['pass'] = $data['password'];
					$_SESSION['nama'] = $data['nama'];
					$_SESSION['level'] = $data['level'];
						if($_SESSION['level'] == 'user') {
							echo "<script>window.location='".base_url()."/user/index.php';</script>";
						} ?>
			<?php
				} 
			} 
			?>

		<form method="post" action="">
			<br>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" style="width: 95%; margin-top: 10px;" type="number" name="npm" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" style="width: 95%; margin-top: 10px;" type="password" name="pass" required><br>
			</div>
				<button class="btn btn-warning" style="width: 100%;" type="submit" name="login">LOGIN</button>
		</form>
</div>

<div class="form-register">
	<h3 style="text-align: left; font-size: 19px;">DAFTAR DISINI</h3>
	<hr>
	<p align="justify">Dengan membuat akun, Anda akan dapat belanja melalui proses checkout lebih cepat, menyimpan beberapa alamat pengiriman, melihat dan melacak pesanan Anda di akun Anda dan banyak lagi. </p>
	<a href="registrasi.php"><button class="btn btn-warning" style="width: 100%; margin-top: 4%; font-size: 17px;" type="submit" name="login"></span>REGISTER</button>
	</div>


				</div>
			</div>
		</div>
	<div class="footer">
      <p><font color="#FFF">YuraStore &copy; 2021_18111174_YuliantoHerlambang_TIFRP18CNSA_UASWEB1 All Rights Reserved</font></p>
    </div>
    <br>
</body>
</html>

<?php 
	}
?>