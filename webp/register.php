<?php 
 include 'connection.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$date = $_POST['date'];
$gender = $_POST['gender'];

$register = mysqli_query($connection, "INSERT INTO user VALUES('','$username','$password','$date','$gender')");




header("location:login.php");

?>