<?php
    session_start();
    include 'includes/conn.php';

    if(isset($_POST['login'])){
        $voter = $_POST['voter'];
        $password = $_POST['password'];

        // Check if the election is active
        $electionSql = "SELECT * FROM elections WHERE id = 1 AND status = 'Active'"; // Assuming '1' is the ID of the active election
        $electionQuery = $conn->query($electionSql);

        if($electionQuery->num_rows < 1){
            $_SESSION['error'] = 'No active election found';
        }
        else {
            // Check if the voter exists and has an active account
            $voterSql = "SELECT * FROM voters WHERE voters_id = '$voter' AND account = 'Active'";
            $voterQuery = $conn->query($voterSql);

            if($voterQuery->num_rows < 1){
                $_SESSION['error'] = 'Cannot find voter with the ID or account is not active';
            }
            else {
                $voterRow = $voterQuery->fetch_assoc();
                if(password_verify($password, $voterRow['password'])){
                    $_SESSION['voter'] = $voterRow['id'];
                }
                else{
                    $_SESSION['error'] = 'Incorrect password';
                }
            }
        }
    }
    else{
        $_SESSION['error'] = 'Input voter credentials first';
    }

    header('location: index.php');
?>