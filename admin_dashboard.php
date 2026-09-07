<?php
include "db.php";
$res=mysqli_query($conn,"select * from users");
$total_parents=0;

while($row=mysqli_fetch_assoc($res))
{
	$total_parents++;
}

$res=mysqli_query($conn,"select * from babies");
$total_babies=0;

while($row=mysqli_fetch_assoc($res))
{
	$total_babies++;
}

$res=mysqli_query($conn,"select * from vaccines");
$total_vaccines=0;

while($row=mysqli_fetch_assoc($res))
{
	$total_vaccines++;
}

$res=mysqli_query($conn,"select * from vaccination_records where status='Taken'");
$total_taken=0;

while($row=mysqli_fetch_assoc($res))
{
	$total_taken++;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>

<body>

<h1>Little Shots Admin Dashboard</h1>

<h2>Dashboard</h2>

<p>Total Parents - <?php echo $total_parents; ?></p>

<p>Total Babies - <?php echo $total_babies; ?></p>

<p>Total Vaccines - <?php echo $total_vaccines; ?></p>

<p>Vaccinations Taken - <?php echo $total_taken; ?></p>

<br>

<a href="../index.php">Logout</a>

</body>
</html>
