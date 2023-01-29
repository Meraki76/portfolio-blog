<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";


    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>