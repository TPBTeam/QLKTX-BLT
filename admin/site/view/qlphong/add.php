<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="themphongmoi">
	<h3>Thêm phòng mới</h3>
	<form method="POST">
		Tên phòng: <br /><input type="text" name="tenphong"><br />
	Thuộc khu nhà: <?php echo $tenkhu ?>
	<br />
	Tổng số giường<br />
	<input type="number" name="tsgiuong"><br />
	Giá phòng(VNĐ)<br />
	<input type="number" name="giaphong"><br />
	<input type="submit" name="submit_button" value="Thêm phòng">
	</form>

</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>