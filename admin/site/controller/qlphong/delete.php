<?php
require "libs/function.php";
    if(isset($_GET['phong'])){
      $masophong = $_GET['phong'];
      $makhunha = getMaKhuByMaSoPhong($masophong);
      $del = deleteData('phong','masophong='.$masophong.'');
      if($del === TRUE){
        header("location:index.php?page=qlkhu&act=detail&khu=$makhunha");
      }
    }
?>