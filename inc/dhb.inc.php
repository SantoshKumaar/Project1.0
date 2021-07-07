<?php

$servername = "localhost";
$userName = "root";
$passwordname = "sk160478";
$dbname = "bike";

$conn = mysqli_connect($servername, $userName, $passwordname, $dbname);
if(!$conn){
 die("Connection failed: " . mysqli_connect_error());
}
