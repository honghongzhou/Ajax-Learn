<?
	//指定允许其他的域名访问，解决跨域问题
	header('Access-Control-Allow-Origin:*');
	//模拟网络延时
	sleep(3);
//	提取当前系统的时间
	date_default_timezone_set('Asia/Shanghai');//设置默认时区
//	var_dump(date_default_timezone_set());
	$now=time();
	$nowStr=date('Y-m-d H:i:s',$now);//格式化为日期
	
	
	echo $nowStr;
	
	
//	<!--php中 data_default_timezone_set(timezone)函数
//设置脚本中所有的日期/时间的函数使用的默认时区
//timezone是必须的，表示规定要使用的时区
//php中的time（）函数，返回自Unix纪元（January 1 1970 00:00:00 GMT）起的当前时间的秒数
//即是返回包含当前时间的 Unix 时间戳的整数。
//
//-->
?>

