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

$uid =  $_POST['uid'];
$pwd = $_POST['pwd'];;

$sql = "SELECT * FROM user WHERE uid = '$uid'";
$result =  $conn -> query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$row = $result -> fetch_assoc();
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if($hash == 0){
    //header("Location: ../signup.php?error=empty");
    exit();
} else {
    $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd' ";
     $result = mysqli_query($conn, $sql);

    if(!$row = $result -> fetch_assoc()){
        echo "Your username or password is incorrect!";
    } else {
        $_SESSION['id'] = $row['id']; // id stored
        $_SESSION['uid'] = $_POST['uid']; // username stored
        $_SESSION['pwd'] = $_POST['pwd']; // password stored
        $_SESSION['logged_in'] = 'YES'; // logged_in information is YES.    
    }

}

header("Location: ../index.php"); 