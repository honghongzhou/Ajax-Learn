<?php
	$username=$_GET['username'];
	$password=$_GET['password'];
	header('Content-Type:application/json;charset=utf-8');
//	$username=$_POST['username'];
//	$password=$_POST['password'];
	
//	sleep(3);
	if($username=='admin'&&$password=='123456'){
		echo 1;
	}else{
		echo 2;
	}
?>