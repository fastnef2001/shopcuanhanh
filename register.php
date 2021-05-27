<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/styl.css"/>
</head>
<body>

<form method="post" action="register.php" class="content">

<div id="border">
<p>Artemis</p>
Name: <input type="text" name="name" value="" required>

Username: <input type="text" name="username" value="" required>

Password: <input type="password" name="password" value="" required/>

<input type='submit' class="button" name="dangky" value='Register' /> 
</div>
<?php require 'xuly.php';?>
</form>


</body>
</html>