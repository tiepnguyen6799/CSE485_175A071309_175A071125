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
                <li class="nav-item ">
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
                <li class="nav-item active ">
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
            <a class="navbar-brand" href="#pablo">Trang quản trị thông báo</a>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Thêm thông báo
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Thêm thông báo</h4>
                  <p class="card-category">Nhưng thống báo có trên hệ thống</p>
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
                          Tên giáo viên thông báo
                        </th>
                        <th>
                          Nội dung thông báo
                        </th>
                        <th>
                          Ngày thông báo
                        </th>
                        <th>
                          Chức năng
                        </th>
                      </thead>
                      <tbody>
                      <?php 
                          $stt=0;
                          $sql="select * from course, notification, users where id_gv=id and id_kh=id_course and lever=0";
                          $result=mysqli_query($conn,$sql);
                          while($data=mysqli_fetch_assoc($result)){
                          echo"<tr>";
                          echo"<td>$stt</td>";
                          echo"<td>$data[name_course]</td>";
                          echo"<td>$data[username]</td>";
                          echo"<td>$data[name_noti]</td>";
                          echo"<td>$data[date_noti]</td>";
                          echo"<td><a href='del_ND.php?id=$data[id_course]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
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
          <!--modal-->
    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content container ">
          <div class="modal-header">
            <h2 class="modal-title">Thêm thông báo</h2>
          </div>
          <form id="add-ticket" class="hide-on-submit" action="check_tb.php"
                      method="post">
          <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group field-helpdesktickets-hdt_subject_id required">
                                        <label class="control-label" for="helpdesktickets-hdt_subject_id">Khóa
                                            học</label>
                                        <select id="helpdesktickets-hdt_subject_id"
                                                class="form-control select2-hidden-accessible"
                                                name="khoa_hoc" aria-required="true"
                                                data-s2-options="s2options_d6851687"
                                                data-krajee-select2="select2_f24aaa71" style="display:block"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="">Chọn khóa học</option>

                                            <?php
                                            $sql = "select * from course";
                                            mysqli_set_charset($connect, "UTF8");
                                            $result = mysqli_query($connect, $sql);
                                            $i = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <option value="<?php echo $row['id_course'] ?>"><?php echo $row['name_course'] ?></option>

                                                    <?php
                                                }
                                            ?>

                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group field-helpdesktickets-hdt_comment required">
                                        <label class="control-label" for="helpdesktickets-hdt_comment">Thông báo</label>
                                        <textarea id="helpdesktickets-hdt_comment" class="form-control replyTextArea"
                                                  maxlength="200" rows="3"
                                                  placeholder="Viết thông báo tại đây" aria-required="true name" name="nd_tb"></textarea>
                                        <p class="counter text-aqua" id="my-counter">Tối đa 200 kí tự</p>

                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
              <button type="button" data-dismiss="modal" class="btn btn-danger">Đóng</button>
              <button name="submit" class="btn btn-success">Thêm</button>
            </div>
                </form>
            </div>
        </div>
    </div>
          </form>
        </div>
      </div>
    </div>

    <?php

    if (isset($_POST["submit"])) {
      $kh_name = $_POST["kh_name"];
      $start_date = $_POST["start_date"];
      $end_date = $_POST["end_date"];
      $level = $_POST["level"];


      $query = "INSERT INTO course (kh_name,start_date,end_date,level) 
            VALUES ('$kh_name','$start_date','$end_date','$level')";
      mysqli_query($connect, $query);
    }

    ?>
  </div>

                        
  <!--end modal-->
  <!--footer-->
<?php include('footer.php'); ?>