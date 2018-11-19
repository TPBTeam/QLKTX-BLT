<?php
require "libs/connect.php"; 
if(isset($_POST["submit_button"])){
	if(isset($_POST["hotennv"])  && isset($_POST["gioitinhnv"]) && isset($_POST["diachinv"]) && isset($_POST["sodienthoainv"]) && isset($_POST["ngaysinhnv"]) && isset($_POST["cmtnv"])){
		$hotennv       = $_POST["hotennv"];
		$gioitinhnv    = $_POST["gioitinhnv"];
		$diachinv      = $_POST["diachinv"];
		$sodienthoainv = $_POST["sodienthoainv"];
		$ngaysinhnv    = $_POST["ngaysinhnv"];
		$cmtnv         = $_POST["cmtnv"];
		$qr = "SELECT * FROM nhanvienql WHERE cmtnv = '$cmtnv'";
		$qrc = $__conn->query($qr);
		if($qrc->num_rows >= 1){
			echo "<script>alert('Trùng chứng minh thư nhân dân');</script>";
		}else{
			$qr = "INSERT INTO nhanvienql (hotennv,gioitinhnv,diachinv,sodienthoainv,ngaysinhnv,cmtnv) VALUES ('$hotennv','$gioitinhnv','$diachinv','$sodienthoainv','$ngaysinhnv','$cmtnv')";
			if($__conn->query($qr) === TRUE){
				$qr       = "SELECT idql FROM nhanvienql ORDER BY idql DESC LIMIT 1";
				$idql     = $__conn->query($qr);
				$idql_row = $idql->fetch_array();
				$manvql   = $idql_row['idql'];

				if($manvql<10){
					$qr = "UPDATE nhanvienql SET manvql = 'NV000$manvql' WHERE idql = '$manvql' ";
					if($__conn->query($qr) === TRUE){
						header("location: index.php?page=qlnhanvien&act=list");
					}
				}
				else if($manvql<100){
					$qr = "UPDATE nhanvienql SET manvql = 'NV00$manvql' WHERE idql = '$manvql' ";
					if($__conn->query($qr) === TRUE){
						header("location: index.php?page=qlnhanvien&act=list");
					}
				}
				else if($manvql<1000){
					$qr = "UPDATE nhanvienql SET manvql = 'NV0$manvql' WHERE idql = '$manvql' ";
					if($__conn->query($qr) === TRUE){
						header("location: index.php?page=qlnhanvien&act=list");
					}
				}
			}
			
		}
	}	
}
require "site/view/qlnhanvien/add.php";
?>