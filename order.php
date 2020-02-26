<?php
//require_once("header.php");
error_reporting(0);
	mysql_connect("localhost", "root", "") OR die("Could not connect with server!!");
	mysql_select_db("jwellery") OR  die("Could not open database!!");
	session_start();
	//var_dump($_SESSION);
	
	//Insert Record
	if(!empty($_REQUEST['proceed'])) {
		$oid = $_REQUEST['oid'];
		
		$uid = $_SESSION['user_id'];
		$name = $_REQUEST['name'];
		$phoneno = $_REQUEST['phoneno'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$amount = $_REQUEST['amount'];
		
		$query = "INSERT INTO `order`(`user_id`, `name`, `phono`, `email`, `address`, `city`, `amount`) VALUES ('$uid','$name', '$phoneno', '$email','$address','$city','$amount')";
		mysql_query($query);
		$query = "UPDATE `mycart` set status= 'inactive' where user_id = '$uid'";
		mysql_query($query);
		
	}	
	if(!empty($_REQUEST['proceed'])) {
			$uid = $_SESSION['user_id'];
			$query1 = "DELETE FROM mycart WHERE user_id='$uid'";	
			//exit;
			mysql_query($query1);
			header("location:order_session.php");
			}
			//header("location:index.php");
		
?>
<html> 
<head>
<script src="https://kit.fontawesome.com/673e3daf9f.js"></script>

<style>
body
{
	margin:0;
	padding-top:1000px;
	background :url(design/add1.jpg);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
	background-repeat: no-repeat;
	
}
.loginbox 
{
		width:300px;
		height: 620px;
		background : #000;
		color : afff;
		top: 10%;
		left :40%;
		position :absolute;
		transform :translate (-30%,-30%);
		box-sizing: border-box;
		padding :70px 30px;
}	
.login2
{
		width:100px;
		height :100px;
		border-radius:50%;
		position:absolute;
		top: -50px;
		left : calc(50% - 50px);
}		
 p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: white;
}	
h1{
	margin:0;
	padding: 0 0 20px;
	text-align:center;
	font-size:22px;
	color:white
}
.loginbox input	
{
	width:100%;
	margin-bottom:14px;
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height : 20px;
	color: #fff;
	font-size: 13px;
}
 
 .loginbox input [type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background : transparent;
	outline: none;
	height: 20px;
	color: #fff;
	font-size: 13px;
}	

.loginbox input[type="submit"]
{
		border :none;
		outline: none;
		height: 30px;
		background:#fb2525;
		color: #fff;
		font-size: 15px;
		border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
		cursor:pointer;
		background :#ffc107;
		color : #000;
		
}
.loginbox a
{
	text-decoration:none;
	font-size: 12px;
	line-height:20px;
	color: darkgrey;
	
}
.loginbox a:hover
{
	color: #ffc107;
}
.loginbox input[type="button"] {
  background-color:#fb2525;;
  border: none;
  color: white;
  width: 300px
  cursor: pointer;
  font-size: 15px;
  border-radius: 20px;
  height: 30px;
  float:centre;
}

.loginbox input[type="button"]:hover {
 
		cursor:pointer;
		background :#ffc107;
		color : #000;
		
}


</style>
<script>

function isNumber(evt) {

    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</head>
		<div class= "loginbox">
			<img src="image/login2.jpg" class="login2">
			<h1 color="white"> Place Order Here </h1>
			<form  method="POST" >
				<p  > Name </p><br/>
				<input type="text" name="name" placeholder="Enter name " required>
				<p  > Phone No </p><br/>
				<input type="text" name="phoneno" id ="phoneno" placeholder="Enter Phone No " onkeypress="return isNumber(event);" required>
				<p  > Email </p><br/>
				<input type="email" name="email" placeholder="Enter Email " required>
				<p> Address</p><br/>
				<input type="text" name="address" placeholder="Enter Address "required>
				<p  > City </p><br/>
				<input type="text" name="city" placeholder="Enter city "required>
				<p  > Amount </p><br/>
				<input type="text" name="amount" value="<?= !empty($_SESSION['sum'])?$_SESSION['sum']:''?>"placeholder="Total Amount " readonly >
				
				
				<input type="submit" name="proceed" value="Proceed"> 
				<!--<button class="btn" name="download"><i class="fas fa-download"></i>Download</button> -->
				<!--<input type="button" value="Download Receipt"  name="download"/> -->


			</form>
</div>
</html>
