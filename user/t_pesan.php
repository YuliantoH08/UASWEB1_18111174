
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
	#content2{
    overflow:auto;
    width: 90%;
  	}
  	table{
        color:black;
        border-collapse: collapse;
        font-family: Arial;
        width: 100%;
      }
      th, td {
        text-align: justify;
        padding: 3px;
        border: 1px solid #010101;
        height: 30px;
      }
      th{
        background-color: #4A4A4A;
        color: white;
        height: 35px;
      }
      tr:nth-child(even) {
        background-color: #FEFEFE;
      }
      tr:hover {
        background-color: ;
      }
</style>
<body>
	<div class="hearder">
		<font face="Serif">
			<h2>
				DWX <br>
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
		<a href="t_pesan.php"><img src="img/kb.png"></a>
	</div>

	<div class="top">
		<ul>
			<li><a class="active" href="index.php">HOME</a></li>
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
	<div id="content2">
	<table width="" align="center" border="1">
    <tr>
      <th width="130" height="39" align="center" bgcolor="#FFFFFF" style="width: 50%;"><center>Nama Produk</center></th>
      <th width="167" align="center" bgcolor="#FFFFFF" style="width: 7%;"><center>Jumlah</center></th>
      <th width="164" align="center" bgcolor="#FFFFFF" style="width: 10%;"><center>Harga</center></th>
      <th width="136" align="center" bgcolor="#FFFFFF" style="width: 10%;"><center>Subtotal</center></th>
    </tr>
    <tr>
      <th width="130" height="39" align="center" bgcolor="#FFFFFF" style="width: 50%;"><center>Nama Produk</center></th>
      <th width="167" align="center" bgcolor="#FFFFFF" style="width: 7%;"><center>Jumlah</center></th>
      <th width="164" align="center" bgcolor="#FFFFFF" style="width: 10%;"><center>Harga</center></th>
      <th width="136" align="center" bgcolor="#FFFFFF" style="width: 10%;"><center>Subtotal</center></th>
    </tr>
    <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
    <tr>
      <td height="37" align="center"><?php echo $values["item_name"]; ?></td>
      <td align="center"><center><?php echo $values["item_quantity"]; ?></center></td>
      <td align="center"><center>$ <?php echo $values["item_price"]; ?></center></td>
      <?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
      <td align="center""><center>$ <?php echo number_format($total, 2); ?></center></td>
    </tr>
    <?php
					}
					?>
  </table>
  <button style="width: 25%; margin-top: 2%; float: right; background-color: orange; border: none; color: black; font-size: 17px;" type="submit" name="login"></span><a href="http://localhost/poltekposb/pesan.php" style="text-decoration: none; color: black;">LANJUT KE PEMBAYARAN</a></button>
	</div>
	</center>

</body>
</html>