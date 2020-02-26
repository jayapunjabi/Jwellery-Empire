<?php
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	session_start();
	if(empty($_SESSION['em1']))
	{
		header("location:adminlogin.php");
	}

	$query="SELECT*FROM product";
	$query1="SELECT*FROM category";
	$record=mysql_query($query1);
	if(!empty($_REQUEST['se1'])){
		$search=$_REQUEST['se1'];
		$query .=" WHERE cid='$search'";
		//echo $query;
	}
	
	
	$record1=mysql_query($query);
	if(!empty($_REQUEST['del'])){
		$del = $_REQUEST['del'];
		$query = "DELETE FROM product WHERE id='$del'";
		//exit;
		mysql_query($query);
		
		header("location:product.php");
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
			th{
				border:outset 5px #000000;
				padding:12px;
				
				
			}
			td{
				
				border:outset 5px #000000;
				padding:12px;
				
			}
			.t1
			
			{
				margin-top:80px;
				border:outset 5px #000000;
			}
			
			.t1 th{
				background-color:#ffad33;
			}
			.t2
			{
				margin-top:60px;
			}
			.t2 th
			{
				background-color:#00ccff;
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
				<div class="collapse navbar-collapse" id="one">
					<ul class="nav navbar-nav navbar-right " >
						<li><a href="product.php"><span class="glyphicon glyphicon-list-alt"></span> View All products</a></li>
						<li><a href="feedback.php"><span class="glyphicon glyphicon-edit"></span>View Feedback</a></li>
						<li><a href="admin.php"><span class="glyphicon glyphicon-plus-sign"></span> Insert product</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	<form>
		<table class="t2" align="center">
			<tr>
				<th>Enter Category</th>
				<td><select name="se1">
					<option value="">--Select Category--</option>
					<?php 
						while($row = mysql_fetch_object($record)){
					?>
						<option value="<?= $row->cid ?>"><?= $row->name?></option>
					<?php
						}
					?>
				</select>
				</td>
						
				
				<th><input type="submit" value="Search"/></th>
			</tr>
		</table>
	</form>

	
	
	<table class="t1" align="center" width="70%">
	<tr>
			<th>ProductId</th>
			<th>CategoryId</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Description</th>
			<th>Image</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php while($row= mysql_fetch_object($record1)){ ?>
		<tr>
			<td align="center"><?=$row->id?></td>
			<td><?=$row->cid?></td>
			<td><?=$row->name?></td>
			<td><?=$row->price?></td>
			<td><?=$row->discount?></td>
			<td><?=$row->description?></td>
			<td><img src="image/<?= $row->id ?>.jpg" height="90px" width="90px"/>
			</td>
			<td><?=$row->status?></td>
			<td>
            <a href="admin.php?Edit=<?= $row->id ?>">Edit/</a>
            <a href="?del=<?= $row->id ?>" onClick="return confirm('Are you sure to delete record??')">Delete</a>
            </td>
		</tr><?php } ?>
	</table>
	<p style="text-align:center">&copy; 2018 Our Resume. All rights reserved | Designed by Anita Jain,Jaya Punjabi and Karishma Rupani</p>
	
	