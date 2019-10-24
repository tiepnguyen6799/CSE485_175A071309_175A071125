<?php include('../connection.php') ?>
<!--header-->
<?php include('../header.php'); ?>
<!-- end header -->
<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">
                Quản lý
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="teacher.php">
                        <i class="material-icons">dashboard</i>
                        <p>Trang dành cho giáo viên</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="exam-tc.php">
                        <i class="material-icons">create</i>
                        <p>Đề thi</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="course-tc.php">
                        <i class="material-icons">import_contacts</i>
                        <p>Khoá học</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="notification-tc.php">
                        <i class="material-icons">info</i>
                        <p>Thông báo</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<!--end header-->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Trang quản trị dành cho giáo viên</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Thêm khoá học</h4>
                  <p class="card-category">Những khoá học có trên hệ thống</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>
                          STT
                        </th>
                        <th>
                          Tên khoá học
                        </th>
                        <th>
                          Ngày bắt đầu
                        </th>
                        <th>
                          Ngày kết thúc
                        </th>
                        <th>
                          Sửa
                        </th>
                        <th>
                          Xoá
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                          $stt=0;
                          $sql="select id_course,name_course,start_date,end_date from course";
                          $result=mysqli_query($conn,$sql);
                          while($data=mysqli_fetch_assoc($result)){
                          echo"<tr>";
                          echo"<td>$stt</td>";
                          echo"<td>$data[name_course]</td>";
                          echo"<td>$data[start_date]</td>";
                          echo"<td>$data[end_date]</td>";
                          echo"<td><a href='../edit_ND.php?id=$data[id_course]' style='color:#f3f'>Edit</a></td>";
                          echo"<td><a href='../del_ND.php?id=$data[id_course]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                          echo"</tr>";
                          $stt++;
                          }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!--footer-->
<?php include('../footer.php'); ?>
<!--end footer-->