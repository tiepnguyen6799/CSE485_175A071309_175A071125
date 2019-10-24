<?php include('connection.php') ?>
<!--header-->
<?php include('header.php'); ?>
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
                    <a class="nav-link" href="index.php">
                        <i class="material-icons">dashboard</i>
                        <p>Trang quản trị</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="user.php">
                        <i class="material-icons">person</i>
                        <p>Thành viên</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="new.php">
                        <i class="material-icons">content_paste</i>
                        <p>Bài viết</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="exam.php">
                        <i class="material-icons">create</i>
                        <p>Đề thi</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="cmt.php">
                        <i class="material-icons">public</i>
                        <p>Bình luận</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="course.php">
                        <i class="material-icons">import_contacts</i>
                        <p>Khoá học</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="notification.php">
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
            <a class="navbar-brand" href="#pablo">Trang quản trị hệ thống</a>
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
                  <a class="dropdown-item" href="logout.php">Log out</a>
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
                  <h4 class="card-title ">Toàn bộ thành viên</h4>
                  <p class="card-category">Nhưng thành viên có trên hệ thống</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>STT</th>
                        <th>Tên đăng nhập</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Chức năng</th>
                      </thead>
                      <tbody>
                      <?php
                         $stt=0;
                         $sql="select id,username ,email,lever from users";
                         $result=mysqli_query($conn,$sql);
                         while($data=mysqli_fetch_assoc($result)){
                         echo"<tr>";
                         echo"<td>$stt</td>";
                         echo"<td>$data[username]</td>";
                         echo"<td>$data[email]</td>";
                        if($data['lever']==1)
                           {
                        echo"<td>Thành viên</td>";
                        }else
                        {
                        echo"<td>Admin</td>";
                        }
                        echo"<td><a href='del.php?id=$data[id]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                        echo"</tr>";
                        $stt++;
                        }
                        mysqli_close($conn);

                        ?>
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--footer-->
<?php include('footer.php'); ?>
<!--end footer-->
