<?php
	if(!file_exsits("/tmp/test.text")){
		die("File not found");
	}else{
		$file = fopen("/tmp/test","r");
		print"opened secussfully";
		}
	
?>