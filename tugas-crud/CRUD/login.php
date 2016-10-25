<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="proses_login.php" method="POST">
		<input type="text" name="user" autocomplete="off" placeholder="Username"><br>
		<input type="password" name="pass" autocomplete="off" placeholder="****"><br>
		<input type="submit" value="Login">
	</form>
<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/script.js" crossorigin="anonymous"></script>
</body>
</html>