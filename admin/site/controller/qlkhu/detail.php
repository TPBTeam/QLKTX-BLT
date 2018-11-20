<?php
require "libs/function.php";
if(isset($_GET['khu'])){
	$makhunha = $_GET['khu'];
	
}
include_once('site/view/qlkhu/detail.php');
?>