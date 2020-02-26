<?php
	if(!empty($_REQUEST['msg']))
	{
		echo "<script>alert('Email and Password not match')</script>";
	}
	
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			.navbar-inverse .navbar-nav>li>a
			{
				color:black;	
			}
			.navbar-inverse
			{
				background-color:#ead29d;
				
			}
			input[type="submit"]
			{
				border:2px solid #000000;
				padding:15px;
				width:90px;
			}
			table
			{
				border:5px #000000 solid;
			}
			table th,td
			{
				border:5px #000000 inset;
				padding:12px;
			}
			input[type="text"]:focus
			{
					border:2px #00ccff solid;
			}
		</style>
	</head>
	<body>
		<div>
		<nav class="nav navbar-inverse navbar-fixed-top">
			
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#one">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" style="color:black"> <b><h2 style="margin:0px;font-family:Brush Script Std;font-size:35px;"> Jewellery Empire </h2> </b></a>
				</div>
				
			</div>
		</div>
	<div style="margin-top:140px;">
		<form method="post" action="process.php" style="padding-bottom:0px;margin-left:30px;">
			<div align="center"><h3>Admin Login</h3></div>
			<table  align="center" height="40%" width="40%" style="font-weight:bold;font-color:black;">
				<tr>
					<th>
						 Email
					</th>
					<td>
						<input type="email" placeholder="Enter Email" name="em1"/>
					</td>
				</tr>
				<tr>
					<th>
						Password
					</th>
					<td>
						<input type="password"  placeholder="Enter Password" name="pw1"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="login"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>

