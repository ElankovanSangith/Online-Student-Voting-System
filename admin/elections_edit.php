<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Title = $_POST['Title'];
		$No_of_Candidates = $_POST['No_of_Candidates'];
		$Starting_Date = $_POST['Starting_Date'];
		$Ending_Date = $_POST['Ending_Date'];
		
		
		$sql = "UPDATE elections SET Title = '$Title', No_of_Candidates = '$No_of_Candidates', Starting_Date = '$Starting_Date', Ending_Date = '$Ending_Date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election Profile updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: elections.php');

?>