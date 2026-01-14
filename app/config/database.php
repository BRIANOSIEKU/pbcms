<?php
$host = "localhost";
$db   = "pbcms_db"; // database name we created in phpMyAdmin
$user = "root";     // default XAMPP MySQL user
$pass = "";         // default XAMPP MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo " Database connection successful!";
}
