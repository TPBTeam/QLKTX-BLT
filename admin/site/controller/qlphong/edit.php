<?php
require "libs/function.php";
	if(isset($_GET['phong'])){
		$masophong = $_GET['phong'];
		$qr = getPhongByID($masophong);
		$phong = $qr->fetch_array();
	}

	if(isset($_POST['submit_button'])) {
     if(!empty($_POST['tenphong']) && !empty($_POST['tsgiuong']) && !empty($_POST['giaphong'])){
          $tenphong = $_POST['tenphong'];
          $tsgiuong = $_POST['tsgiuong'];
          $giaphong = $_POST['giaphong'];
          $makhunha = $_POST['khunha'];
          $makhunha = getIdByNameKhunha($makhunha);

          $qr = "UPDATE phong SET tenphong = '$tenphong',tsgiuong = '$tsgiuong',giaphong = '$giaphong',makhunha = '$makhunha' WHERE masophong = '$masophong' ";
          if($__conn->query($qr)  === TRUE){
              header("location: index.php?page=qlkhu&act=detail&khu=$makhunha");
          }

     }else{
        if(empty($_POST['tenphong'])){
            echo "Vui lòng nhập tên phòng";
        }
        if(empty($_POST['tsgiuong'])){
            echo "Vui lòng nhập tổng số giường";
        }
        if(empty($_POST['giaphong'])){
            echo "Vui lòng nhập giá phòng";
        }
     }
  }

include_once('site/view/qlphong/edit.php');
?>