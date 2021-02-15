<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "db_proyek");
?>
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
	#table2{
		width: 90%;
		margin: auto;
		margin-right: 60px;
	}
	#table2 th{
		text-decoration: none;
		font-size: 15px;
		font-family: calibri;
	}
	#table2 input{
		border:none;
		border-radius: 10px;
		font-size: 15px;
		background: #FEC60C;
		height:35px;
		width:90px;
	}
</style>
<body>
	<div class="hearder">
		<font face="Serif">
			<h2>
				DWX <br>
				<img src="../img/f.png" width="auto" height="57">  Store 
			</h2>
		</font>
	<div class="info">
		<h5><img src="../img/price.jpg" width="auto" height="25"> Best Price </h5>
		<h4><img src="../img/quality.jpg" width="auto" height="25"> 100% Original </h4>
 		<h3><img src="../img/telp.jpg" width="auto" height="25"> Telp: +62 81384524213 </h3>
	</div>

	<div class="login">
		<a href="#"><input type="button" value="<?= $_SESSION['nama'] ?>"></a>
		<ul>
			<li>
				<a href="index.php">HOW TO ORDER</a>
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
			<li><a class="active" href="index.php">HOME</a></li>
  			<li><a href="makanan.php">MAKANAN RINGAN</a></li>
  			<li><a href="jasa.php">JASA</a></li>
			<li><a href="buku.php">BUKU</a></li>
  			<li><a href="baju.php">FASHION</a></li>
		</ul>
	</div>
	<br>
	<center>
	<div id="table2">
		<table border="0" width="1215">
			<tr>
				<th><p><a href="#"><img src="../img/Makanan/makanan1.jpg" width="220" height="190"></p>
					<p><a title="">Risol Semangat Baru</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 2000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan2.jpg" width="220" height="190"></p>
					<p><a title="">Donat Taburan Salu</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 1500
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan3.jpg" width="220" height="190"></p>
					<p><a title="">Cumi-Cumi Tomato Gurih </a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 3000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan4.jpg" width="220" height="190"></p>
					<p><a title="">Gado-Gado Brutal</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 2000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
			</tr>

			<tr>
				<th><p><a href="#"><img src="../img/Makanan/makanan5.jpg" width="220" height="190"></p>
					<p><a title="">Udang Bakar</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 3500
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan6.jpg" width="220" height="190"></p>
					<p><a title="">Belut Goreng</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 5000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan7.jpg" width="220" height="190"></p>
					<p><a title="">Tahu Pedas Level Naga</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 4000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan8.jpg" width="220" height="190"></p>
					<p><a title="">Aneka Es Pisang</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 2500
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
			</tr>
		</table>
	</div>
	</center>
	
</body>
</html>