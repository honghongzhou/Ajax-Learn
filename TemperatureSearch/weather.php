<?php
// $cityCode = $_GET['cityCode'];
// header("Content-type:text/html;charset=utf-8");
// function GetCurl($url){
//     $curl = curl_init();
//     curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
//     curl_setopt($curl,CURLOPT_URL, $url);
//     curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//     $resp = curl_exec($curl);
//     curl_close($curl);
//     return $resp;
// }
// $resp = GetCurl("http://apistore.baidu.com/microservice/weather?cityid=".$cityCode);
// $resp = json_decode($resp,true);
// header('Content-type: application/json');
// echo json_encode($resp);
$cityCode = $_GET['cityCode'];
if($cityCode == '101010100'){
	echo '{"errNum":0,"errMsg":"success","retData":{"city":"\u5317\u4eac","pinyin":"beijing","citycode":"101010100","date":"15-12-29","time":"18:00","postCode":"100000","longitude":116.391,"latitude":39.904,"altitude":"33","weather":"\u973e","temp":"-4","l_tmp":"","h_tmp":"-4","WD":"\u65e0\u6301\u7eed\u98ce\u5411","WS":"\u5fae\u98ce(<10km\/h)","sunrise":"07:35","sunset":"16:57"}}';
}else if($cityCode == '101020100'){
	echo '{"errNum":0,"errMsg":"success","retData":{"city":"\u4e0a\u6d77","pinyin":"shanghai","citycode":"101020100","date":"15-12-29","time":"18:00","postCode":"200000","longitude":121.445,"latitude":31.213,"altitude":"19","weather":"\u591a\u4e91","temp":"5","l_tmp":"","h_tmp":"5","WD":"\u4e1c\u98ce","WS":"\u5fae\u98ce(<10km\/h)","sunrise":"06:51","sunset":"17:00"}}';
}else if($cityCode == '101280101'){
	echo '{"errNum":0,"errMsg":"success","retData":{"city":"\u5e7f\u5dde","pinyin":"guangzhou","citycode":"101280101","date":"15-12-29","time":"18:00","postCode":"510000","longitude":113.265,"latitude":23.108,"altitude":"43","weather":"\u5c0f\u96e8","temp":"11","l_tmp":"","h_tmp":"11","WD":"\u65e0\u6301\u7eed\u98ce\u5411","WS":"\u5fae\u98ce(<10km\/h)","sunrise":"07:06","sunset":"17:50"}}';
}else if($cityCode == '101280601'){
	echo '{"errNum":0,"errMsg":"success","retData":{"city":"\u6df1\u5733","pinyin":"shenzhen","citycode":"101280601","date":"15-12-29","time":"18:00","postCode":"518001","longitude":114.109,"latitude":22.544,"altitude":"40","weather":"\u9634","temp":"14","l_tmp":"","h_tmp":"14","WD":"\u65e0\u6301\u7eed\u98ce\u5411","WS":"\u5fae\u98ce(<10km\/h)","sunrise":"07:02","sunset":"17:48"}}';
}