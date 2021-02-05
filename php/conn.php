<?php

$dbhost = "localhost";
$username = "dev_projects";
$password = "rPvEItDr9VQL3m6K";
$db = "devprojects";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection
// $conn = null;
?>