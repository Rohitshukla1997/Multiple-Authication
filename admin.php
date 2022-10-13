<?php
include 'connect.php';
include 'checksession.php';
$query="SELECT * FROM users WHERE id=".$_SESSION['id'];
$result=$con->query($query);
$data=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form>
<div align="center">
	<h1>WELCOME TO THE UNVERSITY CAMPUS</h1> <br><br>
		<h2>ADMIN ACCOUT.</h2>
	<table border="2px solid black">
		<tr>
		<td>Name: <?php echo $data['name'];?></td>
		<td >Photo :<img src="image/<?php echo $data['image_path'];?>" height="300" width="300"></td>
	</tr>
	</table>
	<br><br>
	<a href="logout.php">LOGOUT</a>

</form>
</body>
</html>
