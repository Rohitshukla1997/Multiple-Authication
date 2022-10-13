<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div align="center">
	<form method="post" action="getdata.php" enctype="multipart/form-data">
	<h1>WELCOME TO NEW REGISTERATION PAGE</h1>
	<a href="index.php">HOME</a><br>

	<p>
		<label>Name :</label>
        <input type="text" name="name">
	</p>
	<p>
		<label>Email :</label>
        <input type="email" name="email">
	</p>
    <p>
    	<label>Password :</label>
        <input type="password" name="password">
    </p>
    <p>
		<label>Contact no. :</label>
        <input type="number" name="number">
	</p>
	<p>
		<label>Please upload your photo :</label>
        <input type="file" name="image" value="upload">
	</p>
	<label>UserType :</label>
	<select name="usertype">
		<option value="admin">Admin</option>	
		<option value="teacher">Teacher</option>
		<option value="student">Student</option>
	</select>
<p>
	<input type="submit" name="submit">
</p>

</form>
</body>
</html>