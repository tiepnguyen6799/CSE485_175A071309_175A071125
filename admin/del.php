<?php
    $id=$_GET["id"];
    require("connection.php");
    $sql="delete from users where (id=$id and lever=1 and lever=0)";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:user.php");
    exit();
?>