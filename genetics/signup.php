

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<main class="container">
    <!--it's very important to have email in case the user forgot his password
        we are not gonna make a restriction on how long the password is going to be,
    because the longer it is the safer the password-->
   <h1>Sign up</h1>
   <?php
   //if we got an error in the url then ryn some error messages
   //
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){//getting the url
            echo '<p class="signuperror">Fill in all the fields!</p>';
        }
        else if($_GET['error'] == "invalidmailuid"){
            echo '<p class="signuperror">You have invalid username and email!</p>';
        }
        else if($_GET['error'] == "invalidmail"){
            echo '<p class="signuperror">You have invalid email!</p>';
        }
        else if($_GET['error'] == "invaliduid"){
            echo '<p class="signuperror">You have invalid username!</p>';
        }
        else if($_GET['error'] == "passwordcheck"){
            echo '<p class="signuperror">Your passwords does not match!</p>';
        }
        else if($_GET['error'] == "passwordlessthan8"){
            echo '<p class="signuperror">Your password should be at least 8 characters!</p>';
        }
        else if($_GET['error'] == "passwordlackcapitalletter"){
            echo '<p class="signuperror">Your password should contain a capital letter!</p>';
        }
        else if($_GET['error'] == "passwordlacklowercaseletter"){
            echo '<p class="signuperror">Your password should contain a lowercase letter!</p>';
        }
        else if($_GET['error'] == "passwordlacknumber"){
            echo '<p class="signuperror">Your password should contain both alpha and numeric characters</p>';
        }
        else if($_GET['error'] == "usertaken"){
            echo '<p class="signuperror">This username is already taken. Try something else!</p>';
        }


    }
    if(isset($_GET['success'])){ //we have success
        if($_GET['signup'] == "success"){
            echo '<p class="signuperror">Signup was successful!</p>';
        }

    }

   ?>
   <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username" class="form-control"><br>
        <input type="text" name="mail" placeholder="Email" class="form-control"><br>
        <input type="password" name="pwd" placeholder="Password" class="form-control"><br>
        <input type="password" name="pwd-repeat" placeholder="Confirm Password" class="form-control"><br>
        <button type="submit" name="signup-submit" class="btn btn-primary btn-block">Sign up</button> <br>    
        <p>Already have an account? <a href="index.php">Sign in instead!</a></p> 
        <!--In here we are gonna show a success message if they were able to reset their password-->
        <?php
            if(isset($_GET["newpwd"])){ //looking for reset in the url
                if($_GET["newpwd"] == "passworduodated"){ //if the email sending was successful, show the message
                    echo '<p class="signupsuccess">Your password has been reset!</p>';
                }
            }
        ?>
        <a href="reset-password.php">Forgot your password?</a>
   </form>
</main>

