<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
	$importance=$_POST['importance'];
	$age=$_POST['age'];

	$res=mysqli_query($conn,"insert into vaccines(vaccine_name,importance,recommended_age) values('$name','$importance','$age')");

	echo "Vaccine added successfully";
}
?>

<!DOCTYPE html>

<html>
<head>
	<title>Add Vaccine</title>
</head>
<body>

<h2>Add Vaccine</h2>

<form method="POST" action="add_vaccine.php">
<label>Vaccine Name</label>
<input type="text" name="name"><br><br>
<label>Importance</label>
<input type="text" name="importance"><br><br>
<label>Recommended Age</label>
<input type="text" name="age"><br><br>
<input type="submit" value="Add Vaccine">
</form>

</body>
</html>
