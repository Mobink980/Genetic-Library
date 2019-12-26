<!DOCTYPE html>
<!--An interface for the users to search-->
<html>
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
<body>

  <div class="container" ng-app="myApp" ng-controller="cntrl">
  <h1 align="center" class="page-header" id="head1">Search</h1>
  <div class="form-group">
    <!-- text box for searching-->
      <label for="txtFirstName">Search the file that you are looking for</label>
      <input type="text" id="filename" ng-model="filename" class="form-control" name="filename" />
      <br/>
      <!-- search button. search() method will be called when the button is clicked-->
      <input type="button" class="btn btn-success btn-block" value="Search" ng-click="search()"/>     
  </div>


  </div>

  <script>
    var app = angular.module('myApp', []);
    app.controller('cntrl', function ($scope, $http) {
      $scope.search = function () { //posting the string written in the field as the filename
      if($scope.filename != null){ //assure that the user has written something for search 
        $http.post("select_data_for_search.php", { 'filename': $scope.filename })
          .success(function (data) {
            alert(data);
            $scope.filename = null;
          });
          // window.location="tableIndex.php"; //Change the page if search is valid
      }
      else{//if the search field is empty
        alert('The search field is empty. Please write the name of the file that you are looking for.');
      }

      }

    });
  </script>
</body>

</html>