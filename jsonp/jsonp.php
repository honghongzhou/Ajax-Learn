<?php
	$callback=$_GET['_jsonp'];
	$array=array("zhangsan","lisi","wangwu");
	echo $callback."(".json_encode($array).")";
?>