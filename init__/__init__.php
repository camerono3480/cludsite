<!-- file for global structure like db connections -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "codeclub";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 ?>
