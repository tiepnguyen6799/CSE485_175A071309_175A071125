<?php
    include('connection.php');
    if(isset($_POST['ok'])){
        $txtname=$_POST['ten_tt'];
        $txtnd=$_POST['noidung_tt'];
        $sql="INSERT INTO 'tintuc'(id_tt,ten_tt,noidung_tt,luotxem,trangthai_tt) VALUES ('12','$id_tt','$txtname','$txtnd','12','1')";
        $result=mysqli_query($conn,$sql);
    }
?>