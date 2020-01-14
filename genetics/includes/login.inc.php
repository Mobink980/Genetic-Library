<?php

if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';
//we want to allow the users to login with either their username or email
    $mailuid = $_POST['mailuid'];//get what is posted with the name 'mailuid' and save it in the $mailuid variable
    $password = $_POST['pwd'];

    //now we are gonna check if any of these fields were left empty
    if(empty($mailuid) || empty($password)){
        header("Location: ../signin.php?error=emptyfields");
        exit();
    }
    //now we are gonna look if there is anyone with this username or password
    else{ //we need to use placeholders in order to have a secure system
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;"; //allow username or email to login
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signin.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);//get he result from the statement
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false){
                    header("Location: ../signin.php?error=wrongpwd");
                    exit();                    
                }
                else if($pwdCheck == true){
                    session_start(); //in order to make the session variable visible we need to start a session
                    //we need session variables to check in order to see if the users logged in or not
                    //to do this we need to assure a session is started in all the pages of the website
                    $_SESSION['userId'] = $row['idUsers']; //defining the sessions
                    $_SESSION['userUid'] = $row['uidUsers'];
                    header("Location: ../indexprivilege.php");
                    exit(); 
                }
            }
            else{ //if there were no results from the database
                header("Location: ../signin.php?error=nouser");
                exit();               
            }
        }
    }
}
else{ //in case a user got access to this page without clicking we get them back to the login page
    header("Location: ../signin.php");
    exit();//stop the code from running. we don't want any of the following code run when a mistake happens     
}