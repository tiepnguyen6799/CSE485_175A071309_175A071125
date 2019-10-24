<?php include('../connection.php') ?>
<!--header-->
<?php include('../header.php'); ?>
<!-- end header -->
<script src="../ckeditor/ckeditor/ckeditor.js"></script>
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
                  <a class="navbar-brand" href="#">News</a>
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
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Thêm câu hỏi</h4>
                  <p class="card-category">Câu hỏi sẽ được hiển thị trên hệ thống</p>
                </div>
                <div id="trang">
    <div id="bang">
    <form action="inserttracnghiem.php" method="post">
        <div id="bang1">
        <div id="cauhoi">
        <table>
            <tr>
                <td>Câu hỏi</td>
                <td><input type="text" name="cauhoi" id=""></td>
            </tr>
        </table>
        <table>
            <h4>Nội dung đáp án</h4>
            <tr>
                <td>Đáp án A</td>
                <td><input type="text" name="a"></td>
            </tr>
            <tr>
                <td>Đáp án B</td>
                <td><input type="text" name="b"></td>
            </tr>
            <tr>
                <td>Đáp án C</td>
                <td><input type="text" name="c"></td>
            </tr>
                <td>Đáp án D</td>
                <td><input type="text" name="d"></td>            
            </tr>
        </table>
        </div>
        <div>
        <table>
            <tr>
                <td>Mã Môn</td>
                <td></td>
                <td><input checked="checked" type="radio" name="made" id="" value="1">Toán</td>
                <td><input type="radio" name="made" id="" value="2">Lý</td>
                <td><input type="radio" name="made" id="" value="3">Hóa</td>
                <td><input type="radio" name="made" id="" value="4">sinh học</td>
                <td><input type="radio" name="made" id="" value="5">Văn học</td>
                <td><input type="radio" name="made" id="" value="6">Tiếng anh</td>
                <td><input type="radio" name="made" id="" value="7">Lịch sử</td>
                <td><input type="radio" name="made" id="" value="8">Giáo dục công dân</td>
            </tr>
            <tr>
                <td>Đáp Án đúng</td>
                <td></td>
                <td><input checked="checked" type="radio" name="dapan" id="" value="a">A</td>
                <td><input type="radio" name="dapan" id="" value="b"> B</td>
                <td><input type="radio" name="dapan" id="" value="c">C</td>
                <td><input type="radio" name="dapan" id="" value="d">D</td>
            </tr>
        </table>
        </div>
        </div>
      
        <div class="sm">
            <input type="submit" value="Thêm mới" name="submit" class="nut">
        </div>
    </form>
</div>
<?php include('../footer.php'); ?>