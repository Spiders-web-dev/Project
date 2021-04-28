<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="style1.css">


</head>
<body>


<?php   
    $FullName = "";   
    $UserName = "";
    $Gender = "";
    $Email = "";
    $Phone = "";
		$Password = "";


    $FullNameErr = ""; 
    $GenderErr = "";
    $EmailErr = "";
    $PhoneErr = "";
		$UserNameErr = "";
		$PasswordErr = "";
	if( $_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	
		if(empty($_POST['fullname'])){
      $FullNameErr = "please fill up this properly"; 
				 
	}
	else{

		$FullName = $_POST['fullname'];
		

	}
		if(empty($_POST['username'])){
      $UserNameErr = "please fill up this properly"; 
				 
	}
	else{

		$UserName = $_POST['username'];
		

	}

  if(empty($_POST['gender'])){
		$GenderErr = "please fill up this properly"; 
				 
	}
	else{

		$Gender = $_POST['gender'];
		

	}


  if(empty($_POST['email'])){
		$EmailErr = "please fill up this properly"; 
				 
	}
	else{

		$Email = $_POST['email'];
		

	}



  if(empty($_POST['phone'])){
		$PhoneErr = "please fill up this properly"; 
				 
	}
	else{

		$Phone = $_POST['phone'];
		

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
        <h1>Customer Registration</h1><br>
        <form name="Registration" action="insertuser.php" onsubmit="return validateForm()" method="post">
        <input type="text" name="fullname" placeholder="Full Name"  />
        </br>
        <?php echo $FullNameErr; ?>
        <input type="text" name="username" placeholder="Username"  />
        </br>
        <?php echo $UserNameErr; ?><br>

        <label>Gender:</label>
        <?php echo $GenderErr; ?>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" />
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other"  />
        <label for="other">Other</label><br>
        <input type="text" name="email" placeholder="E-mail"  />
        </br>
        <?php echo $EmailErr; ?>
        <input type="tel" name="phone" placeholder="Phone"  />
        </br>
        <?php echo $PhoneErr; ?>
        <input type="password" name="password" placeholder="Password"  />
        </br>
        <?php echo $PasswordErr; ?>
        <br/>
        <input type="submit" name="submit" value="Sign Up" />

        </form><br>
        <p>Aready registered? <a href="login.php">Login Here</a>
    </div>

<script>
    function validateForm() {
    var x = document.forms["Registration"]["fullname"].value;
    var y = document.forms["Registration"]["username"].value;
    var z = document.forms["Registration"]["gender"].value;
    var c = document.forms["Registration"]["email"].value;
    var v = document.forms["Registration"]["phone"].value;
    var b = document.forms["Registration"]["password"].value;
    if (x == "") {
    alert("Full Name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Username must be filled out");
    return false;
  }
  if (z == "") {
    alert("Gender must be filled out");
    return false;
  }
  if (c == "") {
    alert("E-mail must be filled out");
    return false;
  }
  if (v == "") {
    alert("Phone must be filled out");
    return false;
  }
  if (b == "") {
    alert("Password must be filled out");
    return false;
  }
}
</script>
</body>
</html>