<?php
include('db.php');
session_start();

if (isset($_POST['username'])){
    $username= stripslashes($_REQUEST['username']);
    $username= mysqli_real_escape_string($con,$username);
    $password= stripslashes($_REQUEST['password']);
    $password= mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM emp where EmpPassword = '$password' and EmpUserName = '$username' " ;
        $result = mysqli_query($con,$query) or die (mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username']= $username;
            header("location: adindex.php");

        }else{
            ?>
            <div class='form'>
            <h3>UserName/Password is incorrect.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>
            <?php
        }
        


}else{
    echo "not Working";
}

?>