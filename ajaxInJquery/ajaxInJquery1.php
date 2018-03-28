<?php
	$name=$_POST['name'];
	$pwd=$_POST['pwd'];
	
	sleep(5);
	if($name=='admin'&&$pwd=='123'){
		echo 1;
	}else{
		echo 2;
	}
?>