<?php
    session_start();
    require "topMenuWithoutLogin.php";
?>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="header.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<style>
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .btn-style{
        background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929);
      }

</style>
<main class="container">
    <!--it's very important to have email in case the user forgot his password
        we are not gonna make a restriction on how long the password is going to be,
    because the longer it is the safer the password-->
   <!-- <h1>Sign up</h1> -->
   <?php
   //if we got an error in the url then ryn some error messages
   //
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){//getting the url
            echo '<p class="alert alert-danger">Fill in all the fields!</p>';
        }
        else if($_GET['error'] == "invalidmailuid"){
            echo '<p class="alert alert-danger">You have invalid username and email!</p>';
        }
        else if($_GET['error'] == "invalidmail"){
            echo '<p class="alert alert-danger">You have invalid email!</p>';
        }
        else if($_GET['error'] == "invaliduid"){
            echo '<p class="alert alert-danger">You have invalid username!</p>';
        }
        else if($_GET['error'] == "passwordcheck"){
            echo '<p class="alert alert-danger">Your passwords does not match!</p>';
        }
        else if($_GET['error'] == "passwordlessthan8"){
            echo '<p class="alert alert-danger">Your password should be at least 8 characters!</p>';
        }
        else if($_GET['error'] == "passwordlackcapitalletter"){
            echo '<p class="alert alert-danger">Your password should contain a capital letter!</p>';
        }
        else if($_GET['error'] == "passwordlacklowercaseletter"){
            echo '<p class="alert alert-danger">Your password should contain a lowercase letter!</p>';
        }
        else if($_GET['error'] == "passwordlacknumber"){
            echo '<p class="alert alert-danger">Your password should contain both alpha and numeric characters</p>';
        }
        else if($_GET['error'] == "usertaken"){
            echo '<p class="alert alert-danger">This username is already taken. Try something else!</p>';
        }
        else if($_GET['error'] == "emailtaken"){
            echo '<p class="alert alert-warning">This email already exists. Try signing in!</p>';
        }

    }
    else{
        // if($_GET['signup'] == "success"){
        //     echo '<p class="alert alert-success">Signup was successful!</p>';
        // }
    }

   ?>
   <div class="container" >
    <div class="panel-group">              
    <div class="panel panel-prop">                     
    <div class="panel-body">
   <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username" class="form-control"><br>
        <input type="text" name="mail" placeholder="Email" class="form-control"><br>
        <input type="password" name="pwd" placeholder="Password" class="form-control"><br>
        <input type="password" name="pwd-repeat" placeholder="Confirm Password" class="form-control"><br>
        <button type="submit" name="signup-submit" class="btn btn-primary btn-block btn-style">Sign up</button> <br>    
        <p>Already have an account? <a href="signin.php" class="link">Sign in instead!</a></p> 
        <a href="reset-password.php" class="link">Forgot your password?</a>
        </div>
        <br> <br> <br> <br>            
        </div>    
        </div>
        </div>
        <!--In here we are gonna show a success message if they were able to reset their password-->
        <?php
            if(isset($_GET["newpwd"])){ //looking for reset in the url
                if($_GET["newpwd"] == "passworduodated"){ //if the email sending was successful, show the message
                    echo '<p class="alert alert-primary">Your password has been reset!</p>';
                }
            }
        ?>
        
   </form> 
</main>


<?php
    require "footer.php";
?>

