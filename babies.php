<?php
	include"db.php";
	$user_id=$_GET['user_id'];
	$res=mysqli_query($conn,"select * from babies where user_id='$user_id'");
	while($row=mysqli_fetch_array($res))
	{
		echo "$row[baby_id]<br>";
		echo "Name-$row[baby_name]<br>";
		echo "Date Of Birth-$row[date_of_birth]<br>";
		echo "Gender-$row[gender]<br>";
		echo "Parent Name-$row[parent_name]<br>";
		echo"Phone No -$row[phone_no]<br>";
		echo"<a href='edit_baby.php?baby_id=$row[baby_id]&user_id=$row[user_id]'>Edit changes</a>";
	}
?>