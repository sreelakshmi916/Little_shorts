<?php
		$vaccine_id=$_GET['vaccine_id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit vaccine</title>
</head>
<body>
<form method="POST" action="edit_vaccine.php?vaccine_id=<?php echo"$vaccine_id";?>">
<?php
	include"db.php";
	$res=mysqli_query($conn,"select * from vaccines where vaccine_id=$vaccine_id");
	while($row=mysqli_fetch_array($res))
	{
		echo"<label for='name'>Vaccine Name</label>";
		echo"<input type='text' name='name' value='$row[vaccine_name]'><br><br>";
		echo"<label for='imp'>Importance</label>";
		echo"<input type='text' name='imp' value='$row[importance]'><br><br>";
		echo"<label for='age'>Recommended age</label>";
		echo"<input type='text' name='age' value='$row[recommended_age]'><br><br>";
		echo"<input type='submit' value='Update'>";
}
?>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST['name'];
	$imp=$_POST['imp'];
	$age=$_POST['age'];
	$res=mysqli_query($conn,"update vaccines set vaccine_name='$name',importance='$imp',recommended_age='$age' where vaccine_id=$vaccine_id");
	header("location:manage_vaccines.php");
}
?>