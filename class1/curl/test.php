<?php
$curl = curl_init();
$cookie_jar = tempnam('./cookie','cookie');
$request = "UserLogin%5==Busername%5D=2014213898&UserLogin%5Bpassword%5D=xp9726&UserLogin%5Bkeeplogin%5D=0&yt0=";
curl_setopt($curl, CURLOPT_URL, 'http://172.22.161.11/user/login.html');
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);

// curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_Post)

curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_jar);
$data = curl_exec($curl);

curl_close($curl);

