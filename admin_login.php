<?php
 	include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$res=mysqli_query($conn,"select * from admin where username='$name' and password='$pass'");
	$row=mysqli_fetch_array($res);
	if($row)
	{
		header("Location: admin_home.php");
		exit();
	}
	else
	{
		echo"<br>Invalid username & password<br>";
	}}
?>

<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="admin_login.php">
	<label for="name">Name</label>
	<input type="text" id="name" name="name"><br><br>
	<label for="pass">Password</label>
	<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" id="submit" value="LOGIN"><br>
	</form>
</body>
</html>