<?php 
include 'connect.php';
	$name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    $imagename=$_FILES['image']['name'];
    $tmpimagename=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpimagename, 'image/'.$imagename);
    
    $usertype=$_POST['usertype'];
    $query="INSERT INTO users VALUES(NULL,'$name','$email','$password','$number','$imagename','$usertype')";
    if ($con->query($query)) {
    header('location:login.php');
    }
    else
    {
        echo mysqli_error($con);
    }

?>