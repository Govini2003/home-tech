<?php
// Database connection settings for localhost
$dbhost = 'localhost';
$dbuser = 'root'; // Default username for XAMPP/MAMP/LAMP
$dbpass = ''; // Default password is empty for XAMPP/MAMP
$dbname = 'homteq_db_tables'; // Use the correct database name

// Create a DB connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// If the DB connection fails, display an error message and exit
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

echo "Connected successfully to the database.";
?>
