<?php

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

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS user(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(320) NOT NULL,
uid VARCHAR(30) NOT NULL,
pwd VARCHAR(1000) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}

// Creating a test user to see if everything is OK
$id = "1";
$first = "John";
$last = "Doe";
$email = "johndoe@fakemail.com";
$uid = "testuser";
$pwd = "test123";

// Test values
$sql = "INSERT INTO user (id, firstname, lastname, email, uid, pwd)
VALUES ('$id','$first', '$last', '$email', '$uid', '$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}

// Creating table for chatroom
$chat = "CREATE TABLE IF NOT EXISTS chatroom(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
time TIME NOT NULL,
uid VARCHAR(30) NOT NULL,
message TEXT NOT NULL
)";

if ($conn->query($chat) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}

// Test and Prepared statement values

$stmt = $conn->prepare("INSERT INTO chatroom (id, time, uid, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $id, $time, $uid, $message);

// Set parameters and execute
date_default_timezone_set('Europe/Helsinki');

$id = 1;
$uid = "JohnDoe";
$message = "Hello, we can discuss about the event here.";
$time = date('h:i:s a', time());
$stmt->execute();

$id = 2;
$uid = "MarieM";
$message = "I can't wait for the event!";
$time = date('h:i:s a', time());
$stmt->execute();

$stmt->close();

if ($conn->query($chat) === TRUE) {
    echo "";
} else {
    echo "";
}


$conn->close();
?>