<?php
	include"db.php";
	$res=mysqli_query($conn,"select * from babies");
	while($row=mysqli_fetch_array($res))
	{
		echo "$row[baby_id]<br>";
		echo "Name-$row[baby_name]<br>";
		echo "Date Of Birth-$row[date_of_birth]<br>";
		echo "Gender-$row[gender]<br>";
		echo "Parent Name-$row[parent_name]<br>";
		echo"Phone No -$row[phone_no]<br>";
	}
?>