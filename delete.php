<?php
include 'config.php';

if ($_GET['id']) {
	$student_id = $_GET['id'];
	$sql = "DELETE FROM students WHERE student_id = '$student_id'";
	$res = mysqli_query($conn,$sql);
	if ($res) {
		header('location:mange_student.php');
	}
}

?>