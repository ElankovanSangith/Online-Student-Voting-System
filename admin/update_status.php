<?php 
	include 'includes/session.php';						
	$conn->query("UPDATE voters SET account = 'Inactive'")or die(mysql_error());
	echo "<script> window.location='voters.php' </script>"; 
?>			 