<?php

include_once('connectivity/connection.php');


		
		$sql="SELECT * FROM `order` ORDER BY oid DESC LIMIT 1  ";
		$result= mysql_query($sql);
?>
<html>
	<head>
		<title>Reciept</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	</head>
	<body>
	 <div class="container-fluid" id="content">
	 <div class="jumbotron home-spacer" id="products-jumbotron">
               <center>
				   <h1>ThankYou For Shopping</h1>
					<p>Please visit Again.</p>
				</center>

            </div>
			</div>
		 <div class="container">
            <div class="table-responsive">
            <table class= "table table-striped">
				<?php
				while($rows=mysql_fetch_assoc($result))
				{
			?>
			<tr>
				<th colspan="3">
					<center>Your Reciept</center>
					</th>
				</tr>
				<tr>
					<th>
					Name
					</th>
					<td>
						<?php  echo $rows['name'];?>
					</td>
				</tr>
				<tr>
					<th>
					Phone Number
					</th>
					<td>
						<?php  echo $rows['phono'];?>
					</td>
				</tr>
				<tr>
					<th>
					Email
					</th>
					<td>
						<?php  echo $rows['email'];?>
					</td>
				</tr>
				<tr>
					<th>
					Address
					</th>
					<td>
						<?php  echo $rows['address'];?>
					</td>
				</tr>
				<tr>
					<th>
					City
					</th>
					<td>
						<?php  echo $rows['city'];?>
					</td>
				</tr>
				<tr>
					<th>
					Total Amount
					</th>
					<td>
						<?php  echo $rows['amount'];?>
					</td>
				</tr>
				<tr>
					<th>
						
						<button type="button" class="btn btn-primary" onClick="window.location.href='index.php'" >Continue Shopping</button>
					<td>
						<button type="button" class="btn btn-success" onClick="window.print()"> <i class="fas fa-print"></i> Print</button>
					</td>
					</th>
					<td>
					</td>
				</tr>
				<?php
				}
				?>
		</table></center>
	</body>
</html>