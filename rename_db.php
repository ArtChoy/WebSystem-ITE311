<?php
$conn = new mysqli('localhost', 'root', '');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create new database
$sql = "CREATE DATABASE IF NOT EXISTS lms_abasolo";
if ($conn->query($sql) === TRUE) {
    echo "New database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Drop old database
$sql = "DROP DATABASE IF EXISTS ite311_db";
if ($conn->query($sql) === TRUE) {
    echo "Old database dropped successfully\n";
} else {
    echo "Error dropping database: " . $conn->error . "\n";
}

$conn->close();
