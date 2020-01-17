<?php
session_start();
if(isset($_SESSION['userId'])){
   require "topMenuWithImage.php";

}else{
    require "topMenuWithLogin.php";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="../jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet" />
<link href="header.css" rel="stylesheet">
<script src="../jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="../jquery-ui-1.12.1.custom/jquery.js"></script>
<script src="../jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<style>
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .btn-style{
        background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929);
      }

</style>
    </head>
    <body>
        <main class="container">
            <h1>Contact us</h1>
            <hr>
            <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){//getting the url (if the fields are empty)
            echo '<p class="alert alert-danger">Fill in all the fields!</p>';
        }
        else if($_GET['error'] == "invalidmail"){ //If the email was invalid
            echo '<p class="alert alert-danger">You have invalid email!</p>';
        }

    }
            ?>
               <div class="container" >
                <div class="panel-group">              
                <div class="panel panel-prop">                     
                <div class="panel-body">
            <form action="includes/contactform.php" method="POST"> <br>
                <input type="text" name="name" placeholder="Full Name" class="form-control"> <br>
                <input type="text" name="mail" placeholder="Your Email" class="form-control"> <br>
                <input type="text" name="subject" placeholder="Subject" class="form-control"> <br>
                <textarea name="message" placeholder="Message" class="form-control"></textarea> <br>
                <button type="submit" name="contact-submit" class="btn btn-success btn-block">Send Mail</button>
            </form>
            </div>
        <br> <br> <br> <br>            
        </div>    
        </div>
        </div>
        </main>
    </body>
</html>

<?php
if(isset($_SESSION['userId'])){
    require "footerPrivilege.php";
 
 }else{
     require "footer.php";
 }
?>