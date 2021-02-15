<!DOCTYPE html>
<html>
<head>
	<title>Buat akun baru Pelanggan</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
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
	margin-top: 3%;
	margin-left: 7%;
	box-shadow: 1px 3px 10px;
	padding: 40px;
	background-color: white;
	}
	.form-login input, button{
		height: 25px;
	}

	.form-register {
	float: right;
	width: 34%;
	margin-top: 3%;
	margin-right: 7%;
	box-shadow: 1px 3px 10px;
	padding: 40px;
	background-color: white;
	}
	.form-register input, button{
		height: 25px;
	}

</style>
<body>
	<div class="hearder">
		<font face="Serif">
			<h2>
				Yura <br>
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
			<li><a style="text-decoration: none;" class="active" href="http://localhost/dwxstore/">HOME</a></li>
  			<li><a style="text-decoration: none;" href="../makanan.php">MAKANAN RINGAN</a></li>
  			<li><a style="text-decoration: none;" href="../jasa.php">JASA</a></li>
  			<li><a style="text-decoration: none;" href="../buku.php">BUKU</a></li>
  			<li><a style="text-decoration: none;" href="../baju.php">FASION</a></li>
		</ul>
	</div>
</div>

<div>
<div class="form-login">
	<h3 style="text-align: left; font-size: 19px;">INFORMASI PRIBADI</h3>
	<hr>
		<form method="post" action="proses.php">

			<div class="form-group">
				<label>Email</label><br>
				<input class="form-control" style="width: 90%; margin-top: 10px;" type="text" name="email" required>
			</div>
			<div class="form-group">
				<label class="form-label">Jurusan</label>
				<select class="form-control" style="width: 90%; margin-top: 10px;" name="jurusan" required>
					<option value="">-Pilih Jurusan-</option>
					<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
					<option value="S1 Teknik Industri">S1 Teknik Industri</option>
					<option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual</option>
				</select>
			</div>
			<div class="form-group">
				<label class=>Angakatan</label>
				<select class="form-control" style="width: 90%; margin-top: 10px;" name="angkatan" required>
					<option value="">-Pilih Angkatan-</option>
					<option value="Angkatan 2016">Angkatan 2016</option>
					<option value="Angkatan 2017">Angkatan 2017</option>
					<option value="Angkatan 2018">Angkatan 2018</option>
					<option value="Angkatan 2019">Angkatan 2019</option>
				</select>
			</div>
			
		
</div>



<div class="form-register">
	<h3 style="text-align: left; font-size: 19px;">INFORMASI MASUK</h3>
	<hr>
	<br> 
		<div class="form-group">
			<label for="npm">NPM</label><br>
			<input style="width: 90%; margin-top: 10px;" id="npm" class="form-control" type="number" name="npm" required>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input style="width: 90%; margin-top: 10px;" class="form-control" type="text" name="nama" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input style="width: 90%; margin-top: 10px;" class="form-control" type="password" name="password" required>
		</div>	

</div>
	<div class="form-group">
			<center><button style="margin:auto; margin-right: 1040px; margin-top: 2%;" class="btn btn-danger" type="submit" name="registrasi"></span>REGISTARASI</button></center>
	</div>
	</form>
</div>
</body>
</html>