<?php
session_start();
if (!isset($_SESSION["logged_in"]))
	header("location: login.php");

$kehadiran = $_POST["kehadiran"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];

$nilai = ($kehadiran * 0.1) + ($uts * 0.45) + ($uas * 0.45);
$grade = "";

$kesimpulan = "Lulus";
if ($nilai >= 80) {
	$grade = "A";
} elseif ($nilai >= 75.1) {
	$grade = "AB";
} elseif ($nilai >= 70.1) {
	$grade = "B";
} elseif ($nilai >= 65.1) {
	$grade = "BC";
} elseif ($nilai >= 60.1) {
	$grade = "C";
} elseif ($nilai >= 55.1) {
	$kesimpulan = "Remedial";
	$grade = "CD";
} elseif ($nilai >= 40.1) {
	$kesimpulan = "Remedial";
	$grade = "D";
} else {
	$kesimpulan = "Tidak Lulus";
	$grade = "E";
}
?>






<!doctype html>
<html lang="en">

<head>
	<title>Kesimpulan Nilai</title>
	<link rel="stylesheet" href="login.css">
</head>

<body>
	<div class="center">
		<h4>Hasil:</h4>
		<center>
		<h3><?php echo $nilai . " - " . $grade . " - " . $kesimpulan; ?></h3>
		</center>
	</div>
</body>

</html>