<?php
/**In the insert_data.php ,  we insert the data that is taken from the user in sign-up.php 
and insert that data into our log_in table.*/
//Initialize session data
session_start();
//Open a new connection to the MySQL server
$conn = mysqli_connect("localhost", "root", "", "clients");
// Check connection to MySql
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
/*php://input ,returns all the raw data after the HTTP-headers of the request.*/
//file_get_contents reads entire file into a string
//json_decode function returns the encoded JSON value in appropriate PHP type.
$info = json_decode(file_get_contents("php://input"));
//count function counts all elements in an array, or something in an object
if(count($info) > 0) {
/**The mysqli_real_escape_string function adds an escape character, the backslash, to prevent SQL injection attacks*/
$username= mysqli_real_escape_string($conn, $info->username);
$password= mysqli_real_escape_string($conn, $info->password);
$email = mysqli_real_escape_string($conn, $info->email);



//The query to insert a new row to the log_in table with the values  name,username,password, email, age 
//Only username, email, and password are essential fields
$query = "INSERT INTO log_in( username, password, email, about) 
                              VALUES ('$username', '$password', '$email')"; 
if(mysqli_query($conn, $query)) {
echo "The data inserted successfully!";
}
else {
echo "Failed to insert the new data.";
}
}
?>