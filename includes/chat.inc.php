<?php
include '../dbh.php';

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

    $uid = $_POST['uid']; 
    $message = $_POST['message'];
     // Set the timezone 
    date_default_timezone_set('Europe/Helsinki');
    $messagetime = date('h:i:s a', time());

     // Validate the input
     if(!isset($message) || $message == ''){
            $error = "You can't send an empty message!";
            header("Location: ../chat.php?error=".urlencode($error));
            exit();
     } else{
         $sql = "INSERT INTO chatroom (time, uid, message)
            VALUES ('$messagetime', '$uid', '$message')";
        if(!mysqli_query($conn, $sql)){
            die('Error: '.mysqli_error($conn));
        } else{
            header("Location: ../chat.php");
        }
     }

echo $uid;

?>