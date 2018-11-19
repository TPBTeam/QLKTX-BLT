<!-- Sidebar  -->
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Quản lý KTX</h3>
                <!-- <strong>VNUA</strong> -->
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php?page=dashboard">
                        <i class="fas fa-home"></i>
                        Tổng quan
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        Người dùng
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Sinh viên
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#khunhaphong" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-city"></i>
                        Khu nhà/Phòng
                    </a>
                    <ul class="collapse list-unstyled" id="khunhaphong">
                        <li>
                            <a href="index.php?page=qlkhu&act=list">Khu nhà</a>
                        </li>
                        <li>
                            <a href="#">Phòng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-calendar"></i>
                        Thuê phòng
                    </a>
                </li>
                <li>
                    <a href="#qlnhanvien" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-city"></i>
                        Quản lý
                    </a>
                    <ul class="collapse list-unstyled" id="qlnhanvien">
                        <li>
                            <a href="index.php?page=qlnhanvien&act=add">Thêm</a>
                        </li>
                        <li>
                            <a href="index.php?page=qlnhanvien&act=list">Danh sách</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="far fa-times-circle"></i>
                        Thoát
                    </a>
                </li>
            </ul>
        </nav>
        <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>
        </div>
    </nav>