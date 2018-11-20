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
		$qr = "SELECT * FROM khunha ";
		return $__conn->query($qr);
	}
	function getIdByNameKhunha($name){
		global $__conn;
		$qr = "SELECT * FROM khunha WHERE tenkhu = '$name' ";
		$execute = $__conn->query($qr);
		$idkhu = $execute->fetch_array();
		return $idkhu['makhunha'];
	}
	function getPhongByIDKhuNha($makhunha){
		global $__conn;
		$qr = "SELECT * FROM phong WHERE makhunha = '$makhunha' ";
		return $__conn->query($qr);
	}
	function getLoaikhuById($makhunha){
		global $__conn;
		$qr = "SELECT * FROM khunha WHERE makhunha = '$makhunha' ";
		$execute = $__conn->query($qr);
		$idkhu = $execute->fetch_array();
		return $idkhu['loaikhu'];
	}
	function getPhongByID($masophong){
		global $__conn;
		$qr = "SELECT * FROM phong WHERE masophong = '$masophong' ";
		return $__conn->query($qr);
	}

	function deleteData($table,$where){
		global $__conn;
		$qr = "DELETE FROM $table WHERE $where ";
		return $__conn->query($qr);
	}
	function getMaKhuByMaSoPhong($masophong){
		global $__conn;
		$qr = "SELECT * FROM phong WHERE masophong = '$masophong' ";
		$khunha =  $__conn->query($qr);
		$khunha_row = $khunha->fetch_array();
		return $khunha_row['makhunha'];
	}
	function getNameKhuById($makhunha){
		global $__conn;
		$qr = "SELECT * FROM khunha WHERE makhunha = '$makhunha' ";
		$khunha =  $__conn->query($qr);
		$khunha_row = $khunha->fetch_array();
		return $khunha_row['tenkhu'];
	}

?>