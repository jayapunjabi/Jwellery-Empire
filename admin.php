<?php
	error_reporting(0);
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	$btn="Insert";
	//insert record
	$query = "SELECT * FROM category";
	$queryResult = mysql_query($query);
		
	if(!empty($_REQUEST['s1']) && $_REQUEST['s1']=='Insert'){
		$cat=$_REQUEST['c1'];
		$name=$_REQUEST['pn1'];
		$price=$_REQUEST['p1'];
		$discount=$_REQUEST['discount'];
		$description=$_REQUEST['des'];
		
		$query="INSERT INTO product(cid,name,price,discount,description) VALUES($cat,'$name',$price,'$discount','$description')";
		//die($query);
		//exit;
		mysql_query($query);
		$location = $_FILES['img']['tmp_name'];
		$filename = mysql_insert_id().".jpg";
		move_uploaded_file($location,"image/".$filename);
		header("location:product.php");
	}
	if(!empty($id)){
		$cartQuery = "select * from mycart where user_id= '$id'";
		$cart = mysql_query($cartQuery);
		$cnt = mysql_num_rows($cart);
	}
	//edit query
	if(!empty($_REQUEST['Edit']))
	{
		$btn="Update";
		$id=$_REQUEST['Edit'];
		$data=mysql_query("SELECT* FROM product WHERE id='$id';");
		$er=mysql_fetch_object($data);
		//var_dump($er);
		//exit;
	}
	//update query
	if(!empty($_REQUEST["s1"]) && $_REQUEST["s1"]=="Update")
	{
		$id=$_REQUEST['nm'];
		$cat=$_REQUEST['c1'];
		$name=$_REQUEST['pn1'];
		$price=$_REQUEST['p1'];
		$discount=$_REQUEST['discount'];
		$description=$_REQUEST['des'];
		$query1="UPDATE product SET cid='$cat' ,name='$name' ,
		price='$price',discount='$discount',description='$description'
		WHERE id='$id'";
		//exit;
		mysql_query($query1);
		$location = $_FILES['img']['tmp_name'];
		$filename = $id.".jpg";
		move_uploaded_file($location,"image/".$filename);
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
			th
			{
				padding:12px;
				
			}
			td
			{
				padding:12px;
				
			}
			input[type="text"],select,textarea{
				width:100%;
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
						<!--<li><a href="usersignup.php"><span class="glyphicon glyphicon-edit"></span>View Users</a></li>-->
						<li><a href="admin.php"><span class="glyphicon glyphicon-plus-sign"></span> Insert product</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" name="nm" value="<?=$er->id?>"/>
	<div align="center" style="background-color:#00ffbb;margin-top:80px;font-family:Comic Sans Ms ;font-size:48;height:5%;font-weight:bolder;"><h3>Insert Product</h3></div><div></div>
	<table  border= "2px"align="center"  style="height:50%;margin-top:20px;">
		<tr>
        	<th>Categories</th>
            <td>
				<select name="c1" style="width:90%;">
					<option value="">--Select Category--</option>
					<?php 
						while($row = mysql_fetch_object($queryResult)){
					?>
						<option value="<?= $row->cid ?>" <?= $row->cid == $er->cid?'selected':''?>><?= $row->name?></option>
					<?php
						}
					?>
				</select>
			</td>
        </tr>
    	<tr>
        	<th>Product Name</th>
				<td>
					<input type="text" name="pn1" value="<?=$er->name?>"/>
				</td>
        </tr>
		<tr>
        	<th>Price</th>
				<td>
					<input type="text" name="p1" value="<?=$er->price?>"/>
				</td>
        </tr>
		<tr>
        	<th>Discount</th>
				<td>
					<input type="text" name="discount" value="<?=$er->discount?>"/>
				</td>
        </tr>
        <tr>
			<th>Description</th>
			<td><textarea name="des" cols="22" style="resize:none;"><?=$er->description?></textarea></td>
		</tr>
        
		<tr>
        	<th>Images</th>
            <td>
            	<input type="file" name="img"/></td>
            </td>
        </tr>
		<tr>
        	
            <td colspan="2" align="center"><input type="submit" name="s1" value="<?=$btn?>"/></td>
        </tr>
    </table>
</form>

		
		
		<div><p style="text-align:center;">&copy; 2019 Our Resume. All rights reserved | Designed by Jaya Punjabi</p></div>
	</body>
</html>