<?php
$conn = mysqli_connect("localhost", "root", "951123357", "clients");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {
$name = mysqli_real_escape_string($conn, $info->name);
$username= mysqli_real_escape_string($conn, $info->username);
$password= mysqli_real_escape_string($conn, $info->password);
$email = mysqli_real_escape_string($conn, $info->email);
$age = mysqli_real_escape_string($conn, $info->age);
$query = "INSERT INTO log_in(name,username,password, email, age) VALUES ('$name','$username','$password', '$email', '$age')"; 
if(mysqli_query($conn, $query)) {
echo "Insert Data Successfully";
}
else {
echo "Failed";
}
}
?>