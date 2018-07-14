<?php 
	include "conectare.php";
	
	$name = $_POST['inputName'];
	$comment = $_POST['comment'];

	$sql = "INSERT INTO users (nume, comment) VALUES ('$name', '$comment');";

	if ($res = mysqli_query($con, $sql)) {
		header("Location: index.php");
	}

	