<?php 
include_once("connection.php");
$image=$_GET["img"];
$result=mysqli_query($mysqli, "DELETE FROM webregis WHERE img=$image");

if ($result) {
    header("Location:home.php?msg=success");
  } else {
    header("Location:home.php?msg=failed");
  }

mysqli_close($mysqli);
?>
