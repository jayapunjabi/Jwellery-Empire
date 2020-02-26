<?php
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	$query="SELECT*FROM feedback";
	//Search Record
	/*if(!empty($_REQUEST['full_name'])){
		$search=$_REQUEST['full_name'];
		$query .=" WHERE full_name LIKE '$search'";
	}
	echo $query;*/
	$record=mysql_query($query);
	
	
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
			table
			{
				
				margin-top:80px;
				border:outset 5px #000000;
			}
			
			table th{
				background-color:#ffad33;
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
						<li><a href="#"><span class="glyphicon glyphicon-edit"></span>View Feedback</a></li>
						<li><a href="admin.php"><span class="glyphicon glyphicon-plus-sign"></span> Insert product</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>

	
	
	<table  align="center" width="70%">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone No</th>
			<th>Review</th>
		</tr>
		<?php while($row= mysql_fetch_object($record)){ ?>
		<tr>
			<td align="center"><?=$row->fname?></td>
			<td><?=$row->lname?></td>
			<td><?=$row->email?></td>
			<td><?=$row->phone_no?></td>
			<td><?=$row->message?></td>
		</tr><?php } ?>
	</table>
	<!--<p style="text-align:center">&copy; 2018 Our Resume. All rights reserved | Designed by Anita Jain,Jaya Punjabi and Karishma Rupani</p>-->