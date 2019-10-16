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
                    <li class="nav-item active ">
                        <a class="nav-link" href="user.php">
                            <i class="material-icons">person</i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                        <a class="navbar-brand" href="#">Users</a>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add User
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">All Users</h4>
                                    <p class="card-category">See all users</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Role</th>
                                                <th>Options</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "select * from users";
                                                mysqli_set_charset($connect, "UTF8");
                                                $result = mysqli_query($connect, $sql);
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i ?></td>
                                                        <td><?php echo $row["first_name"] . '  ' . $row["last_name"] ?></td>
                                                        <td><?php echo $row["phone"] ?></td>
                                                        <td class="text-primary"><?php echo $row["email"] ?></td>
                                                        <td><?php echo $row["address"] ?></td>
                                                        <td>
                                                            <?php if ($row["user_level"] == 1) echo '<a class="btn btn-success" href="#" role="button">Quản lý</a>';
                                                                else echo '<a class="btn btn-success" href="#" role="button">Khách hàng</a>';
                                                                ?>
                                                        </td>
                                                        <td>
                                                            <div class="">
                                                                <a href="user-detail.php?id=<?php echo $row["userid"] ?>" class="btn btn-warning modal-trigger">
                                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    Sửa
                                                                </a>
                                                                <a href="delete.php?id=<?php echo $row["userid"] ?>" class="btn btn-danger">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    Xóa
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
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
            </div>
        </div>
        <!--end main-->

        <!--modal-->
        <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content container ">
                    <div class="modal-header">
                        <h2 class="modal-title">Add User</h2>
                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="f_name" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option selected value="1">Admin</option>
                                <option value="0">Guest</option>
                            </select>
                        </div>
                        <div class="float-right">
                            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                            <button name="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php

        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $first_name = $_POST["f_name"];
            $last_name = $_POST["last_name"];
            $phone = $_POST["phone"];
            $level = $_POST["level"];
            $address = $_POST["address"];
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $date = date('Y-m-d H:i:s');
            $password_hash = password_hash('$password', PASSWORD_DEFAULT);

            $query = "INSERT INTO users (first_name,last_name,email,password,phone,address,registration_date,user_level) 
            VALUES ('$first_name','$last_name','$email','$password_hash','$phone','$address','$date','$level')";
            mysqli_query($connect, $query);
        }

        ?>
    </div>
    <!--end modal-->

    <!--footer-->
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/delete.js"></script>
</body>

</html>