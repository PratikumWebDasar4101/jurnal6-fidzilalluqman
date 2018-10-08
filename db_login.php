<?php
require_once("db_login.php"); 
$servername = "localhost";
$username = "root";
$password = "";
$db = "jurnal6";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "koneksi berhasil";
?>