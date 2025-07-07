<?php
$host = "127.0.0.1"; // use IP, not 'localhost'
$port = 3307;        // match your XAMPP MySQL port
$user = "root";
$pass = "megha@123";   // ← Use the actual password you set
$db = "attendance_system";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
	die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to MySQL database on port $port!";
?>