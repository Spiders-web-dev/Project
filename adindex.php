<?php
include('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div class="box-area">
            <header>
                <div class="wrapper">
                    <div class="logo">
                    <a href="#">G3 Security Ltd.</a>
                    </div>
                <nav>
                    <a href="homepage.php">Home</a>
                    <a href="aboutus.php">About</a>
                    <a href="service.php">Services</a>
                    <a href="login.php">Signin</a>
                    <a href="adlogin.php">Admin Login</a>
                </nav>
        </div>

</header>
</div>


<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p><br><br>
<?php

  include 'db.php';
$id=$_SESSION['username'];
$query=mysqli_query($con,"SELECT * FROM emp where EmpUserName='$id'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
  ?>



  <h1>Admin Profile</h1><br><br>

        <h3>Please Fill-out All Fields If You Want to edit</h3><br><br>
        <form name='update' method="post" action="" >
          
        <lable>Full Name:</lable>
            <input type="text"  name="fullname" value="<?php echo $row['EmpFullName']; ?>" placeholder="Enter your Fullname" required=""/><br>
            <br><br>
            <lable>User Name:</lable>
            <input type="text" name="username"  placeholder="Enter your Username" value="<?php echo $row['EmpUserName']; ?>" required=""/><br>
            <br><br>
            <lable>Email Address:</lable>
            <input type="email" name="email"  placeholder="Enter your Email" value="<?php echo $row['Email']; ?>" required=""/><br>
            <br><br>
            <lable>Phone Number: </lable>
            <input type="tel"  name="phone"   placeholder="Enter your Phone" value="<?php echo $row['Phone']; ?>" required=""/><br>
            <br><br>
            <lable>Password:</lable>
            <input type="text"  name="password" placeholder="Enter your Password" value="<?php echo $row['EmpPassword']; ?>" required=""/><br>
          
            <input type="submit" name="submit" class="button"><br><br>
            <p> <a href="logout.php" class="button">Sign Out</a></p>
            
        
            </div>
        
        
       
    
          
        </form>
        <p> <a href="adduser.php" class="button">Add User</a></p>

        <p> <a href="dltuser.php" class="button">Delete User</a></p>

        <p> <a href="userview.php" class="button">View or Search All User</a></p>
     
      </html>
      <?php
      if(isset($_POST['submit'])){
        $EmpFullName = $_POST['fullname'];
        $EmpUserName = $_POST['username'];
        $Email = $_POST['email'];
        $EmpPassword = $_POST['password'];
        $Phone = $_POST['phone'];
        
      $query = "UPDATE emp SET EmpFullName = '$EmpFullName', EmpUserName = '$EmpUserName', Email = '$Email', EmpPassword = '$EmpPassword' ,Phone = '$Phone' WHERE EmpUserName= '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "adindex.php";
        </script>
        <?php
             }              
?>



</body>
</html>

