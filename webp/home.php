<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin:  0;
			padding: 0;
		}
		.b {
			margin: 20px;
			border: 1px solid #ccc;
			float: left;
			width: 180px;
		}
		.a {
			width: 90%;
			height:  auto;
			text-align: center;
			padding-bottom: 5px;
		}
.container {
	margin-top: 18px;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<?php 
	if (isset($_GET['msg'])) {
		if ($_GET['msg']=='sukses') {
			echo 'Berhasil Login';
		}
		elseif ($_GET['msg']=='success') {
			echo 'Berhasil Delete';
		}
		elseif ($_GET['msg']=='failed') {
			echo 'Gagal Delete';
		}
	}
?>
<?php 
	session_start();
	if (!isset($_SESSION['login'])) {
		header('Location:login.php');
	}
?>
	<div class="topnav">
  <a href="addbook.php">Add Book+</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="logout.php">Logout</a>
</div>
	<div class="container">
		

	<?php 
		include 'connection.php';
		$data = mysqli_query($connection,"SELECT * FROM `main_dataset` ORDER BY `main_dataset`.`book_depository_stars` DESC Limit 
			50");
		while($d = mysqli_fetch_array($data)){
			?>
			<div class="b">
				<div>
					<img src="<?php echo $d['img']; ?>" class="a" width="20%" height=200px onerror="this.src='Imgnofound.jpg';">
					<h2 class="a"><?php echo $d['name']; ?></h2>
					<h3><a href="#update">Update</a></h3>
					<h3><a href="delete.php?img=<?=$d['img']?>">Delete</a></h3>
				</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>