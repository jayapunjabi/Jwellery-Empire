<?php 
	include("header.php");
	error_reporting(0);
	session_start();
	//var_dump($_SESSION);
	//$_SESSION['uid'];
	mysql_connect("localhost", "root", "") OR die("Could not connect with server!!");
	mysql_select_db("jwellery") OR  die("Could not open database!!");
	//$id =$_REQUEST['id'];
	//display product categories
	$cid = $_REQUEST['cid'];
	$query = "SELECT * FROM product";
	if(!empty($cid)){
		$query.=" where cid='$cid'";
	}
	$productSet = mysql_query($query);
	// insert into cart table
	$id = !empty($_SESSION['user_id'])?$_SESSION['user_id']:'';
	if(!empty($_REQUEST['cart_id'])){
		 $pid = !empty($_REQUEST['cart_id'])?$_REQUEST['cart_id']:'';
		//echo $pid exit;
		mysql_query("insert into mycart(user_id,id,status) values('$id','$pid','Active')");
		//header("location:index.php");
		echo "<script>window.location.href='productpanel.php'</script>";
		exit;
	}
?>


	<div class="container-fluid">
		<?php 
			$i=1;
			while($row= mysql_fetch_object($productSet)){
				//var_dump($row);
				if($i==1){
		?>
		<div class="row"> 
		<?php 
			}
		?>
			<div class="panel-group panel-info col-sm-6 col-md-3">		
				<div class="panel-heading" style="margin-top:10px;height:150px;">
					<h2><?=$row->name?></h2>
				</div>
				<div class="panel-body">
            	<img src="image/<?= $row->id ?>.jpg" class="img-responsive img-thumbnail" style="height:300px">
				</div>
				<div class="panel-footer" style="background:#95b5e6">
				<?php
					if(!empty($id)){
				?>
				<center><a href="?cart_id=<?= $row->id ?>" class="btn btn-warning">Add Cart</a> 
				<?php
					}
				?>
				<a href="product_info.php?id=<?= $row->id ?>" class="btn btn-success">Read More</a></center>
				</div>
				
			</div>
		<?php
			$i++;
			if($i==5){
			$i=1;
		?>
			</div>
		<?php
			}
			}
		?>
	</div>
	</div>
	<?php require_once("footer.php");?>