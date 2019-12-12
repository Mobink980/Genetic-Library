<?php
$conn = mysqli_connect("localhost", "root", "2581104554", "clients");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {

$filename = mysqli_real_escape_string($conn, $info->filename);


$query = "SELECT file_address FROM clients.files_of_clients WHERE file_name='$filename'; "; 
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "filename: " . $row["file_name"]. " - fileaddress: " . $row["file_address"].  "";
    }
} else {
    echo "no results";
}
}
?>