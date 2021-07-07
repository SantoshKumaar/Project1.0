<?php

$servername = "localhost";
$username = "root";
$passwordname = "";
$dbname = "bike";

$conn = mysqli_connect($servername, $username, $passwordname, $dbname);
if(!$conn){
 die("Connection failed: " . mysqli_connect_error());
}
?>
