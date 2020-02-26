<?php
if(!empty($_REQUEST['i1']) && !empty($_REQUEST['i2']))
	{
		mysql_connect("localhost","root","") OR die("Could not connect server");
		mysql_select_db("jwellery") OR die("could not connect to database!!");
		$uname=$_REQUEST['i1'];
		$password=$_REQUEST['i2'];
		$recordset=mysql_query("SELECT * FROM user WHERE user_name='$uname' && password='$password'");
		//die("SELECT * FROM user WHERE user_name='$uname' && password='$password'");
		if(mysql_num_rows($recordset)>0)
		{
			$row=mysql_fetch_object($recordset);
			session_start();
			$_SESSION['user_id']=$row->user_id;
			$_SESSION['name']=$row->name;
			$_SESSION['user_name']=$row->user_name;
			header("location:index.php");
		}
		else
		{
			header("location:index.php?msg=error");
		}
	} else {
		header("location:index.php?msg=error");
	}
	
?>