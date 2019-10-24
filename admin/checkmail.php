<?php
    include ("store/PHPMailer.php");
    include ("store/Exception.php");
    include ("store/OAuth.php");
    include ("store/POP3.php");
    include ("store/SMTP.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function sendmail($username, $mail1,$Verification){
        
      

        /*function generate_token() {
            return md5(microtime().mt_rand());
        }

        $options = [
            'salt' => generate_token(),
            'cost' => 12
        ];*/

        $mail = new PHPMailer(true);                              // Passing true enables exceptions
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'tiepnguyen0060071999@gmail.com';                 // SMTP username
            $mail->Password = '0986728658';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            //Recipients
            $mail->addAddress($mail1, $username);
            $mail->SetFrom($mail1);  // Add a recipient              // Name is optional
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Đăng ký thành viên Đại Học Nguyễn Tất Thành';
            $mail->Body    = 'Hello '.$username.'! <br>'.'Chào mừng bạn đến với Đại Học Nguyễn Tất Thành. Bạn đã đăng ký thành viên để trở thành học viên của trường Đại Học Nguyễn Tất Thành.<br>'.'Hãy xác minh địa chỉ email của bạn bằng cách nhấp vào 
             liên kết dưới đây <br>'."http://192.168.64.2/ntt/admin/verify.php?email=$mail1&verify=$Verification <br>".'Dữ liệu truy cập của bạn:<br>'.'Địa chỉ email: '.$mail1.' <br>'.'Tên người dùng: '.$username.' <br>'."From: tiepnt72@wru.vn" . "\r\n" ."CC: somebodyelse@example.com";
            $mail->send();
        } catch (Exception $e) {
            echo 'Không thể gửi mail';
        }
        
    }
	
 ?>