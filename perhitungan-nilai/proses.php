<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

if($email == "rngsaputra@gmail.com" && $password == "rngsaputra@gmail.com")
{
	//true
	$test = $_SESSION["test"];
		if($test >= 3){
			header("location: error-bot.php");
		}else{
			$_SESSION["logged_in"] = $email;
			header("location: nilai_matkul.php");
		}
}else{
	//false
	$pesan = 0;
	if(isset($_SESSION["test"])){
		$test = $_SESSION["test"];
		$_SESSION["test"] = ($test+1);
		if($test < 2){
			$pesan = 1;
		}else{
			header("location: error-bot.php");exit;
		}
	}else{
		$_SESSION["test"] = 1;
		$pesan = 1;
	}
	header("location: login.php?pesan=".$pesan);
}
?>