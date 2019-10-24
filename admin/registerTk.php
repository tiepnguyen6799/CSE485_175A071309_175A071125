<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản trị Đại Học Nguyễn Tất Thành</title>
    <link href="bootstrap/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
        <?php
            require_once("connection.php");
            include("checkmail.php");
            if (isset($_POST["register"])) {
                //lấy thông tin từ các form bằng phương thức POST
                $username = $_POST["username"];
                $password_1 = $_POST["password_1"];
                $password_2 = $_POST["password_2"];
                $email = $_POST["email"];
                $verify=rand(0,1000);
                    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                if($password_1!=$password_2){
                    echo("Mật khẩu không trùng nhau! ");
                }else{
                    if ($username == "" || $password_1 == "" ||$password_2 == ""|| $email == "") {
                        echo "Bạn vui lòng nhập đầy đủ thông tin! ";
                    }else{
                        $partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
                        $subject = "$email";
                        if(!preg_match($partten ,$subject, $matchs)){
                             echo  "Mail bạn vừa nhập không đúng định dạng ";}
                        else{                       
                            // Kiểm tra tài khoản đã tồn tại chưa
                            $sql="select * from users where username='$username'";
                            $kt=mysqli_query($conn, $sql);

                            if(mysqli_num_rows($kt)  > 0){
                                echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="registerTk.php";</script>';
                                die();
                            }else{
                                $password=md5($password_1);
                                //thực hiện việc lưu trữ dữ liệu vào db
                                $sql="INSERT INTO users(username, email, password,lever,verify,trangthai) VAlUES('$username', '$email', '$password','1','$verify','0')";
                                // thực thi câu $sql với biến conn lấy từ file connection.php
                                mysqli_query($conn,$sql);
                                echo "Chúc mừng bạn đã đăng ký thành công,vui lòng vào mail để xác nhận!";
                                sendmail($username,$email,$verify);
                            }
                        }
                     }
                }
             }
        ?>

<body id="body_login">
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="login-form">
            <form method="Post" action="registerTk.php" role="login">
                    <img src="images/logo_ntt.png" class="img-responsive" alt=""/>
                 
            
                <input type="text" name="username" placeholder="Username" required class="form-control input-lg"
                           />
            
            
                <input type="text" name="email" placeholder="Email" required class="form-control input-lg"
                           />

                <input type="password" name="password_1" placeholder="Password" required class="form-control input-lg"
                           />

                <input type="password" name="password_2" placeholder="Confirm Password" required class="form-control input-lg"
                           />
            
            
                <button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Register</button>
            
            <div>
            Bạn đã có tài khoản <a href="index.php">Đăng nhập</a>
            </div> 

                </form>

                <div class="form-links">
                    <a href="#">Đại học Nguyễn Tất Thành</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>
    </div>