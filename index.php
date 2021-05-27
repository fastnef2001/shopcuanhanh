<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="css/styl.css"/> 
</head> 
<body> 



<form action='index.php' class="content" method='POST'> 
<div id="border">
<p>Artemis</p>
Username <input type='text' name='username' /> 
Password <input type='password' name='password' /> 
<a href='register.php' style=" text-decoration:none; float:right"><strong>Quên mật khẩu</a></strong> <br>

<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
<a href='register.php' style=" text-decoration:none"><strong>Đăng kí</a></strong> 
<br>
<a href='forgotpass.php' style=" text-decoration:none"><strong>Đăng nhập quản lý</strong></a> 
</div>
<?php include 'xuly.php';?> 
<form> 
</body> 
</html>