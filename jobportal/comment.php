<?php

// Sanitize and validate user input
$conn = new mysqli("localhost", "root", "", "jobportaldb");

// Check connection
session_start();
if (isset($_SESSION['user_id'])) {
    $comment = $_POST["comment"];

    // Fetch userid from the database
    $userid = $_SESSION['user_id'];
    $fetchUser = $conn->query("SELECT username FROM register WHERE userid = $userid");
    $userData = $fetchUser->fetch_assoc();

    if ($userData) {
        // Use the fetched userid to insert into the job table
        $sql = "INSERT INTO comments (username,userid, comment, blogid) 
                VALUES ('$userData[username]', '$userid', '$comment', '$blogId')";

        if ($conn->query($sql) === TRUE) {
            echo '<script> alert("comment inserted"); </script>';
            header('Location:blogmore.php');
            
        } else {
            echo '<script> alert("comment not inserted"); </script>';
        }
    } else {
        echo '<script> alert("User data not found"); </script>';
    }
}?>
