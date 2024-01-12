<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$Title = $_POST['Title'];
		$No_of_Candidates = $_POST['No_of_Candidates'];
		$Starting_Date = $_POST['Starting_Date'];
		$Ending_Date = $_POST['Ending_Date'];
				
		

		$sql = "INSERT INTO elections (Title, No_of_Candidates, Starting_Date, Ending_Date, status) VALUES ('$Title', '$No_of_Candidates', '$Starting_Date', '$Ending_Date', '$status')";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election Profile added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: elections.php');
?>