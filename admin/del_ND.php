<?php
    $id=$_GET["id"];
    require("connection.php");
    $sql="delete from tintuc where id=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:new.php");
    exit();

?>