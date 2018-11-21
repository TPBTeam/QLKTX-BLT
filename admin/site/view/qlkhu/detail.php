<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="detailkhu">
  <h3>Danh sách nhà</h3>
  <div class="row">
    <p>Các chức năng sẽ bổ sung ở đây</p>
  </div>
  <button class="btn btn-primary mb-3"><a href="index.php?page=qlphong&act=add&khu=<?php echo $makhunha ?>">Thêm phòng mới</a></button>
  <div class="row">
    <!-- Bắt đầu danh sách một phòng  -->
    <?php 
    $phong = getPhongByIDKhuNha($makhunha);
    while ($phong_rows = $phong->fetch_array()) {
      $makhunha = $phong_rows['makhunha'];
      ?>
      <div class="col-md-2">
        <div class="boxhome">
          <i class="fas fa-city"></i>
          <p class="tenphong"><?php
          if (getLoaikhuById($makhunha) == 'knam') {
            echo "<i style='color:#5a5afb;' class='fas fa-male'></i> ";
          }else{
            echo "<i style='color:pink;' class='fas fa-female''></i> ";
          }
          echo $phong_rows['tenphong'] ?></p>
          <div class="giaphong"><?php echo $phong_rows['giaphong'] ?> VNĐ/Tháng</div> 
          <p>T/S giường: <span class="tsgiuong"><?php echo $phong_rows['tsgiuong'] ?></span></p>
          <p>T/S giường trống: <span class="tsgiuongtrong"><?php echo $phong_rows['tsgiuong'] - $phong_rows['soluongsv'] ?></span></p>
          <p>T/S sinh viên: <span class="tssinhvien"><?php echo $phong_rows['soluongsv'] ?></span></p>
        </div>
        <div class="toolhome">
          <a href="index.php?page=qlphong&act=edit&phong=<?php echo $phong_rows['masophong']?>&khu=<?php echo $makhunha ?>"><button class="btn btn-primary"><i class="far fa-edit"></i> Chỉnh sửa</button></a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="far fa-trash-alt"></i> Xóa</button>
          <!-- Hiển thị popup -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Xác nhận xóa</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body text-center popupdel">
                  <a href="index.php?page=qlphong&act=delete&phong=<?php echo $phong_rows['masophong']?>"><button type="button" class="btn btn-danger">Đồng ý</button></a>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Quay lại</button>
                </div>
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  
                </div> -->

              </div>
            </div>
          </div>

          <!-- Kết thúc hiển thị -->
        </div>
      </div>
      <?php 
    }
    ?>
    <!-- Kết thúc danh sách một phòng  -->

  </div>
</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>