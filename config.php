<?php

// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = new mysqli($servername, $username, $password, $dbname);

// check for errors
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}