<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản trị Đại Học Thuỷ Lợi</title>
    <link href="bootstrap/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<?php
         $loi=array();
        $username=$password=null;
        $loi["username"]=$loi["password"]=$loi["login"]=null;
        if(isset($_POST["login"])){
            if(empty($_POST["txtname"])){
                $loi["username"]="*Vui lòng nhập username<br/>";
            }else
            {
                $username=$_POST["txtname"];
            }

            if(empty($_POST["txtpass"])){
                $loi["password"]="*Vui lòng nhập password<br/>";
            }else
            {
                $password=$_POST["txtpass"];
            }
            if($username&& $password){
                require('connection.php');
                $password_1=md5($password);
                $sql = "select * from users where username = '$username' and password = '$password_1' ";
                $query = mysqli_query($conn,$sql);
                if (mysqli_num_rows($query)==1) {
                    $data=mysqli_fetch_assoc($query);
                    if($data['trangthai']==1){
                        $_SESSION['lever']=$data ['lever'];
                        if ($_SESSION['lever']==2) {
                            header('location:manage.php');
                        } elseif ($_SESSION['lever']==0) {
                            header("location:teacher/teacher.php");
                        } else {
                            header("location:student/student.php");
                        }
                        
                    }
                    }else{
                        $loi["login"]="* Tài khoản của bạn chưa kích hoạt, vui lòng kiểm tra email";
                    }
                }else{
                    $loi["login"]="*username or password không đúng ";
                }
                mysqli_close($conn);

            }
        
	?>
<body id="body_login">
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="login-form">
            <form method="Post" action="index.php" role="login">
                    <img src="images/logo_ntt.png" class="img-responsive" alt=""/>
                    <?php 
                echo $loi["username"];
                echo $loi["password"];
                echo $loi["login"];
            ?>
            
                <input type="text" name="txtname" placeholder="Email" required class="form-control input-lg"
                           />
            
            
                <input type="password" name="txtpass" placeholder="Password" required class="form-control input-lg"
                           />
            
            
                <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
            
            <div>
            <a href="registerTk.php">Tạo tài khoản</a> hoặc <a href="#">Quên mật khẩu?</a>
            </div> 

                </form>

                <div class="form-links">
                    <a href="#">Đại học Nguyễn Tất Thành</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>