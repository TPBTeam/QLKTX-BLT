<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="qlkhuadd">
  <h3>Thêm nhân viên</h3>
  <form method="POST">
    Họ tên nhân viên: <br /><input type="text" name="hotennv"><br />
    Ngày sinh: <br /><input type="date" name="ngaysinhnv" value=""><br />
    Số CMTND: <br /><input type="text" name="cmtnv" value=""  maxlength="12" minlength="9"><br />
    Giới tính<br />
    <input type="radio" name="gioitinhnv" value="Nam">Nam<br />
    <input type="radio" name="gioitinhnv" value="Nữ">Nữ<br />
    Địa chỉ:<br />
    <input type="text" name="diachinv" value=""><br />
    Số điện thoại:<br />
    <input type="phone" name="sodienthoainv" value=""><br />
    <input type="submit" name="submit_button" value="Thêm nhân viên mới">
  </form>
</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>