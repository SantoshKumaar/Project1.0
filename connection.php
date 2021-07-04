<?php
require("S:\xampp\htdocs\bike\credentials.php");
$con=mysqli_connect($serverAdress,$dbmsUsername,$dbmsPassword,$dbmsName);
if(mysqli_connect_error())
{
    echo "\n connection error";
}
?>