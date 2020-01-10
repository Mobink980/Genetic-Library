<?php
    require "header.php";
?>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<main class="container">
    <?php 
     //check if we have the session variable available to us inside the website
     //if it is not available we are logged out of the website
     //if it is available we are logged in
     //you can change all the content when you are logged in or not with if statement and session variable
     if(isset($_SESSION['userId'])){
        echo '<p class="login-status">You are logged in! </p>';
        echo 'Welcome back ', $_SESSION['userUid'] , '!';
     }
     else{
         echo '<p class="login-status">You are logged out!</p>';
     }
    ?>
    
    
</main>


<?php
    require "footer.php";
?>