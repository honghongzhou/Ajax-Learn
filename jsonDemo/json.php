<?php

	$user=$_GET['user'];
	$user=$_GET['user'];
	$json_user=json_decode($user,true); //json字符串转换为php变量
	echo json_encode($json_user); //将php变量转换为json字符串，所以，外面得到的是json字符串，要得到js对象还要进行进一步的转换

?>