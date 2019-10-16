<?php include('connect.php')?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Login</title>
</head>

<body>
  <div class="modal is-open">
    <div class="modal-container">
      <div class="modal-left">
        <h1 class="modal-title">Đại học Nguyễn Tất Thành</h1>
        <p class="modal-desc">Trang đăng nhập</p>
          <form method="post">
            <div class="input-block">
              <label for="email" class="input-label">Email</label>
              <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="input-block">
              <label for="password" class="input-label">Password</label>
              <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="modal-buttons">
              <button type="submit" class="input-button" name="submit">Đăng nhập</button>
            </div>
            <a href="register.php">Đăng ký</a>
            
            

          </form>
          <?php
          if (isset($_POST["submit"])) {
              $email = addslashes($_POST["email"]);
              $password = addslashes($_POST["password"]);
              $query = "SELECT * FROM users WHERE email='$email'";
              $result = mysqli_query($connect, $query);

              if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  if (password_verify($password, $row['password'])) {
                      $_SESSION["loginSession"] = $email;
                      header('Location: index.php');
                  }
              }
          }
          ?>
      </div>
      <div class="modal-right">
        <img
          src="../image/admin/login/screen-0.jpg"
          alt="">
      </div>
    </div>
  </div>
</body>

</html>