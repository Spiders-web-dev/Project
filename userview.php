<?php




  $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'onlineshop';

 $con = mysqli_connect($hostname, $hostuser, $hostpass, $dbname);
  if($con->connect_errno){
    echo "Database Connection Failed!...";
    echo "<br>";
    echo $conn1->connect_error;
  }



$query = "SELECT * FROM `user`;";
$res = mysqli_query($con, $query);


?>


<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>View User</title>
  </head>
  <body>

    <h1 id="myh1">All User Search</h1>
  <h3>By Username</h3>
<input type="text" name="" id="name" onkeyup="ajax()" />


 

<div id="result"></div>

<div class="user">
    <h2 align=center></h2>
    <table border="1" cellspacing="5" cellpadding="5" width="100%" id="userTable">
        <thead>
            <tr>
                <th>FullName</th>
                <th>UserName</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><label><?php echo $row['FullName']; ?></label></td>
                <td><label><?php echo $row['UserName']; ?></label></td>
                <td><label><?php echo $row['Gender']; ?></label></td>
                <td><label><?php echo $row['Email']; ?></label></td>
                <td><label><?php echo $row['Phone']; ?></label></td>
                <td><label><?php echo $row['Password']; ?></label></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>