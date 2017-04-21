<?php
include '../dbh.php';
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spring_fest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST['id']; 
     
// Deleting data
$sql = "DELETE FROM user WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
    echo 'Account deleted';
} else {
    echo 'Error updating record:'  . $conn->error;    
    }   


session_destroy();
header("Location: ../index.php"); 
$conn->close();
?>