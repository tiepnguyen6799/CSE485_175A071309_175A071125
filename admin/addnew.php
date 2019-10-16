<?php include('connect.php') ?>
<!--header-->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
      Trang quản lí
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
   <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
   <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>

<body class="">
   <div class="wrapper ">
      <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
         <div class="logo">
            <a href="#" class="simple-text logo-normal">
               Quản lý
            </a>
         </div>
         <div class="sidebar-wrapper">
            <ul class="nav">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">
                     <i class="material-icons">dashboard</i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user.php">
                     <i class="material-icons">person</i>
                     <p>User List</p>
                  </a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="new.php">
                     <i class="material-icons">content_paste</i>
                     <p>New List</p>
                  </a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="cate.php">
                     <i class="material-icons">bubble_chart</i>
                     <p>Category List</p>
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
                  <div class="col-md-9">
                     <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title">Add News</h4>
                           <p class="card-category">Add your New</p>
                        </div>
                        <div class="card-body">
                           <form method="get">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="bmd-label-floating">Title</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Writer Code</label>
                                       <select name="userid" class="form-control">
                                          <option selected value="1">Admin</option>
                                          <option value="0">Guest</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Category Code</label>
                                       <select name="danhmucid" class="form-control">
                                          <option selected value="1">Admin</option>
                                          <option value="0">Guest</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!-- <div class="row">
                                 
                              </div> -->
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="bmd-label-floating">Summary</label>
                                       <textarea class="form-control" rows="3" name="tomtat"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="bmd-label-floating">Content </label>
                                       <textarea name="noidung"></textarea>
                                       <script>
                                          CKEDITOR.replace( 'noidung' );
                                       </script>
                                    </div>
                                 </div>
                              </div>
                              <button name="submit" class="btn btn-primary pull-right">Add New</button>
                              <div class="clearfix"></div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Image</label>
                        <input id="img" type="file" name="image_jpg" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100%" height="250px" src="assets/img/add_image.jpg">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--   Core JS Files   -->
   <script src="assets/js/core/jquery.min.js"></script>
   <script src="assets/js/core/popper.min.js"></script>
   <script src="assets/js/core/bootstrap-material-design.min.js"></script>
   <script src="assets/js/material-dashboard.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/materialize.min.js"></script>
   <script src="assets/js/ui.js"></script>
   <script>
      function changeImg(input) {
         //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e) {
               //Thay đổi đường dẫn ảnh
               $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }
      $(document).ready(function() {
         $('#avatar').click(function() {
            $('#img').click();
         });
      });
   </script>
</body>

</html>