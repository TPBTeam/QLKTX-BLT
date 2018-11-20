<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="qlkhuadd">
  <h3>Thêm khu nhà cho ký túc</h3>
  <form method="POST">
    Tên khu: <br /><input type="text" name="tenkhu" placeholder="Nhập tên khu"><br />
    Số lượng phòng: <br /><input type="number" name="soluongp" placeholder="Nhập số lượng phòng"><br />
    Loại khu: <br /><input type="radio" name="loaikhu" value="knam">Dành cho nam<br />
    <input type="radio" name="loaikhu" value="knu">Dành cho nữ<br />
    Nhân viên quản lý:<br />
    <select name="quanly">
      <?php 
      $listmn = getManage();
      while ($listmn_rows = $listmn->fetch_array()) {
        ?>
        <option><?php echo ''.$listmn_rows['manvql'].' - '.$listmn_rows['hotennv'].''; ?></option>
        <?php 
      }
      ?>
    </select>
    <br />
    <input type="submit" name="submit_button" value="Thêm khu mới">
  </form>
</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>