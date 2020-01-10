<?php
/**Check whether someone with the username an password that is inserted in login.php exist in the log_in table*/
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
if($info == null){
    echo 'file_get_contents("php://input") is an empty string';
}
// var_dump(file_get_contents('php://input')); //Dumps information about a variable

//count function counts all elements in an array, or something in an object
if(count($info) > 0) {
/**The mysqli_real_escape_string function adds an escape character, the backslash, 
 * \, before \x00, \n, \r, \, ', " and \x1a to prevent SQL injection attacks which are 
 * often performed by using the ' character to append malicious code to an SQL query. */
$username= mysqli_real_escape_string($conn, $info->username);
$password= mysqli_real_escape_string($conn, $info->password);

//The query to retrieve a resultset where username is'$username' and password is'$password'
$query = "SELECT * FROM clients.log_in WHERE username='$username' and password='$password'; "; 

//mysqli_query performs a query on the database
$result = mysqli_query($conn, $query);
//Checking whether someone with that username and password exists in the clients.log_in table
if (mysqli_num_rows($result) > 0) { //mysqli_num_rows gets the number of rows in a result
    // mysqli_fetch_assoc returns an associative array of strings representing the fetched row in the result set
    while($row = mysqli_fetch_assoc($result)) {      
        //implode() is used for converting arrays to a string in php
        echo 'Welcome to the Genetic Library ',$row["username"],'.';
    }
} else {
    echo "No results. Please make sure that your username and password are correct.";
}
}
?>