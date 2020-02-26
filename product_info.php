<?php require_once("header.php"); 
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	if(!empty($_REQUEST['id'])){
		$id = !empty($_REQUEST['id'])?$_REQUEST['id']:'';
		//$query = "SELECT * FROM product where id ='$pid'";
		$query = "SELECT p.id,p.name,price,discount,description
				from category as c,product as p
				where c.cid=p.cid and p.id = $id";
				
		$data = mysql_query($query);
		$recordSet = mysql_fetch_object($data);
		//var_dump($recordSet);
	}
?>
<div><h2 align="center"  style="font-weight:bold;font-family:Cooper Black; text-transform: uppercase;"><u><?= $recordSet->name ?></u></h2></div>
<div class="container">
	<div class="card">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6 col-sm-6">
					<div class="preview-pic tab-content">
						<div class="tab-pane active" id="pic-1">
							<img  src="image/<?= $recordSet->id ?>.jpg" class="img-responsive img1 img-thumbnail" style="height:400px;width:80%;border:4px solid #000000;border-radius:10px;" onerror="this.onerror=null;this.src='admin/image/NoImageAvailable.png';"/>
                        </div>
					</div>                    	
				</div>
				<div class="details col-md-6 col-sm-6">
					<h3 class="product-title">Product Name : <?= $recordSet->name ?></h3>
					<h4 class="price" style="font-size:25px;">Price : <span><i class="fa fa-inr" aria-hidden="true"></i></span><?= $recordSet->price ?><span>/-</span></h4>	<h3 class="product-title">Discount : <?= $recordSet->discount ?></h3>				
					<h4 style="font-weight:bold;font-style:Times New Roman;font-size:25px;">Description</h4>
					<p class="product-description" align="justify" style="max-height:250px;font-family:calibri;font-size:20px;"><?= $recordSet->description ?></p>
		<!--<div class="action">
			<button class="add-to-cart btn btn-default" type="button">add to cart</button>
			<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
		</div>-->        
				</div>
			</div>
		</div>
	</div>
</div>
