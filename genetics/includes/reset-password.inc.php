<?php

if(isset($_POST["reset-password-submit"])){//check if the user got to this page in a valid way
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];


    //Now we are gonna check for a couple of error handlers
    if(empty($password) || empty($passwordRepeat)){ //if they did not write anything for passwords
        header("Location: ../create-new-password.php?newpwd=empty");
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }else if($password != $passwordRepeat){// if passwords do not match each other
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }

    //check if the token is expired or not
    $currentDate = date("U");

    require 'dbh.inc.php';
    //now we are gonna select the token  from our database
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'There was an error.';
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $selector, $validator);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "You need to resubmit your reset request.";
            exit();

        }else{ //if we do get things from the database we need to do something with that data
            //now we first gonna convert our validator token from hexadecimal to binary
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck === false){
                echo "You need to resubmit your reset request.";
                exit();
            
            }else if($tokenCheck === true){ //assuring that the tokenCheck is true
                //we need to make changes to the users table which has the password that 
                //the user can't remember now
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE emailUsers=?;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo 'There was an error.';
                    exit();
                
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                        echo "There was an error.";
                        exit();

                    }else{
                        //update the password inside the users table
                        $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?;";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo 'There was an error.';
                        exit();
                        }else{
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            //delete any sort of token belong to that user in pwdReset table
                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                echo 'There was an error.';
                                exit();
                            
                            }else{
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../signup.php?newpwd=passwordupdated");
                            }






                        }
                    }
                }




            }
        }
    }

} else{ //if the user got to this page illegally, send them back to the front page
    header("Location: ../signin.php");
}