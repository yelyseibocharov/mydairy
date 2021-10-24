<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
if(!isset($_SESSION['autorized'])){
header('Location: http://md1/MyDairy/loginadmin.php');
exit;
}
?>