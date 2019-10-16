<?php
include_once("connect.php");
$id = $_GET["id"];

  $query = "DELETE FROM users WHERE userid=$id";

  mysqli_query($connect, $query);

  header("Location: user.php");
?>