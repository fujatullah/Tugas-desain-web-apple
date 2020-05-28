<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO APPLE </title>
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/css/supak.css">
	<script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
		<div class="navbar navbar-default">
			<div class="col-md-1">
		 <span  class="glyphicon glyphicon-apple" style="font-size:100px"></span></div>
			<div class="col-md-7">
				<p ><h2>Welcome To Apple</h2></p>
				<p>Introducing CyberDrive</p>
					
					<?php 
					echo date('l, d-m-Y');
					?>

				</div> 
		</div>
			<div class="row">
				<div class="col-md-2">
					<div class="panel panel-primary">
						<div class="panel panel-heading"><i class="glyphicon glyphicon-list">    MENU</i>
						</div>	

						<div class="panel panel-body">
							<ul class="nav nav-stacked">
							<li><a href="http://localhost/arsip_surat/" class="glyphicon glyphicon-home"> Beranda</a></li>
							<li><a href="?page=Berita" class="glyphicon glyphicon-flash"> Berita</a></li>
							<li><a href="?page=findit" class="glyphicon glyphicon-search"> Find It</a></li>
							<li><a href="?page=quotes" class="glyphicon glyphicon-ok-circle"> Quotes</a></li>
							<li><a href="?page=tentang" class="glyphicon glyphicon-cog"> Tentang Aplikasi</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-10">
					<?php
						if(empty($_GET['page'])){
							include 'pages/beranda.php';
						}else{
							$hal= $_GET['page'];
							include 'pages/'.$hal.'.php';
						}

							?>

			</div>
			</div>
				<div class="navbar navbar-fixed-bottom">
					<h4><center> versi 9.0 | Hak Cipta Dilindungi Undang-undang</center></h4>
				</div>
		</div>
</body>
</html>