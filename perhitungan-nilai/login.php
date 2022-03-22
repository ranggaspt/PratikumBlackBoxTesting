<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="login.css">
	<title>Login</title>
</head>

<div class="center1">
<?php
session_start();
if (isset($_GET["pesan"])) {
	$pesan = $_GET["pesan"];
	if ($pesan == 1) {
		echo "Email atau Password yang anda masukan salah!<br>";
		$test = $_SESSION["test"];
		echo "Percobaan tersisa " . (3 - $test) . "x";
	} else {
		echo "Pesan tidak dapat dikenali";
	}
}
?>
</div>

<body>
	<div id="login">
		<div class="center">
			<h2>LOGIN</h2>
			<form class="fl" action="proses.php" method="POST">
				Username
				<input class="itpw" type="text" name="email" 
				placeholder="Username" required><br>
				<br />
				Password
				<input class="itpw" type="password" name="password" 
				placeholder="Password" required><br>
				<br />
				<input class="its" type="submit" name="submit" value="LOGIN">
			</form>
		</div>
	</div>
</body>

</html>

</html>