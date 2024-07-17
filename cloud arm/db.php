<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cloud_arm";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        // Connection failed, display error message
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        // Connection successful
        echo "Connected to MySQL successfully!";
    }
?>
