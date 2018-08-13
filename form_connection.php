<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ctetexam";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
} 
echo "<br>Connected successfully";
?>