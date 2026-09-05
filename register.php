<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="register.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name"><br><br>
	<label for="email">Email</label>
	<input type="email" id="email" name="email"><br><br>
	<label for="pass">Password</label>
	<input type="Password" id="pass" name="pass"><br><br>
	<input type="submit" id="submit" value="REGISTER"><br>
	</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$res=mysqli_query($conn,"select * from users where email='$email'");
	$row=mysqli_fetch_array($res);
	if($row)
	{
		echo"<br>email already exists";
	}
	else
	{
		mysqli_query($conn,"insert into users(name,email,password)values('$name','$email','$pass')");
		header("location:login.php");
		exit();
	}
	}
?>