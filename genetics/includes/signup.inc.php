<?php

/**Inside this, we only going to have php code to run when the user click the 
 * sign up button and also do some error handling. we don't have html code after our php tag
 * so we don't need to close the tag.
 */
//we wanna make sure that the user got into this page by clicking this button not by typing the url
//so we will know that the user got here legitimately 
 if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';//running the dbh.inc.php file

    //fetch the information from the form that the user signs up to our website
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // checking for password strength of the user
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    //before we put this into our website we need to do a bunch of error handling
    //you can write so many error handlers. here are some basics

    //check if any field is empty
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        //go back to signup page with error message in the url; also keep the fields that
        //have no problems untouched
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
        //now we use the GET method to get the information from the url and put it back to the fields
        //we don't show the password in the url so they need to type the password everytime they make a mistake 
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    //this should be the first for times that both username and email are invalid
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/i", $username)){
        header("Location: ../signup.php?error=invalidmailuid"); //no information needs replacing
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //IF THE EMAIL WAS INVALID
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }

    else if(!preg_match("/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/i", $username)){ //check if the username is invalid
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    
    else if($password !== $passwordRepeat){//if the passwords don't match each other
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    //if the password is less than 8 characters
    else if(less_than_eight($password)){
        header("Location: ../signup.php?error=passwordlessthan8&uid=".$username."&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    //if the pasword does not have a capital letter
    else if(!$uppercase){
        header("Location: ../signup.php?error=passwordlackcapitalletter&uid=".$username."&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    //if the password does not have a lowercase letter
    else if(!$lowercase){
        header("Location: ../signup.php?error=passwordlacklowercaseletter&uid=".$username."&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    //if the password does not have a number
    else if(!$number){
        header("Location: ../signup.php?error=passwordlacknumber&uid=".$username."&mail=".$email);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }

    else{ //if the username is already taken or email is already taken
        //go inside the database and check if any user matches the database
        //we need to use placeholders with question mark instead of just writing = $username
        //there are some really evil people out there who want to destroy our website and database
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        
        //create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        //always check for errors first when you are writing a php code (rule of thumb)
        if(!mysqli_stmt_prepare($stmt, $sql)){ 
            header("Location: ../signup.php?error=sqlerror");
            exit();//stop the code from running. we don't want any of the following code run when a mistake happens
        }
        else{
            //if we had password as well we would write : mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt); //execute the data from the user together with the sql statement
            mysqli_stmt_store_result($stmt);//check for the match
            $resultCheck = mysqli_stmt_num_rows($stmt); //number of results we got from the database
            if($resultCheck > 0){ //if we have a matching for the username
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();//stop the code from running. we don't want any of the following code run when a mistake happens 
            }

            //go inside the database and check if the email matches any record in the database
            $sql2 = "SELECT emailUsers FROM users WHERE emailUsers=?";
            $stmt2 = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
            
            if(!mysqli_stmt_prepare($stmt2, $sql2)){ //Prepare an SQL statement for execution
                header("Location: ../signup.php?error=sqlerror");
                exit();//stop the code from running. we don't want any of the following code run when a mistake happens
            }
            mysqli_stmt_bind_param($stmt2, "s", $email); //Binds variables to a prepared statement as parameters
            mysqli_stmt_execute($stmt2); //execute the data from the user together with the sql statement
            mysqli_stmt_store_result($stmt2);//Transfers a result set from a prepared statement
            $resultCheck2 = mysqli_stmt_num_rows($stmt2); //number of results we got from the database (email matches)
            if($resultCheck2 > 0){ //if we have a matching for the username
                header("Location: ../signup.php?error=emailtaken&mail=".$email);
                exit();//stop the code from running. we don't want any of the following code run when a mistake happens 
            }
            else{//we don't just put the information of the user. it's not safe. so we use placeholders
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                //create a prepared statement
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){ 
                    header("Location: ../signup.php?error=sqlerror");
                    exit();//stop the code from running. we don't want any of the following code run when a mistake happens
                }
                else{
                    //now we are going to hash the password so the hackers wont have access
                    //the people behind php will always update and upgrade this hashing method
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt); //execute the data from the user together with the sql statement
                    header("Location: ../index.php?signup=success");
                    exit();//stop the code from running. we don't want any of the following code run when a mistake happens                       
                }
            }
        }
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
 }
 else{ //in case a user got access to this page without clicking we get them back to the signup page
    header("Location: ../signup.php");
    exit();//stop the code from running. we don't want any of the following code run when a mistake happens 
 }


//If the password is less than 8 characters then return to the signup page
 function less_than_eight($pass){
    if(strlen($pass) < 8)
        return true;

    return false;
}

