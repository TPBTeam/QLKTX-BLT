<?php

	require "connect.php";
	function getManage(){
		global $__conn;
		$qr = "SELECT * FROM nhanvienql";
		return $__conn->query($qr);
	}
	function getIdManageByMQL($manvql){
		global $__conn;
		$qr              = "SELECT * FROM nhanvienql WHERE manvql = '$manvql' ";
		$idql            = $__conn->query($qr);
		$idql_row        = $idql->fetch_array();
		return $idql_row['idql'];
	}
	function getNameManageById($idql){
		global $__conn;
		$qr = "SELECT * FROM nhanvienql WHERE idql = '$idql' ";
		$nameql = $__conn->query($qr);
		$nameql_row = $nameql->fetch_array();
		return $nameql_row['hotennv'];
	}
	function getKhunha(){
		global $__conn;
		$qr              = "SELECT * FROM khunha ";
		return $__conn->query($qr);
	}


?>