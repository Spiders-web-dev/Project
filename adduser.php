<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add user Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php


		$FullName = $UserName = $Email = $Gender = $Phone = $Password = "";

		$FullNameErr = $UserNameErr = $EmailErr = $GenderErr = $PhoneErr = $PasswordErr= "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fullname'])) {
				$FullNameErr = "please fill up this properly";
			}
			else {
				$FullName = $_POST['fullname'];
			}

			if(empty($_POST['username'])) {
				$UserNameErr = "please fill up this properly";
			}
			else {

				$UserName = $_POST['username'];
				
			}

			if(empty($_POST['email'])) {
				$EmailErr = "please fill up this properly";
			}
			
			else {
				$Email = $_POST['email'];
			}

			if(empty($_POST['gender'])) {
				$GenderErr = "please fill up this properly";
			}
			else {

				$Gender = $_POST['gender'];
			}

			if(empty($_POST['phone'])) {
				$PhoneErr = "please fill up this properly";
			}
			
			else {
				$Phone = $_POST['phone'];
			}

			if(empty($_POST['password'])) {
				$PasswordErr = "please fill up this properly";
			}
			else {
				$Password = $_POST['password'];
			}

		

			if($FullNameErr == "" && $UserNameErr == "" && $EmailErr == "" && $GenderErr == "" && $PhoneErr == "" && $PasswordErr == "") {
				
			

$FullName = $_POST['fullname'];
$UserName = $_POST['username'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$Phone = $_POST['phone'];
$Password = $_POST['password'];

        $a1 = $_POST['fullname'];
		$a2 = $_POST['username'];
        $a3 = $_POST['email'];
        $a4 = $_POST['gender'];
        $a5 = $_POST['password'];
        $a6 = $_POST['phone'];

		$stmt1 = mysqli_prepare($con, "insert into user (FullName,UserName,Email,Gender,Password,Phone) values (?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param ($stmt1,"ssssss",$a1, $a2, $a3, $a4, $a5, $a6);
		

		$res = mysqli_stmt_execute($stmt1);

		if($res) {
			echo "Data Inserted Successfully!";
		
        header("Location: adindex.php ");
        exit();
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			$usernameErr = "User Name is not available";
		}
	
	}

	mysqli_close($con);
	

}

?>

<div class='form'>
<h1>Add user Account</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


<b>

<br>
<br>
<label for="fullname">Full Name:</label>
<input type="text" name="fullname" id="fullname" value="<?php echo $FullName ?>">
<p><?php echo $FullNameErr; ?></p>

<br>
<br>

<label for="username">User Name:</label>
<input type="text" name="username" id="username" value="<?php echo $UserName ?>">
<p><?php echo $UserNameErr; ?></p>
<br>
<br>

<label for="email">Email: </label><br>
<input type="email" id="email" name="email" value="<?php echo $Email ?>">
<p><?php echo $EmailErr; ?></p>

 <br>

 <br>
<label for="password">Password: </label> <input type="password" name="password" id="password" value="<?php echo $Password ?>" >
<p><?php echo $PasswordErr; ?></p>

<br>
<br>


<label for="gender"  >Gender: </label>
<input type="radio" name="gender" id="male" value="male" >
<label for="male">Male</label>

<input type="radio" name="gender" id="female" value="female" >
<label for="female">Female</label>

<input type="radio" name="gender" id="other" value="other" >
<label for="other">Other</label>

 <br>
 <br>

 <br>
 <br>



<label for="phone">Phone: </label><br>
<input type="tel" id="phone" name="phone" value="<?php echo $Phone ?>" >
<p><?php echo $PhoneErr; ?></p>
<br>

<input type="submit" value="Add User">



</form>





</body>
</html>