<?php
$servername = "localhost";
$username = "test";
$password = "123456";
$database = "db";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected to MySQL successfully";
}

// Close the connection
// $conn->close();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
