<?php
//	$username=$_GET['username'];
//	$password=$_GET['password'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($username=='admin'&&$password=='123456'){
		echo 1;
	}else{
		echo 2;
	}


?>