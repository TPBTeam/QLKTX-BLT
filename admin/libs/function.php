<?php

	require "connect.php";
	function getManage(){
		global $__conn;
		$qr = "SELECT * FROM nhanvienql";
		return $__conn->query($qr);
	}


?>