<?php
include("connection.php");

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];

	$sql="SELECT * FROM signup WHERE email='$email' ";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if($num > 0){
		echo '<script>alert("email already exists!");</script>';
	}else{
		$insert="INSERT INTO signup(name,email,password,address,phone) VALUES ('$name','$email','$password','$address','$phone')" ;
		mysqli_query($conn,$insert);
		header("location:index.php");
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="main">
	<form action="" method="POST">
		<h1>SIGN UP</h1>
		<input type="name" name="name" placeholder="Enter your name" autocomplete="off" required ><br>
		<input type="email" name="email" placeholder="Enter your email id" autocomplete="off" required><br>
		<input type="password" name="password" placeholder="Enter the Password" autocomplete="off" required><br>
		<input type="address" name="address" placeholder="Enter your address" autocomplete="off" required><br>
		<input type="number" name="phone" placeholder="Enter your phone number" autocomplete="off" required><br>
		<button type="submit">SIGNUP</button><br><br>
		 Have an account?&nbsp;<a href="index.php">Login Here</a>
	</form>
</div>

</body>
</html>