<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

session_start();

$conn = new mysqli("localhost", "root", "", "clients");
    /**The mysqli_real_escape_string function adds an escape character, the backslash, to prevent SQL injection attacks*/
$userInput = $_POST['filename'];
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
//header("Location:search.php");
//echo($outp);


echo'<html>';
echo'<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">';
echo'<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>';

echo'<div ng-app="myApp" ng-controller="customersCtrl">';
 
echo'<table>';
  echo'<tr ng-repeat="x in files">';
    echo'<td>{{ x.id }}</td>';
    echo'<td>{{ x.address}}</td>';
    echo'<td>{{ x.name }}</td>';
  echo'</tr>';
echo'</table>';
echo'<!--<p>{{files}}</p>!-->';
 
echo'</div>';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js">
  
    var app = angular.module('myApp', []);
	app.controller('customersCtrl', function($scope) {
   $scope.files = response.data.records;
});
</script>
<?php
echo'</html>';
?>