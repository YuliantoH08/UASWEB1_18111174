<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "db_proyek");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
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
	#table1{
		width: 90%;
		margin:auto;
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
	#content1{
		width: 50%;
		float: left;
	}
	#content2{
		width: 50%;
		float: right;
	}
	.content-style{
		height: 500px;
	}
	#body1{
		width: 90%;
		margin:auto;
	}
	.kampus img{
		border-bottom: solid 8px orange; 
		border-top: solid 8px orange; 
		height: 600px;
		margin: auto;
		margin-bottom: 2%; 
	}
	.footer{
    background-color:#000;
    color: white;
    padding: 5px;
    text-align:center;
    font-size: 12px;
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
				<a href="../auth/logout.php">Logout</a>
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
			<li><a class="active" href="#">HOME</a></li>
  			<li><a href="makanan.php">MAKANAN RINGAN</a></li>
  			<li><a href="jasa.php">JASA</a></li>
  			<li><a href="buku.php">BUKU</a></li>
  			<li><a href="baju.php">FASHION</a></li>
		</ul>
	</div>
	<div class="bg_website">
		<img width="100%;" src="../img/bg_website.jpeg">
	</div>
	<br>
	<?php
				$query = "SELECT * FROM db_proyek";
				$result = mysqli_query($connect, $query);
				?>
	<div id="table2">
		<table border="0" width="1215">	
			<tr>
				<th><p><a href="#"><img src="../img/Fashion/pakaian1.jpg" width="220" height="190"></p>
					<p><a title="">One Piece Luffy Black </a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 150.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Fashion/pakaian2.jpg" width="220" height="190"></p>
					<p><a title="">Astronot Yellow Funny Clotes</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 150.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Fashion/pakaian3.jpg" width="220" height="190"></p>
					<p><a title="">Astronot White Black Clotes</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 150.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Fashion/pakaian4.jpg" width="220" height="190"></p>
					<p><a title="">Astronot Bicycle Moon </a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 150.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
			</tr>
			<tr>
				<th><p><a href="#"><img src="../img/Jasa/jasa1.png" width="220" height="190"></p>
					<p><a title="">Jual-Install Software Game</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 100.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Jasa/jasa2.jpg" width="220" height="190"></p>
					<p><a title="">Install Ulang PC-Lapop</a></p>
					<div><a href="#" style="text-decoration: none; color: black;">IDR 75.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Jasa/jasa3.png" width="220" height="190"></p>
					<p><a title="">Jual-Install All Office</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 50.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Jasa/jasa4.jpg" width="220" height="190"></p>
					<p><a title="">Jasa Edit Foto </a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 25.000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
			</tr>
			<tr>
				<th><p><a href="#"><img src="../img/Makanan/makanan1.jpg" width="220" height="190"></p>
					<p><a title="">Risol Semangat Baru</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 2000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan2.jpg" width="220" height="190"></p>
					<p><a title="">Donat Taburan Salju</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 1500
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan3.jpg" width="220" height="190"></p>
					<p><a title="">Cumi-cumi Tomato Gurih</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 3000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
				<th><p><a href="#"><img src="../img/Makanan/makanan4.jpg" width="220" height="190"></p>
					<p><a title="">Gado-Gado Brutal</a></p>
					<a href="#" style="text-decoration: none; color: black;">IDR 2000
					<p><input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" /></p>
			</tr>
		</table>
		<br>
		<br>
	</div>
	<?php
					
				
			?>
	<div class="footer">
      <p><font color="#FFF">DWX STORE &copy; 2020 All Rights Reserved</font></p>
    </div>
    <br>
	<!-- CSS di satu dokumen
	<div id="conWrapper">
		<div id="content1" class="content-style">
			<img src="img/b1.jpg" width="600" height="550">
		</div>
		<div id="content2" class="content-style">
			<img src="img/j1.jpg" width="607" height="300"><img src="img/g1.jpg" width="309" height="300">&ensp;<img src="img/p1.jpg" width="290" height="300">
		</div>
	</div>
	<div id="conWrapper2">
		<div id="body1">
			<img src="img/kom1.jpg" width="290" height="300"><img src="img/kom1.jpg" width="290" height="300"><img src="img/kom1.jpg" width="290" height="300"><img src="img/kom1.jpg" width="290" height="300">
		</div>
	</div>-->

</body>
</html>