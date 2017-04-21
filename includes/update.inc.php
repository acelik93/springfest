<?php
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
$uid_original = $_POST['uid_original'];
$pwd_original = $_POST['pwd_original'];
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = $_POST['pwd'];
$confirm_pwd = $_POST['confirm_pwd'];

$encrypted = password_hash($pwd, PASSWORD_DEFAULT);
$encrypted_original = password_hash($pwd_original, PASSWORD_DEFAULT);

if (isset($uid)){
    if (empty($pwd)){
$sql = "UPDATE user SET uid='$uid', pwd='$encrypted_original' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    $message = 'Record updated successfully';
} else {
    $message = 'Error updating record:'  . $conn->error;    
    }   
} elseif ($pwd == $confirm_pwd){
    $sql = "UPDATE user SET uid='$uid', pwd='$encrypted' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
     $message = 'Record updated successfully';
} else {
  $message = 'Error updating record:'  . $conn->error;
    }
}

} 

if (empty($uid) and $pwd == $confirm_pwd){
    $sql = "UPDATE user SET uid='$uid_original', pwd='$encrypted' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
     $message = 'Record updated successfully';
} else {
  $message = 'Error updating record:'  . $conn->error;
    }
}

 elseif ($pwd != $confirm_pwd){
    $message = "Passwords don't match!";
}


header("Location: ../profile.php?message='$message'"); 
session_destroy();
$conn->close();
?>