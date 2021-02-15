<!DOCTYPE html>
<html>
<head>
	<title>DWX STORE</title>
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
	#pesan{
		width: 40%;
		margin: auto;
		padding: 40px;
	}
	.form-login {
	width: 40%;
	margin-top: 2%;
	box-shadow: 1px 3px 10px;
	padding: 40px;
	text-align: left;
	}
	.form-login input{
		width: 100%;
		height: 20px;
	}
	.form-login select{
		width: 101%;
		height: 30px;
	}	
</style>
<body>
	<div class="hearder">
		<font face="Serif">
			<h2>
				Polpos <br>
				<img src="img/f.png" width="auto" height="57">  Store 
			</h2>
		</font>
	<div class="info">
		<h5><img src="img/price.jpg" width="auto" height="25"> Best Price </h5>
		<h4><img src="img/quality.jpg" width="auto" height="25"> 100% Original </h4>
 		<h3><img src="img/telp.jpg" width="auto" height="25"> Telp: +62 81384524213 </h3>
	</div>

	<div class="login">
		<a href="auth/login.php"><input type="button" value="LOGIN / REGISTER"></a>
		<ul>
			<li>
				<a href="auth/logout.php">keluar</a>
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
		<a href="t_pesan.php"><img src="img/kb.png"></a>
	</div>

	<div class="top">
		<ul>
			<li><a class="active" href="#">HOME</a></li>
			<li><a href="#">PENDATANG BARU</a></li>
  			<li><a href="#">MAKANAN RINGAN</a></li>
  			<li><a href="#">KOMPUTER</a></li>
  			<li><a href="#">JASA</a></li>
  			<li><a href="#">BUKU</a></li>
  			<li><a href="#">SEPATU</a></li>
  			<li><a href="#">TAS</a></li>
		</ul>
	</div>
	<br>
	<center>
		<div class="form-login">
			Pembayaran
    		<hr>
			<form method="" action="">
    		<label>NPM</label><br>
    		<input style="margin-top: 10px;" type="text" id="npm" name="npm">
    		<p>
    		<label>Nama Lengkap</label><br>
    		<input style="margin-top: 10px;" type="text" id="nama" name="nama">
    		<p>
    		<label>Alamat</label><br>
    		<input style="margin-top: 10px;" type="text" id="alamat" name="alamat">
    		<p>
    		<label>Kelas</label><br>
    		<input style="margin-top: 10px;" type="text" id="jurusan" name="jurusan">
    		<p>
    		<label for="jurusan">Jurusan </label><br>
    			<select style="margin-top: 10px;" name="jurusan" onchange="cek()">
				<option value="ak">Akuntansi (D3)</option>
				<option value="akk">Akuntansi Keuangan (D4)</option>
				<option value="lb">Logistic Bisnis (D3)</option>
				<option value="bl">Logistik Bisnis (D4)</option>
				<option value="mb">Manajemen Bisnis (D3)</option>
				<option value="bm">Manajemen Bisnis (D4)</option>
				<option value="mi">Manajemen Informatika (D3)</option>
				<option value="it">Teknik Informatika (D3)</option>
				<option value="ti">Teknik informatika (D4)</option>
				</select>
    	</form>
		</div>
		</center>
</body>
</html>