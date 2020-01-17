<?php
session_start();
if(isset($_SESSION['userId'])){
   require "topMenuWithImage.php";

}else{
    require "topMenuWithLogin.php";
}
/**A token is a one time password that we create for a short period of time and we use that to authenticate 
 * that it was the user who wants to see the password. We are going to create a new table in the database 
 * that has these tokens in it. and when someone clicks on I forgot my password button, we are gonna 
 * create a row , that simply has the information about who is trying to reset the password and we are gonna 
 * use that to authenticate the user when they are actually trying to reset the password.
 * We need to set up a mail server in order to send the emails. We can use gmail for that purpose.
 * It is possible to create a local mail server
 * You don't wanna have more than one token per user and also you don't want a token to stay for too long
 */
?>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<main class="container">
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Reset your password</h1>
            <p>An email will be send to you with instructions on how to reset your password.</p>
            <form action="includes/reset-request.inc.php" method="POST">
                <input type="text" name="email" placeholder="Enter your email address" 
                class="form-control"> <!--place to write the email-->
                <br>
                <!--We don't want the user to access the script files by the url, that's why we use the name in button-->
                <button type="submit" name="reset-request-submit" 
                class="btn btn-primary btn-block">Receive new password by email</button>
            </form>
            <?php 
                if(isset($_GET["reset"])){ //looking for reset in the url
                    if($_GET["reset"] == "success"){ //if the email sending was successful, show the message
                        echo '<p class="signupsuccess">Check your email</p>';
                    }
                }
            ?>
        </section>

    </div>
</main>

<?php
if(isset($_SESSION['userId'])){
    require "footerPrivilege.php";
 
 }else{
     require "footer.php";
 }
?>