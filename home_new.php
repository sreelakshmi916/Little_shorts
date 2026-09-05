<?php
	$user_id=$_GET['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>LITTLE_SHORTS</title>
</head>
<body>
	<h1>Little Shorts!!</h1><br>
	Little Shots, Big Protection - Never Miss Your Baby's Vaccine.<br>
	<nav>
	<a href="index.php">Home</a>
	<a href="add_baby.php?user_id=<?php echo"$user_id"; ?>">Add Baby</a>
	<a href="babies.php?user_id=<?php echo"$user_id"; ?>">View Baby</a>
	<a href="vaccinations.php?user_id=<?php echo"$user_id"; ?>">Vaccinations</a>
	<a href="vaccines.php">Vaccination Schedule</a>
	</nav>
	<h2>What is Little_Shots?</h2><br>
	Babies need many vaccines on time. It is hard to remember all dates.<br>
	Little_Shots will remember it for you. Just register your baby's name and birth date. We will tell you which vaccine is next, when it is due, and remind you before the date.<br>
	<h2>Why Vaccination is Important for Your Baby?</h2><br>
	Vaccination is the best protection for your baby.When a baby is born, their body is very small and weak. They can easily get sick from dangerous diseases like Polio, Measles, and Tetanus.Vaccines work like a shield. They help your baby's body learn to fight these diseases. A small shot today can protect your baby for a lifetime.
	<a href="vaccines.php">View vaccination schedules</a>
</body>
</html>