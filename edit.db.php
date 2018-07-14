<?php 
	include "conectare.php";

	session_start();

	$id = $_SESSION['id'];
	$nume = $_SESSION['nume'];
	$continut = $_POST['comment'];

	session_destroy();

	// Modificare continut baza de date

	$sql = "UPDATE users SET comment='$continut' WHERE id='$id';";

	$res = mysqli_query($con, $sql);

	if ($res) {
		header("Location: index.php");
	} else {
		echo mysqli_connect_errno();
	}
