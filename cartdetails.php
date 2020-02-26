<?php
	include("header.php");
	$total=0;
	//var_dump($_SESSION);
	$id = !empty($_SESSION)?$_SESSION['user_id']:'';
	$query="SELECT name,price,product.id,mycart.* FROM product,mycart WHERE product.id= mycart.id and mycart.user_id = '$id'";
	$cartQuery=mysql_query($query);

	//Delete Record
		if(!empty($_REQUEST['del'])){
			$cart_id = $_REQUEST['del'];
			//exit;
			$query = "DELETE FROM mycart WHERE cartid='$cart_id'";
			//exit;
			mysql_query($query);
			//header("location:cartdetails.php");
			echo"<script>window.location.href='cartdetails.php'</script>";
			exit;
		}
?>
<div class="container">
	<table class="table">
		<tr class="success">
			<th>Serial No</th>
			<th>Product Image</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php
			$i=1;
			while($row = mysql_fetch_object($cartQuery)){
				//var_dump($row);
				$total+=$row->price;
		?>
			<tr class="warning">
				<td> <?= $i++ ?> </td>
				<td> <img src = "image/<?= $row->id?>.jpg" height="50px",width="50px"/> </td>
				<td><?= $row-> name?></td>
				<td><?= $row-> price?></td>
				<td><a href="?del=<?= $row->cartid ?>" onClick="return confirm('Are you sure to delete record??')">Delete</a></td>
			</tr>
		<?php
			}
		?>
		<?php
		$_SESSION['sum'] = $total;
	?>
	<tr class="success">
	<th colspan="4" > Total </th>
	<td> <?=$total ?> </td>
	</tr>
	</table>
	<center> <a href="order.php" class="btn btn-success">Buy All </a> </center>

				
</div>
