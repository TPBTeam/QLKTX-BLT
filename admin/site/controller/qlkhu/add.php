<?php
	require "libs/function.php";
	if(isset($_POST["submit_button"])){
		if(isset($_POST["tenkhu"]) && isset($_POST["loaikhu"]) && isset($_POST["quanly"]) && isset($_POST['soluongp'])){
			$tenkhu   = $_POST["tenkhu"];
			$loaikhu  = $_POST["loaikhu"];
			$quanly   = $_POST["quanly"];
			$soluongp = $_POST['soluongp'];
			$manvql   = substr($quanly,0,6);
			$idql = getIdManageByMQL($manvql);

			$qr = "INSERT INTO khunha (tenkhu,idql,soluongp,loaikhu) VALUES ('$tenkhu','$idql','$soluongp','$loaikhu') ";
			if($__conn->query($qr) === TRUE){
				header("location: index.php?page=qlkhu&act=list");
			}
		}
	}
	include_once('site/view/qlkhu/add.php');
?>