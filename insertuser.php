<?php
   include('db.php');

$sql="INSERT INTO user (FullName	, UserName	, Gender, Email, Password , Phone ) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[gender]', '$_POST[email]', '$_POST[password]', '$_POST[phone]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  header("location: login.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 