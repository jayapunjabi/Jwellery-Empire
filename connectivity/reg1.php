<?php
	mysql_connect("localhost","root","")OR die("could not connect with server!!");
	mysql_select_db("project") OR die("could not connect to database!!");
	$query="SELECT*FROM registration";
	if(!empty($_REQUEST['b1'])&& $_REQUEST['b1']=='Insert'){
		$name=$_REQUEST['full'];
		$email=$_REQUEST['em'];
		$password=$_REQUEST['pass'];
		$dob=$_REQUEST['dob'];
		$gender=$_REQUEST['gender'];
		$query="INSERT INTO registration(full_name,email_address,password,date_of_birth,gender)VALUES('$name','$email','$password','$dob','$gender')";
	mysql_query($query);
	header("location:reg1.php");
	}
		
	
	
	
	$record= mysql_query($query);
?>
<form>

		<table border="1px" align="center">
			<tr>
				<td>
					Fullname<input type="text" name="full"/>
					
				</td>
			</tr>
			<tr>
				<td>
					Email<input type="email" name="em"/>
					
				</td>
			</tr>
			<tr>
				<td>
					Password<input type="password" name="pass"/>
					
				</td>
			</tr>
			<tr>
			<td>
					date_of_birth<input type="date" name="dob"/>
					
				</td>
			</tr>
			<tr>
				<td>
					gender<input type="text" name="gender"/>
					
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="b1" value="Insert"/>
					
				</td>
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
		<?php while($row=mysql_fetch_object($record)){ ?>
		<tr>
			<td><?=$row->rid?></td>
			<td><?=$row->full_name?></td>
			<td><?=$row->email_address?></td>
			<td><?=$row->password?></td>
			<td><?=$row->date_of_birth?></td>
			<td><?=$row->gender?></td>
		</tr><?php } ?>
	</table>
	
	
	