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


		$UserName = $Email = "";

		$UserNameErr = $EmailErr = "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {


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

		

			if($UserNameErr == "" && $EmailErr == "") {
				
			

$UserName = $_POST['username'];
$Email = $_POST['email'];



      
		$a1 = $_POST['username'];
        $a2 = $_POST['email'];


		$stmt1 = mysqli_prepare($con, "delete from user where username= ? and email= ?");
		mysqli_stmt_bind_param ($stmt1,"ss",$a1, $a2);
		

		$res = mysqli_stmt_execute($stmt1);

		if($res) {
			echo "Data Deleted Successfully!";
		
        header("Location: adindex.php ");
        exit();
		}
		else {
			echo "Failed to delete Data.";
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



<label for="username">User Name:</label>
<input type="text" name="username" id="username" value="<?php echo $UserName ?>">
<p><?php echo $UserNameErr; ?></p>
<br>
<br>

<label for="email">Email: </label><br>
<input type="email" id="email" name="email" value="<?php echo $Email ?>">
<p><?php echo $EmailErr; ?></p>

<br>

<input type="submit" value="Delete User">



</form>





</body>
</html>