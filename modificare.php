<?php 
	
	include "conectare.php";

	if (isset($_POST['danger'])) {

		// Sterge inregistrarea
		$id = $_POST['idbut'];
		$sql = "DELETE FROM users WHERE id = '$id';";

		$result = mysqli_query($con, $sql);
		if ($result) {
			header("Location: index.php");
		}

	}

	if (isset($_POST['edit'])) {
		
		echo "A fost apasat edit<br>";
		echo "ID: " . $_POST['idbut'] . "<br>";
		echo "Nume: " . $_POST['nume'];

		// Editeaza inregistrarea
		$id = $_POST['idbut'];
		$nume = $_POST['nume'];

		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['nume'] = $nume;
		header("Location: editare.php");

	}