<?php
		$sv_host = "localhost";
		$sv_username = "root";
		$sv_password = "";
		$sv_dbname = "qlktx";
		$__conn = new mysqli($sv_host,$sv_username,$sv_password,$sv_dbname);
		mysqli_set_charset($__conn,"utf8");
		if($__conn->connect_error){
			die("Lỗi kết nỗi Database");
		}
?>