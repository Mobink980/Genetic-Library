<?php
/**Check whether a file with the name searched in search.php exists in the files_of_clients table*/
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
$filename = mysqli_real_escape_string($conn, $info->filename);

//The query to retrieve a resultset where file_name is '$filename'
$query = "SELECT * FROM clients.files_of_clients WHERE file_name='$filename'; "; 

//mysqli_query performs a query on the database
$result = mysqli_query($conn, $query);



// mysqli_close($conn);

if (mysqli_num_rows($result) > 0) { //mysqli_num_rows gets the number of rows in a result
    // mysqli_fetch_assoc returns an associative array of strings representing the fetched row in the result set
    while($row = mysqli_fetch_assoc($result)) {
        echo "filename: " . $row["file_name"]. " - fileAddress: " . $row["file_address"].  "";
    }
} else {
    echo "File not found.";
}
}
?>


