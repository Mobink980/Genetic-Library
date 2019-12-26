<?php
session_start();
?>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="This is an example of am meta description. This will often show up in search results.">
<meta name="viewport" content="width=device-width, initial-scale = 1">
<title></title>
</head>

<body>
    <header>
<br> <br>
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
                else{
                    echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username or Email" class="form-control"> <br>
                    <input type="password" name="pwd" placeholder="Password" class="form-control"> <br>
                    <button type="submit" name="login-submit" class= "btn btn-primary btn-block">
                    Sign in</button>
                </form>
                <p>No account? <a href="signup.php">Create one!</a></p> <br>
                <button type="submit" name="google-signup-submit" class="btn btn-primary btn-block">
                <img src="icons8-google-20.png" /> Sign in with Google</button> ';
                
                    }
                ?>


            </div>
        
    </header>
</body>
</html>