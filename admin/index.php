<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lý</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../public/css/all.min.css">
</head>
<body>
	<?php
	include_once('libs/__autoload.php');
	include('libs/connect.php');
	if(isset($_SESSION["username"])){
		if(isset($_GET['page'])){
			switch($_GET['page']){

				case 'qlkhu': include_once('site/controller/qlkhu/qlkhu.php');
				break;
				case 'qlnhanvien': include_once('site/controller/qlnhanvien/qlnhanvien.php');
				break;
				case 'qlphong': include_once('site/controller/qlphong/qlphong.php');
				break;
				case 'qlsinhvien': include_once('site/controller/qlsinhvien/qlsinhvien.php');
				break;
				case 'dashboard': include_once('site/dashboard.php');
				break;
				case 'qlhopdong': include_once('site/controller/qlhopdong/qlhopdong.php');
				break;
			}
		}else{
			header('location: index.php?page=dashboard');
		}
	}else {
			header('location: login.php');
	}
	?>