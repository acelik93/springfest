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

$first = mysqli_real_escape_string($conn, $_POST['firstname']); // mysqli_real_escape_string will take care of harmful info such as javascript tags.
$last = mysqli_real_escape_string($conn, $_POST['lastname']); // mysqli_real_escape_string will take care of harmful info such as javascript tags.
$uid = mysqli_real_escape_string($conn, $_POST['uid']); // mysqli_real_escape_string will take care of harmful info such as javascript tags.
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
$pwd = $_POST['pwd'];
// Email validate
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ""; 
        } else {
            echo "$email is not valid.<br/><br/>";
        }
$encrypted = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (firstname, lastname, email, uid, pwd)
VALUES ('$first', '$last', '$email', '$uid', '$encrypted')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: ../index.php"); 

$conn->close();
?>