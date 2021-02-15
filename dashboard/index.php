<?php 
include_once('../header.php'); 
?>

<div class="row">
          <div class="col-lg-12">
            <h1>Dashboard </h1>
            <ol class="breadcrumb">
               <li><a href="index.php" style="letter-spacing: 1px;"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
        	<div class="col-lg-12">
        		<p style="font-size: 3vw; text-align: center; font-family: Courier New, Monospace; font-weight: bolder; position: relative; top: 150px;"> Selamat Datang <mark><?=$_SESSION['user']?></mark> di Website Hipmi </p>
        	</div>
        </div>

<?php include_once('../footer.php'); 
?>