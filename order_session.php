<?php 
if(!empty($_REQUEST['proceed']))
	{
		mysql_connect("localhost","root","") OR die("Could not connect server");
		mysql_select_db("jwellery") OR die("could not connect to database!!");
		$recordset=mysql_query("SELECT MAX(oid) FROM `order` ");
		if(mysql_num_rows($recordset)>0)
		{
			$row=mysql_fetch_object($recordset);
			session_start();
			$_SESSION['oid']=$row->oid;
			header("location:recipiet.php");
		}
	}
?>