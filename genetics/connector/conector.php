<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$conn = new mysqli("localhost", "root", "", "clients");
    /**The mysqli_real_escape_string function adds an escape character, the backslash, to prevent SQL injection attacks*/
session_start();
echo $_SESSION['ne'];
$userInput = $_SESSION['ne'];
$result = $conn->query("SELECT file_id, file_Name,file_address FROM files_of_clients WHERE file_name='$userInput';");

$outp = "";
while($rs = $result -> fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"id":"'  . $rs["file_id"] . '",';
  $outp .= '"name":"'   . $rs["file_Name"]        . '",';
  $outp .= '"address":"'. $rs["file_address"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
//$conn->close();

echo($outp);

//header('location:content.php');
?>
