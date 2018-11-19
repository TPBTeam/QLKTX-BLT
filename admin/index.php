<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
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
			}
		}else{
			header('location: index.php?page=dashboard');
		}
	}else {
			header('location: login.php');
	}
	?>