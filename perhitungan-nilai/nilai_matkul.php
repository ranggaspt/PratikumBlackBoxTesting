<?php
session_start();
if (!isset($_SESSION["logged_in"]))
	header("location: login.php");
?>

<!doctype html>
<html lang="en">

<head>
	<link rel="stylesheet" href="login.css">
	<title>Perhitungan Nilai</title>
</head>

<body>
	<div class="center">
		<h2>FORM NILAI</h2>
		<form class="fl" action="kesimpulan.php" method="POST">
			Kehadiran
			<input class="itpw" type="number" name="kehadiran" placeholder="Kehadiran" max="100" min="0" required>
			UTS
			<input class="itpw" type="number" name="uts" placeholder="UTS" max="100" min="0" required>
			UAS
			<input class="itpw" type="number" name="uas" placeholder="UAS" max="100" min="0" required>
			<input class="its" type="submit" name="submit" value="Hitung">
		</form>
	</div>
</body>

</html>