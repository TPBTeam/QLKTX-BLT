<?php
require "libs/function.php";
if(isset($_GET['khu'])){
  $makhunha = $_GET['khu'];
  $tenkhu = getNameKhuById($makhunha);
  if(isset($_POST['submit_button'])) {
   if(!empty($_POST['tenphong']) && !empty($_POST['tsgiuong']) && !empty($_POST['giaphong'])){
    $tenphong = $_POST['tenphong'];
    $tsgiuong = $_POST['tsgiuong'];
    $giaphong = $_POST['giaphong'];

    $qr = "INSERT INTO phong (tenphong,tsgiuong,giaphong,makhunha) VALUE ('$tenphong','$tsgiuong','$giaphong','$makhunha') ";
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
}
include_once('site/view/qlphong/add.php');
?>