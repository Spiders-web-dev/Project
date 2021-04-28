<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>

<?php 
		$UserName = "";
		$Password = "";
		$UserNameErr = "";
		$PasswordErr = "";
	if( $_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	
		if(empty($_POST['username'])){
		$UserNameErr = "please fill up this properly"; 
				 
	}
	else{

		$UserName = $_POST['username'];
		

	}
		if(empty($_POST['password'])){
		$PasswordErr = "please fill up this properly"; 
				 
	}
	else{

		$Password = $_POST['password'];
		

	}

}



?>

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
        <h1>Admin Login</h1><br>
        <form name="login" action="adloginval.php" onsubmit="return validateForm()" method="post">
        <input type="text" id= "username" name="username" placeholder="Username"  />
        </br>
        <?php echo $UserNameErr; ?>
        <input type="password" id= "password" name="password" placeholder="Password" />
        </br>
        <?php echo $PasswordErr; ?>
        </br>
        <input type="submit" name="click" value="Sign In" />
        </form>
        <br><br>
        <p>Go back to Home <a href="homepage.php">Click Here</a>
    </div>
    <br>


<script>
    function validateForm() {
    var x = document.forms["login"]["username"].value;
    var y = document.forms["login"]["password"].value;
    if (x == "") {
    alert("Username must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }

}
</script>
</body>
</html>