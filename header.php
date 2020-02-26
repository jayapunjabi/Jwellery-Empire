<?php
	session_start();
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	$id = !empty($_SESSION['user_id'])?$_SESSION['user_id']:'';
	if(!empty($id)){
		$cartQuery = "select * from mycart where user_id= '$id'";
		$cart = mysql_query($cartQuery);
		$cnt = mysql_num_rows($cart);
	}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
			
		<style>
			.navbar-inverse .navbar-nav>li>a
			{
				color:black;	
			}
			.navbar-inverse
			{
				background-color:#E6E6FA;
				
			}
			.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img, .thumbnail>img {
				width:100%;
				height:90%;
			}
			.row{
				margin:0px;
			}

			
			ul.social-network {
				list-style: none;
				display: inline;
				margin-left:0 !important;
				padding: 0;
				
				
			}
			ul.social-network li {
				display: inline;
				margin: 0 1px;
			}


			.social-network a.icoRss:hover {
				background-color: #F56505;
			}
			.social-network a.icoFacebook:hover {
				background-color:#3B5998;
			}
			.social-network a.icoTwitter:hover {
				background-color:#33ccff;
			}
			.social-network a.icoGoogle:hover {
				background-color:#BD3518;
			}
			.social-network a.icoVimeo:hover {
				background-color:#0590B8;
			}
			.social-network a.icoLinkedin:hover {
				background-color:rgb(198,18,94);
			}
			.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
			.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
				color:#fff;
			}
			a.socialIcon:hover, .socialHoverClass {
				color:#44BCDD;
			}

			.social-circle li a {
				display:inline-block;
				position:relative;
				margin:0 auto 0 auto;
				-moz-border-radius:50%;
				-webkit-border-radius:50%;
				border-radius:50%;
				text-align:center;
				width: 35px;
				height: 35px;
				font-size:15px;
				padding-bottom:15px !important;
				background:black;
				padding-bottom:15px;
				
				
			}
			.social-circle li i {
				margin:0;
				line-height:42px;
				text-align: center;
			}

			.social-circle li a:hover i, .triggeredHover {
				-moz-transform: rotate(360deg);
				-webkit-transform: rotate(360deg);
				-ms--transform: rotate(360deg);
				transform: rotate(360deg);
				-webkit-transition: all 0.2s;
				-moz-transition: all 0.2s;
				-o-transition: all 0.2s;
				-ms-transition: all 0.2s;
				transition: all 0.2s;
			}
			.social-circle i {
				color: #fff;
				-webkit-transition: all 0.8s;
				-moz-transition: all 0.8s;
				-o-transition: all 0.8s;
				-ms-transition: all 0.8s;
				transition: all 0.8s;
			}
		</style>
</head>
<body>
	<div>
		<nav class="nav navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#one">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" style="color:black"> <b><h2 style="margin:0px;font-family:Brush Script Std;font-size:35px;"> Jewellery Empire </h2> </b></a>
				</div>
				<div class="collapse navbar-collapse" id="one">
					<ul class="nav navbar-nav navbar-right " >
						<li><a href="index.php"> Home <i class="fa fa-home fa-fw" aria-hidden="true"></i></a></li>
						<li><a href="about.php">About <span class="fas fa-info-circle"></span></a></li>
						
						<li class="dropdown"><a href="product2.php" data-toggle="dropdown" class="dropdown-toggle">Products <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="productpanel.php?cid=101">Rings</a></li>
								<li><a href="productpanel.php?cid=102">Necklace</a></li>
								<li><a href="productpanel.php?cid=103">Bracelets</a></li>
								<li><a href="productpanel.php?cid=104">Earings</a></li>
								<li><a href="productpanel.php">All Products</a></li>
							</ul>		
						
						<?php
							if(empty($_SESSION['user_id']))
							{
						?>
						<li><a href="#" data-toggle="modal" data-target="#three">Login  <i class="fas fa-sign-in-alt"></i></a></li>
						<li><a href="#" data-toggle="modal" data-target="#four">Sign up  <span class="glyphicon glyphicon-user"></span></a></li>
						<?php
							}
							else
							{
						?>
						<li><a href="cartdetails.php"> Cart<span class="fas fa-shopping-cart"></span> <span class="badge"></span><?=!empty($cnt)?$cnt:0?></a></li>	
						<li><a href="ulogout.php">Logout <span class="fas fa-sign-out-alt"></span></a></li>
						<li><a href="#">Hii  <?=!empty($_SESSION['name'])?$_SESSION['name']:''?></a></li>
						<?php
							}
						?>
						<li><a href="contact.php"> Contact Us <span  class="fas fa-file-signature"></span></a></li>
					</ul>
				</div>
		</nav>
	</div>