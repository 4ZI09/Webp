<?php 
$connection = mysqli_connect("localhost","root","","webregis");
 
// Check connection
if (mysqli_connect_errno()){
	echo "connection database failed : " . mysqli_connect_error();
}
 
?>