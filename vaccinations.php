<?php
	include"db.php";
	$user_id=$_GET['user_id'];
	$res=mysqli_query($conn,"select * from babies where user_id=$user_id");
	while($row=mysqli_fetch_array($res))
	{
		echo "Baby ID-$row[baby_id]<br>";
		echo "Baby name-$row[baby_name]<br>";
		$baby_id=$row['baby_id'];
		$res1=mysqli_query($conn,"select * from vaccination_records where baby_id='$baby_id'");
		while($row1=mysqli_fetch_array($res1))
		{
			echo"Vaccine id-$row1[vaccine_id]<br>";
			$vaccine_id=$row1['vaccine_id'];
			$res2=mysqli_query($conn,"select * from vaccines where vaccine_id=$vaccine_id");
			while($row2=mysqli_fetch_array($res2))
			{
				echo"Vaccine Name-$row2[vaccine_name]<br>";
			}
			echo"Vaccine date-$row1[vaccation_date]<br>";
			echo"Status-$row1[status]<br>";	
		}
	}
?>