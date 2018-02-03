<?php
require('db.php');
session_start();
$udid = $_POST["user"];
$_SESSION["udid"]=$udid;
$password = $_POST["pass"];

$query = "SELECT * FROM `users` WHERE UDID='$udid' and password='$password'";
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		$rows = mysqli_fetch_array($result);
		if(empty($rows)){
			header("Location:../index.html");
		}		
		else{
			//echo $rows['UDID'];
			header("Location:userlandingpage.php");
		}
		
?>