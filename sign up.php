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
<h1 align="center">sign up:</h1>
<div ng-app="sa_insert" ng-controller="controller">
<label>Name</label><input type="text" name="name" ng-model="name" class="form-control"><br/>
<label>username</label><input type="text" name="username" ng-model="username" class="form-control"><br/>
<label>password</label><input type="text" name="password" ng-model="password" class="form-control"><br/>
<label>Email</label><input type="text" name="email" ng-model="email" class="form-control"><br/>
<label>Age</label><input type="text" name="age" ng-model="age" class="form-control"><br/>
<input type="submit" name="insert" class="btn btn-success" ng-click="insert()" value="Insert">
</div>
</div>
<!-- Script -->
<script>
var app = angular.module("sa_insert", []);
app.controller("controller", function($scope, $http) {
$scope.insert = function() {
$http.post(
"insert_data.php", {
'name': $scope.name,
'username': $scope.username,
'password': $scope.password,
'email': $scope.email,
'age': $scope.age
}
).success(function(data) {
alert(data);
$scope.name = null;
$scope.email = null;
$scope.age = null;
});
}
});
</script>
</body>
</html>