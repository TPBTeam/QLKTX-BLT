<?php
	require "libs/function.php";
	if(isset($_POST["submit_button"])){
		if(isset($_POST["tenkhu"]) && isset($_POST["gioitinh"]) && isset($_POST["quanly"])){
			$tenkhu = $_POST["tenkhu"];
			$gioitinh = $_POST["gioitinh"];
			$quanly = $_POST["quanly"];
		}
	}
	include_once('site/view/qlkhu/add.php');
?>