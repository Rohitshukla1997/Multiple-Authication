<?php
include 'connect.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=$con->query($query);
$rows=mysqli_num_rows($result);
$data=$result->fetch_assoc();
if ($rows==1)
{
  $_SESSION=$data;
  if ($data['usertype']=='teacher') 
  {
  	header('location:teacher.php');
  } 
  else
  {
     if($data['usertype']=='admin') {
  	 header('location:admin.php');
     } 
     else{
  	  header('location:student.php');
     }
  }

}
else 
{
  echo mysqli_error($con);
}

?>