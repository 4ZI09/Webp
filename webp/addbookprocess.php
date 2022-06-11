<?php 
	 include 'connection.php';

$title = $_POST['title'];
$author = md5($_POST['author']);
$price = $_POST['price'];
$isbn = $_POST['isbn'];
$category = $_POST['category'];

$register = mysqli_query($connection, "INSERT INTO main_dataset VALUES('','$title','$author','$price','$isbn','category')");



header("location:home.php");
?>