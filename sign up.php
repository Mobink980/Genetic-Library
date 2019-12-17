<!doctype html>
<!--In sign up.php , we take the information from the user who wants to register in the website,
and post the information that entered by the user to the insert_data.php for inserting into the log_in table.
We do this, so the next time the user doesn't have to sign-up again-->
<html>
<head>
<meta charset="UTF-8">
<title>Sign up</title>
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
    <h1 align="center" class="page-header" id="head1">sign up</h1>
    <!--Creating inputs for the user to put their information into-->
    <div ng-app="sa_insert" ng-controller="controller">
        <label>First Name*</label><input type="text" name="firstname" ng-model="firstname" class="form-control"><br/>
        <label>Last Name*</label><input type="text" name="lastname" ng-model="lastname" class="form-control"><br/>
        <label>Username*</label><input type="text" name="username" ng-model="username" class="form-control"><br/>
        <label>Password*</label><input type="password" name="password" ng-model="password" class="form-control"><br/>
        <label>Confirm Password*</label><input type="password" name="confirm_password" ng-model="confirm_password" class="form-control"><br/>
        <label>Email*</label><input type="text" name="email" ng-model="email" class="form-control"><br/>
        <label>Tell others about yourself</label><input type="text" name="about" ng-model="about" class="form-control"><br/>       
        <input type="submit" name="insert" class="btn btn-success btn-block" ng-click="insert()" value="Sign up">
    </div>
</div>
<!-- Script -->
<script>
    var app = angular.module("sa_insert", []);
    app.controller("controller", function($scope, $http) {
    /*Posting the data that the user is written for signing up to the webpage to the insert_data.php.
    In insert_data.php , we insert the data that is given by the user, into the log_in table. */
    $scope.insert = function() {
     //assure that the user has written something in the essential fields
     if($scope.firstname != null){
    if($scope.firstname != null && $scope.lastname != null && $scope.username != null && 
    $scope.email != null && $scope.password != null){
    if($scope.password == $scope.confirm_password){//if the password is the same as the confirm_password
    $http.post(
    "insert_data.php", {
    'firstname': $scope.firstname,
    'lastname': $scope.lastname,
    'username': $scope.username,
    'password': $scope.password,
    'email': $scope.email,
    'about': $scope.about
    }
    ).success(function(data) {
    alert(data);
    $scope.name = null;
    $scope.email = null;
    $scope.age = null;
    });
} else{//if password is different with confirm_password
    alert('Please confirm your password again.');
}
    }
    else{//if one of the essential fields are null, then show some message
        alert('One of the essential fields are empty. Please fill all the fields with *');
    }
    }
    else{
        alert('Please write your firstname');
    }
}
    });
</script>
</body>
</html>
