<?php
	include "db.php";
	$user_id=$_GET['user_id'];
?>
<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="add_baby.php?user_id=<?php echo"$user_id";?>">
	<label for="name">Baby Name</label>
	<input type="text" id="name" name="name"><br><br>
	<label for="dob">Date of Birth</label>
	<input type="Date" id="dob" name="dob"><br><br>
	<label for="gender">Gender</label>
	<label for="female">Female</label>
	<input type="radio" id="female" name="gender" value="female">
	<label for="male">Male</label>
	<input type="radio" id="male" name="gender" value="male"><br><br>
	<label for="pname">Parent Name</label>
	<input type="text" id="pname" name="pname"><br><br>
	<label for="phone">Phone No</label>
	<input type="tel" id="phone" name="phone"><br><br>
	<input type="submit" id="submit" value="Add Baby"><br>
	</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST["name"];
	$dob=$_POST["dob"];
	$gender=$_POST["gender"];
	$pname=$_POST["pname"];
	$phone=$_POST["phone"];
	$res=mysqli_query($conn,"insert into babies(user_id,baby_name,date_of_birth,gender,parent_name,phone_no)values($user_id,'$name','$dob','$gender','$pname',$phone)");
}
?>