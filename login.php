<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>softAOX | Insert Data Into Database using Angular JS with PHP Mysql</title>
<!-- Bootstrap --> 
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<!--<script src="angular.min.js"></script>!-->
</head>
<body>
<div class="container">
<h1 align="center">login:</h1>
<div ng-app="sa_select_login" ng-controller="controller">
<label>username</label><input type="text" name="username" ng-model="username" class="form-control"><br/>
<label>password</label><input type="text" name="password" ng-model="password" class="form-control"><br/>
<input type="submit" name="login" class="btn btn-success" ng-click="select_to_login()" value="login">
</div>
</div>
<!-- Script -->
<script>
var app = angular.module("sa_select_login", []);
app.controller("controller", function($scope, $http) {
$scope.select_to_login = function() {
$http.post(
"select_data_for_login.php", {

'username': $scope.username,
'password': $scope.password,

}
).success(function(data) {
alert(data);
$scope.name = null;
$scope.password = null;
});
}
});
</script>
</body>
</html>