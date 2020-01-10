<?php
/**In this file we are gonna write the code that allow the user to change their password inside our website.
 */
?>


<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<main class="container">
    <div class="wrapper-main">
        <section class="section-default">
        <?php
        
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if(empty($selector) || empty($validator)){ //if they don't have these tokens inside the url
            echo "We could not validate your request";

        }else{ //in here we are gonna check if they are legit tokens
            //ctype_xdigit Checks for character(s) representing a hexadecimal digit
            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                ?>
                <!--We first check if the the user is correct, and if they are we are gonna correct the 
            database with their new password-->
                <!--The following form is hidden for the user, but still send the information for 
            reset-password.inc.php file inside our includes folder-->
                    <form action="includes/reset-password.inc.php" method="POST">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                        <input type="password" name="pwd" placeholder="Enter your new password">
                        <input type="password" name="pwd-repeat" placeholder="Confirm your new password">
                        <button type="submit" name="reset-password-submit">Reset Password</button>
                    </form>


                <?php
            }
        }
        ?>

        </section>

    </div>
</main>

