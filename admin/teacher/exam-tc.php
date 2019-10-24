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
                <li class="nav-item ">
                    <a class="nav-link" href="teacher.php">
                        <i class="material-icons">dashboard</i>
                        <p>Trang dành cho giáo viên</p>
                    </a>
                </li>
                <li class="nav-item active">
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
    <!--endheader-->
    <!--main-->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Trang quản trị đề thi dành cho giáo viên</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="btn btn-primary" href="addexam-tc.php">
                Thêm đề thi
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Toàn bộ đề thi</h4>
                  <p class="card-category">Những đề thi có trên hệ thống</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>
                          STT
                        </th>
                        <th>
                          Đề bài
                        </th>
                        <th>
                          Đáp án A
                        </th>
                        <th>
                          Đáp án B
                        </th>
                        <th>
                          Đáp án C
                        </th>
                        <th>
                          Đáp án D
                        </th>
                        <th>
                          Chức năng
                        </th>
                      </thead>
                      <tbody>
                      <?php
                $stt=0;
                $sql="select phuongan1.id1,cauhoi1.cauhoide1,phuongan1.a,phuongan1.b,phuongan1.c,phuongan1.d from cauhoi1,phuongan1 where cauhoi1.id1=phuongan1.id1 order by id1 desc";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result)){?>
                <?php
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td ><textarea cols='20' rows='5' name='txtnd'>$data[cauhoide1]</textarea></td>";
                echo"<td>$data[a]</td>";
                echo"<td>$data[b]</td>";
                echo"<td>$data[c]</td>";
                echo"<td>$data[d]</td>";
                echo"<td> <a href='del_dethi.php?id=$data[id1]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
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

  </div>
  <!--footer-->
<?php include('../footer.php'); ?>