<?php
 	include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$res=mysqli_query($conn,"select * from users where email='$email' and password='$pass'");
	$row=mysqli_fetch_array($res);
	if($row)
	{
		header("Location: home_new.php?user_id=$row[user_id]");
		exit();
	}
	else
	{
		echo"<br>Invalid email & password<br>";
	}}
?>

<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="login.php">
	<label for="email">Email</label>
	<input type="email" id="email" name="email"><br><br>
	<label for="pass">Password</label>
	<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" id="submit" value="LOGIN"><br>
	</form>
</body>
</html>