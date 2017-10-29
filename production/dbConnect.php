<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bit";
// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection Error");
mysqli_select_db($conn, $dbname) or die("Database Error");
?>