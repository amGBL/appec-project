<?php
include 'config.php';
session_start();
if (isset($_POST['submit'])) {
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($res);
	$_SESSION['fname'] = $row['first_name'];

	if (is_array($row)) {
		if ($row['action'] == 'manager') {
			header('location:manager.php');
		}elseif ($row['action'] == 'accountant') {
			header('location:accountant.php');
		}elseif($row['action'] == 'secretary'){
			header('location:secretary.php');
		}elseif($row['action'] == 'dod'){
			header('location:dod.php');
		}elseif($row['action'] == 'dos'){
			header('location:dos.php');
		}elseif($row['action'] == 'store'){
			header('location:store.php');
		}
	}else{
		header('location:login.php');
	}

}

?>