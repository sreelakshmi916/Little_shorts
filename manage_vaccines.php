<?php
	include"db.php";
	$res=mysqli_query($conn,"select * from vaccines");
	while($row=mysqli_fetch_array($res))
	{
		echo "Vaccine ID-$row[vaccine_id]<br>";
		echo "Name-$row[vaccine_name]<br>";
		echo "Importance-$row[importance]<br>";
		echo "Recommended age-$row[recommended_age]<br>";
		echo "<a href='edit_vaccine.php?vaccine_id=$row[vaccine_id]'>Edit Vaccine</a><br><br>";
	}
?>
<!DOCTYPE html>
<html>
<a href="add_vaccine.php">Add New Vaccine</a><br><br>
</html>