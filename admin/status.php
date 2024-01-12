<?php
include 'includes/session.php';
$id = $_GET['id'];
$status = $_GET['status'];
$sql = "UPDATE elections SET status = $status WHERE id = $id";
$conn -> query($sql);
if ($conn) {
    header('location:elections.php');
} else {
    header('location:elections.php');
}

?>
