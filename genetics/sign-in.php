<!doctype html>
<!--An interface for the users to login into-->
<html>
<head>
<meta charset="UTF-8">
<title>Sign in</title>
<!-- Bootstrap --> 
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<style>
#head1{
    font-size: 2.8em;
	font-weight: bolder;
    color:darkslategray;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>

</head>
<body>
<div class="container">
<h1 align="center" class="page-header" id="head1">Sign in</h1>
<!--Creating two input fields, one for username and one for password, and a login button-->
    <div ng-app="sa_select_login" ng-controller="controller">
        <label>username</label><input type="text" name="username" ng-model="username" class="form-control"><br/>
        <label>password</label><input type="password" name="password" ng-model="password" class="form-control"><br/>
        <input type="submit" name="login" class="btn btn-success" ng-click="select_to_login()" value="Sign in">
    </div>
</div>

<!-- Script -->
<script>
    /*Connecting to database using Angular JS*/
    var app = angular.module("sa_select_login", []);
    app.controller("controller", function($scope, $http) {
        /*Posting the data that the user is written as username and password to the select_data_for_login.php.
        In select_data_for_login.php , we check whether someone with this username and password exists in the log_in table. */
    $scope.select_to_login = function() {
    //assure that the user has written something in the essential fields
    if($scope.username != null && $scope.password != null){
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
    else{//if username or password are null, then show some message
        alert('Please fill both username and password fields.');
    }
    }
    });
</script>

</body>
</html>