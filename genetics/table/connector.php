<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "clients");

$result = $conn->query("SELECT file_id, file_Name,file_address FROM files_of_clients");

$output = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($output != "") {$output .= ",";}
  $output .= '{"id":"'  . $rs["file_id"] . '",';
  $output .= '"name":"'   . $rs["file_Name"]        . '",';
  $output .= '"address":"'. $rs["file_address"]     . '"}';
}
$output ='{"records":['.$output.']}';
//$conn->close();

echo($output);
?>