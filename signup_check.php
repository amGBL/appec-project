<?php 
	include 'config.php';
	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$phone = $_POST['phone'];
		$pass = $_POST['password'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$role = $_POST['role'];
		$sql = "INSERT INTO user (first_name, last_name, phone, email,password, action)  values('$fname','$lname','$phone','$email','$pass','$role')";
		$res = mysqli_query($conn,$sql);
		if ($res) {
			header('location:login.php');
		}else{
			echo "error";
		}



	}


?>