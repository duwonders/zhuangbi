<?php
// $curl = curl_init();				//初始化链接
// $cookie_jar = tempnam('./cookie','cookie');		//新建存放cookie的文件
// $request = "UserLogin%5Busername%5D=2014213898&UserLogin%5Bpassword%5D=xp9726&UserLogin%5Bkeeplogin%5D=0&yt0=";//设置post参数
// curl_setopt($curl, CURLOPT_URL, 'http://172.22.161.11/user/login.html'); //设置请求地址
// curl_setopt($curl, CURLOPT_HEADER, 0);		//设置不把响应头文件输出
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
// curl_setopt($curl, CURLOPT_POST, 1);		//设置请求为post请求
// curl_setopt($curl, CURLOPT_POSTFIELDS, $request);	全部数据使用HTTP协议中的"POST"操作来发送
// curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_jar);	连接结束后保存cookie信息的文件。
// $data = curl_exec($curl);	执行这次操作
// var_dump($data);
// curl_close($curl);
//以上是模拟登陆



// $curl = curl_init();
// 	curl_setopt($curl, CURLOPT_URL, "http://szyx.cqupt.edu.cn/newstu2015/showstuPic.php?xh=CQUPT20154356");
// 	curl_setopt($curl, CURLOPT_HEADER, 0);
// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_jar);
// 	$data = curl_exec($curl);
// 	curl_close($curl);
//以上是抓取数据



// for($i = 0; $i <= 4000; $i ++){
// 	$ch = curl_init();
// 	$num = 20150728 - $i;
// 	curl_setopt($ch, CURLOPT_URL, "https://jwzx.cqupt.congm.in/showstuPic.php?xh=201521".$num);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_HEADER, 0);
// 	$data = curl_exec($ch);
// 	file_put_contents("./image/".$num.".jpg", $data);
// 	var_dump($num);
// 	curl_close($ch);
// }
//以上是捌照片用的，别抄，理解。
// $preg = "/\/static\/css\/common.css/";
// $replacement = "http://172.22.161.11/static/css/common.css";
// $data = preg_replace($preg, $replacement, $data);
// $preg = "/\/static\/css\/user.css/";
// $replacement = "http://172.22.161.11/static/css/user.css";
// $data = preg_replace($preg, $replacement, $data);
// $preg = "/\/static\/scripts\/jquery.min.js/";
// $replacement = "http://172.22.161.11/static/scripts/jquery.min.js";
// $data = preg_replace($preg, $replacement, $data);
//捌取css文件




// http://172.22.161.11/static/css/common.css

// $pattern = '<a\shref=("\S+")\sclass=("nav")>';
// $result = preg_match($pattern, $data, $matches);
// if($result){
// 	print_r($matches);
// }else{
// 	echo "false";
// }
// $replacement = 'a href="#" style="float:left; width:100px; height:50px; background-color:red; font-size:20px; ";';
// $data = preg_replace($pattern, $replacement, $data);
//匹配导航栏css随便写的








// var_dump($data);
//正则修改样式
