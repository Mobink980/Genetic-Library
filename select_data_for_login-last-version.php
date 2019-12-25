<?php
$conn = mysqli_connect("localhost", "root", "", "clients");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {

$username= mysqli_real_escape_string($conn, $info->username);
$password= mysqli_real_escape_string($conn, $info->password);

$query = "SELECT name FROM clients.log_in WHERE username='$username' and password='$password'; "; 
$result=mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "wellcome";
    }
} else {
    echo "0 results may you are not have an acount";
}
}
?>