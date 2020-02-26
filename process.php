<?php
	if(!empty($_REQUEST['em1']) && !empty($_REQUEST['pw1']))
	{
		mysql_connect("localhost","root","") OR die("Could not connect server");
		mysql_select_db("jwellery") OR die("could not connect to database!!");
		$email=$_REQUEST['em1'];
		$password=$_REQUEST['pw1'];
		$recordset=mysql_query("SELECT *FROM admin WHERE email='$email' && password='$password'");
		if(mysql_num_rows($recordset)>0)
		{
			$row=mysql_fetch_object($recordset);
			session_start();
			$_SESSION['uid']=$row->uid;
			$_SESSION['em1']=$row->email;
			$_SESSION['pw1']=$row->password;
			header("location:product.php");
		}
		else
		{
			header("location:adminlogin.php?msg=error");
		}
	} else {
		header("location:adminlogin.php?msg=error");
	}
	
?>