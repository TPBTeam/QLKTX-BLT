<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<button class="btn btn-primary mb-2"><a href="index.php?page=qlkhu&act=add">Thêm khu nhà</a></button>
<div class="quanlykhu">
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Tên khu</th>
      <th scope="col">Số lượng phòng</th>
      <th scope="col">Số lượng sinh viên</th>
      <th scope="col">Loại khu</th>
      <th scope="col">Nhân viên quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while ($khunha_rows = $khunha -> fetch_array()) {
          $makhunha = $khunha_rows['makhunha'];
    ?>
    <tr>
      <th scope="row"><a href="index.php?page=qlkhu&act=detail&khu=<?php echo $makhunha ?>"><?php echo $khunha_rows['tenkhu'] ?></a></th>
      <td><?php echo getNumberRoom($makhunha) ?></td>
      <td><?php echo $khunha_rows['soluongsinhvien'] ?></td>
      <td><?php if ($khunha_rows['loaikhu'] == 'knam') {
        echo "Khu cho nam";
      }else{
        echo "Khu cho nữ";

      } ?></td>
      <td><?php echo getNameManageById($khunha_rows['idql']) ?></td>
    </tr>
    <?php 
       }
    ?>
  </tbody>
</table>
</div>
<?php 
require "template/components/footer.php";
?>