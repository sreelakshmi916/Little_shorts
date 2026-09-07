<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
	$importance=$_POST['importance'];
	$age=$_POST['age'];
	$recommended_days=$_POST['recommended_days'];

	mysqli_query($conn,"insert into vaccines(vaccine_name,importance,recommended_age,recommended_days) values('$name','$importance','$age','$recommended_days')");
	$res=mysqli_query($conn,"select * from vaccines where vaccine_name='$name' and recommended_days='$recommended_days'");

	while($row=mysqli_fetch_array($res))
	{
		$vaccine_id=$row['vaccine_id'];
	}
	$res1=mysqli_query($conn,"select * from babies");

	while($row1=mysqli_fetch_array($res1))
	{
		$baby_id=$row1['baby_id'];
		$dob=$row1['date_of_birth'];

		mysqli_query($conn,"insert into vaccination_records(baby_id,vaccine_id,due_date,status) values('$baby_id','$vaccine_id',DATE_ADD('$dob',INTERVAL $recommended_days DAY),'Pending')");
	}

	header("location:manage_vaccines.php");
	exit();
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

<label for="name">Vaccine Name</label>
<input type="text" id="name" name="name"><br><br>

<label for="importance">Importance</label>
<input type="text" id="importance" name="importance"><br><br>

<label for="age">Recommended Age</label>
<input type="text" id="age" name="age"><br><br>

<label for="recommended_days">Recommended Days</label>
<input type="number" id="recommended_days" name="recommended_days"><br><br>

<input type="submit" value="Add Vaccine">

</form>

<br>

<a href="manage_vaccines.php">Back to Manage Vaccines</a>

</body>
</html>
