<?php  
require "libs/connect.php";
$qr ="SELECT * FROM nhanvienql";
$total = $__conn->query($qr);
$totalrecord = $total->num_rows;
$limit = 4;
$totalpage =  ceil($totalrecord / $limit);
$currentpage = isset($_GET['pagenum']) ? $_GET['pagenum'] : 1;
if(isset($_GET['pagenum'])){
	if($_GET['pagenum'] < 1){
		$currentpage = 1;
	}
	if ($_GET['pagenum'] > $totalpage) {
		$currentpage = $totalpage;
	}
}
$start = $currentpage -1 ;
$qr ="SELECT * FROM nhanvienql ORDER BY idql DESC LIMIT $start,$limit";
$listql = $__conn->query($qr);
require "site/view/qlnhanvien/list.php";
?>