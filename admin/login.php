<?php
session_start();
require "libs/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập vào hệ thống</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body id="LoginForm">
	<div class="container">
		<h1 class="form-heading">Quản lý ký túc xá</h1>
		<div class="login-form">
			<div class="main-div">
				<div class="panel">
					<h2>Đăng nhập quản trị</h2>
					<p>Nhập đầy đủ thông tin tài khoản và mật khẩu</p>
				</div>
				<?php 
				if(isset($_POST["submit_button"])){
					if(isset($_POST["username"]) && isset($_POST["password"])){
						$username = $_POST["username"];
						$password = $_POST["password"];
						$qr ="SELECT * FROM user WHERE username = '$username' AND password = '$password'";
						$connectdb = $__conn->query($qr);
						$connectdb_row = $connectdb->fetch_array();
						if($connectdb->num_rows == 1){
							$_SESSION['username'] = $connectdb_row["username"];
							header("location: index.php?page=dashboard");
						}else{
							echo "Tài khoản hoặc mật khẩu không chính xác!";
						}
					}
				}
				?>
				<form id="Login" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" id="inputuser" name="username" placeholder="Tài khoản">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mật khẩu">
					</div>
					<div class="forgot">
						<a href="reset.html">Quên mật khẩu?</a>
					</div>
					<button type="submit" class="btn btn-primary" name="submit_button">Đăng nhập</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>