<?php 
ob_start();
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="qlkhuadd">
  <h3>Danh sách nhân viên</h3>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="row">Mã nhân viên Quản lý</th>
        <th scope="row">Họ tên nhân viên quản lý</th>
        <th scope="row">CMTND</th>
        <th scope="row">Giới tính nhân viên</th>
        <th scope="row">Ngày sinh nhân viên</th>
        <th scope="row">Địa chỉ</th>
        <th scope="row">Số điện thoại</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($listql_row = $listql->fetch_array()) {
        $thoigian = strtotime($listql_row['ngaysinhnv']);
        $thoigian = date("d-m-Y",$thoigian);
        ?>
        <tr>
          <th scope="row"><?php echo $listql_row['manvql'] ?></th>
          <td><?php echo $listql_row['hotennv'] ?></td>
          <td><?php echo $listql_row['cmtnv'] ?></td>
          <td><?php echo $listql_row['gioitinhnv'] ?></td>
          <td><?php echo $thoigian ?></td>
          <td><?php echo $listql_row['diachinv'] ?></td>
          <td><?php echo $listql_row['sodienthoainv'] ?></td>
        </tr>
        <?php  
      }
      ?>
    </tbody>
  </table>
  <div class="pagination_page">
    <nav aria-label="...">
      <ul class="pagination pagination-sm">
        <?php 
        for($i = 1; $i <= $totalpage; $i++){
          if($i == $currentpage){
            echo "<li class='page-item disabled'>
            <a class='page-link' href='index.php?page=qlnhanvien&act=list&pagenum=$i' tabindex='-1'>$i</a>
            </li>";
          }else{
            echo "<li class='page-item'>
            <a class='page-link' href='index.php?page=qlnhanvien&act=list&pagenum=$i' tabindex='-1'>$i</a>
            </li>";
          }
        }
        ?>
      </ul>
    </nav>
  </div>
</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>