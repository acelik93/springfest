<?php

$conn = mysqli_connect("localhost", "root", "","spring_fest");
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}