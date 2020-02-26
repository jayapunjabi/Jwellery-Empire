<?php
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("project") OR die("could not connect to database!!");
	$query="SELECT*FROM registration";
	
	
	
	//Search Record
	if(!empty($_REQUEST['full_name'])){
		$search=$_REQUEST['full_name'];
		$query .=" WHERE full_name LIKE '$search'";
	}
	echo $query;
	$record=mysql_query($query);
?>
<form>
	<table border="1px" align="center">
	<tr>
		<th>Enter name</th>
		<td><input type="text" name="full_name"/></td>
		<td><input type="submit" name="search" value="Search"/></td>
		</tr>
		</table>
		</form>
	
	
	<table border="1px" align="center">
		<tr>
			<th>ID</th>
			<th>Fullname</th>
			<th>Email_address</th>
			<th>Password</th>
			<th>DOB</th>
			<th>Gender</th>
			<th></th>
		</tr>
		<?php while($row= mysql_fetch_object($record)){ ?>
		<tr>
			<td><?=$row->rid?></td>
			<td><?=$row->full_name?></td>
			<td><?=$row->email_address?></td>
			<td><?=$row->password?></td>
			<td><?=$row->date_of_birth?></td>
			<td><?=$row->gender?></td>
		</tr><?php } ?>
	</table>
	
	
	