<?php
    $conn = mysqli_connect("localhost", "root", "1234567890", "food","3306"); #or die(mysqli_error($conn));
    
    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    if(!isset($_SESSION)){
        session_start();
    }
?>