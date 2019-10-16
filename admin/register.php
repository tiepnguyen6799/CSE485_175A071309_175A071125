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


        <!--main-->
        <div class="containerl">
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
                                <option value="0">Học Sinh</option>
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
            header('Location: index.php');
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