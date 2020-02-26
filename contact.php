<?php
	include("header.php");
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect to database!!");
	//insert feedback
	if(!empty($_REQUEST['su']) && $_REQUEST['su']=='SEND MESSAGE'){
		$first=$_REQUEST['n1'];
		$last=$_REQUEST['n2'];
		$em=$_REQUEST['e1'];
		$phone=$_REQUEST['p1'];
		$review=$_REQUEST['msg1'];
		$query="INSERT INTO feedback(fname,lname,email,phone_no,message) VALUES('$first','$last','$em','$phone','$review')";
		mysql_query($query);
	}
	
?>
	<style>
		table
		{
			margin-left:450px;
			height:40%;
			width:40%; 
			font-weight:bold;
			font-color:black;
		}
		
		.div1
		{
			padding-top:40px;
			background-size:100%;
		}
		
		input[type="submit"]
		{
			padding:7px;
			border:2px  black ridge;
		}
		table th{
			font-weight:bold;
			font-family:Cooper Black;
			color : #fff;
		}
		body{
			margin: 0;
			padding: 0;
			text-align: center;
			background: url(image/c6.jpg);
			background-size: cover;
			background-repeat:no-repeat;
			background-position: center;
			font-family: sans-serif;
			height: 100vh;

    }
.contact-title
	{
		margin-top: 100px;
		color: black;
		text-transform: uppercase;
		transition: all 4s ease-in-out;	
		font-weight:bold;
 	}
.contact-title h1
	{
		font-size: 32px;
		line-height: 10px;
	}
.contact-title h2
	{
		font-size: 16px;
	}
form
	{
		margin-top: 50px;
		transition: all 4s ease-in-out;	
	
	}
.form-control
	{
		width: 600px;
		background: transparent;
		border: none;
		outline: none;
		border-bottom: 1px solid gray;
		
		color: black;
		font-size: 12px;
		margin-bottom: 16px;
		font-family: sans-serif;
		
	}

input
	{
		height: 45px;
		
	}
form .submit
	{
		background: #fff;
		border-color: transparent;
		color: #000;
		font-size: 20px;
		font-weight: bold;
		letter-spacing: 2px;
		height: 50px;
		margin-top: 20px;
	}
form .submit:hover
	{
		background-color: #00bf2e;
		cursor: pointer;
	}
	.contact-form{
		padding-left:350px;
	}
	</style>
		<div class="div1">  
			<form method="post" style="padding-bottom:0px;">
				<div class="contact-title">
			<h1>Contact Us</h1>
			<h2>We are always  ready to serve you</h2>
				</div>
			<div class="contact-form">
			<form class="contact-form" method="POST" action="#" >
			<input type="text" placeholder="First Name" name="n1" class="form-control" required/>
			<br/>
			<input type="text" placeholder="Last Name" name="n2" class="form-control" required/>
			<br/>
			<input type="email" placeholder="hello@gmail.com" name="e1" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
			<br/>
			<input type="text" placeholder="Phone no." id="phoneno" name="p1" class="form-control only_decimal" maxlength="10" size="10" onkeypress="return isNumber(event);" requried />
			<br/>
			
				<textarea name="msg1" id="c4" class="form-control" placeholder="Message Or Query" row="4" required pattern="[0-9]+" required></textarea>
				<br/>
				
				<input type="submit" class="form-control submit" name="su"   value="SEND MESSAGE"/>
				
			<br/>
				
				
			</form>
		
			</div>
		</div>
<?php include("footer.php");?>
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
