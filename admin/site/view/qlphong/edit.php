<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="themphongmoi">
  <h3>Sửa thông tin phòng</h3>
  <form method="POST">
    Tên phòng: <br /><input type="text" name="tenphong" value="<?php echo $phong['tenphong'] ?>"><br />
  Thuộc khu nhà: <?php echo $tenkhu ?>
  <br />
  Tổng số giường<br />
  <input type="number" name="tsgiuong" value="<?php echo $phong['tsgiuong'] ?>"><br />
  Giá phòng(VNĐ)<br />
  <input type="number" name="giaphong" value="<?php echo $phong['giaphong'] ?>"><br />
  <input type="submit" name="submit_button" value="Cập nhật phòng">
  </form>

</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>