<?php
        session_start();
        require "topMenuWithoutLogin.php";
?>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
      .panel-prop{
        padding: 0.5em;
        padding-top: 1.7em;
        background-image: linear-gradient(#78C381, #677B67);
      }
      .btn-style{
        background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929);
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
  </style>

<main class="container">
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){//getting the url
            echo '<p class="alert alert-danger">Fill in all the fields!</p>';
        }
        else if($_GET['error'] == "sqlerror"){
            echo '<p class="alert alert-danger">There was a problem! Please try later!</p>';
        }
        else if($_GET['error'] == "wrongpwd"){
            echo '<p class="alert alert-danger">Your password is incorrect. Please try again! 
            If you forgot your password <a href="reset-password.php">click here</a></p>';
        }
        else if($_GET['error'] == "nouser"){
            echo '<p class="alert alert-danger">There is no such user registered in the website! 
            If you dont have an account <a href="signup.php">create one.</a></p>';
        }

    }
    
     //check if we have the session variable available to us inside the website
     //if it is not available we are logged out of the website
     //if it is available we are logged in
     //you can change all the content when you are logged in or not with if statement and session variable
     if(isset($_SESSION['userId'])){ //If the session userId is set
        echo '<p class="alert alert-success">You are logged in! </p>';
        echo 'Welcome back ', $_SESSION['userUid'] , '!';
     }
     else{
         echo '<p class="alert alert-warning">You are logged out!</p>';
     }
    ?>
    
    <!--when you have sensitive data, you gotta use post method, because with get method you can see everything in the url-->
    <div class="container"> <!--send the user to a php file, run a script to determine if the user has the right to login-->
                <?php
                     //check if we have the session variable available to us inside the website
                    //if it is not available we are logged out of the website
                    //if it is available we are logged in
                    //you can change all the content when you are logged in or not with if statement and session variable
                if(isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit" class= "btn btn-primary">Sign out</button>
                    </form>';
                }
                else{ //If the user is not logged in
                    echo ' <div class="container" >
                    <div class="panel-group">              
                      <div class="panel panel-prop">                     
                        <div class="panel-body">
                          <form action="includes/login.inc.php" method="POST">
                              <input type="text" name="mailuid" placeholder="Username or Email" class="form-control" style="width: 95%; height: 3em; margin: auto;"> <br>
                              <input type="password" name="pwd" placeholder="Password" class="form-control" style="width: 95%; height: 3em; margin: auto;"> <br>
                              <button type="submit" name="login-submit" class= "btn btn-primary btn-block btn-width" style="background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929);width: 95%; height: 2.6em; margin: auto;">
                              Sign in</button>
                          </form>
                          <p class="btn-width">No account? <a href="signup.php" class="link">Create one!</a></p>  <br>
                          <button type="submit" name="google-signup-submit" class="btn btn-primary btn-block btn-width" style="background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929); width: 95%; height: 2.6em; margin: auto;">
                          <img src="icons8-google-20.png" /> Sign in with Google</button>
                        </div>
                        <br> <br> <br> <br>
                      </div>       
                    </div>
                  </div>';
                
                    }
                ?>


            </div>
</main>


<?php
    require "footer.php";
?>