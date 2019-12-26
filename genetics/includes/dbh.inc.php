<?php 
/**the information that we need in order to connect to database */
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "clients";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
//check if the connection fails
if(!$conn){
    die("connection failed: ".mysqli_connect_error()); //kill the connection
}
