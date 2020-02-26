<?php
	
	mysql_connect("localhost","root","") OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect with database!!");
	
	/*$query="SELECT * FROM user";
	$record=mysql_query($query);*/
	if(!empty($_REQUEST['b1']) && $_REQUEST['b1']=="signup"){
		session_start();
		$name=$_REQUEST['n1'];
		$emailid=$_REQUEST['e1'];
		$pass=$_REQUEST['p1'];
		$query="INSERT INTO user(name,user_name,password) VALUES('$name','$emailid','$pass')";
		mysql_query($query);
		//die($query);
		
			/*$_SESSION['user_id']=user_id;
			$_SESSION['e1']=e1;
			$_SESSION['p1']=p1;*/
			header("location:index.php");
		//header("location:usersignup.php");
		
	}
	
?>
