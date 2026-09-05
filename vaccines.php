<?php
	include"db.php";
	$res=mysqli_query($conn,"select * from vaccines");
	while($row=mysqli_fetch_array($res))
	{
		echo "Name-$row[vaccine_name]<br>";
		echo "Importance-$row[importance]<br>";
		echo "Recommended age-$row[recommended_age]<br>";
	}
?>