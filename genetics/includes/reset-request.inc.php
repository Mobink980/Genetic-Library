<?php
/**In here we are gonna write the code that sends the email to the user. We are also gonna 
 * produce the token in here.
 */
if(isset($_POST["reset-request-submit"])){ //if the user entered this page correctly by clicking the button
    //a token needs to be cryptographically secure
    //we need a token to authenticate the user 
    //then we need a separate token to look inside the database to pinpoint the user when they get back to our website.
    //we could use the same token for both, but by two separate tokens, we avoid timing attacks, when the hackers 
    //brute force their way into the website
    
    //random_bytes Generates cryptographically secure pseudo-random bytes
    $selector = bin2hex(random_bytes(8)); //we convert theses bytes to hexadecimal format with bin2hex 
    
    //the token which authenticates the user to make sure it is the correct user
    $token = random_bytes(32); //this needs to be longer in order to be secure
    
    $url = "www.genetics.com/create-new-password.php?selector=" 
    .$selector. "&validator=" . bin2hex($token); //the url of the website, we can grab it using GET method

    //now we are gonna make an expiry date for the token
    $expires = date("U") + 1800; // one hour from now

    require 'dbh.inc.php';

    $userEmail = $_POST["email"]; //get the email fro the text box
    //if they didn't reset the password already and they try to send the email to themselves twice , without resetting 
    // the password, then we are going to have multiple tokens in our database and we don't want that. So we need
    //to make sure that there is no existing token from the same user inside the database

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";//we don't want to insert any data directly inside our sql statement

    //now we are gonna create a prepared statement
    $stmt = mysqli_stmt_init($conn);//Initializes a statement and returns an object for use with mysqli_stmt_prepare
    
    if(!mysqli_stmt_prepare($stmt, $sql)){ //if it failed to prepare an SQL statement for execution
        //then throw an sql error
        echo 'There was an error!';
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens

    }else{
        //we should always check the error before success
        // now that we know the sql statement was correct we want to run it in our database
        //mysqli_stmt_bind_param Binds variables to a prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $userEmail);  //the type of the $userEmail must be string
        mysqli_stmt_execute($stmt); //now we execute the prepared Query
    }

    //now we are going to insert the token inside the database
    $sql = "INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) 
    VALUES (?, ?, ?, ?);";
    //now we are gonna create a prepared statement
    $stmt = mysqli_stmt_init($conn);//Initializes a statement and returns an object for use with mysqli_stmt_prepare
    
    if(!mysqli_stmt_prepare($stmt, $sql)){ //if it failed to prepare an SQL statement for execution
        //then throw an sql error
        echo 'There was an error!';
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens

    }else{
        //Hashing the token so the hacker would not read it out loud 
        //we wanted to use $token here to hash it before putting in the database, thats why we 
        //did not convert it to hexadecimal
        $hashedToken = password_hash($token, PASSWORD_DEFAULT); 
        
        //mysqli_stmt_bind_param Binds variables to a prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);  //we got 4 string types
        mysqli_stmt_execute($stmt); //now we execute the prepared Query to have a new token inside the database
    }


    mysqli_stmt_close($stmt); //Closes the prepared statement $stmt
    mysqli_close($conn);//close the connection to save resources

    // Now we are gonna send the actual email
    $to = $userEmail; //the email that we want to send to 
    $subject = "Reset your password for Genetic Library"; //the subject of the message

     //inside $message, we need to use html
    $message = '<p> We received a password reset request. The link to reset your password is below. If you did not 
    make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Genetic-Library <genetics@gmail.com>\r\n";
    $headers .= "Reply-To: genetics@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers); //sending the email

    //redirect to the reset-password.php page and show a success message
    header("Location: ../reset-password.php?reset=success"); 

} else{ //if the user got to this page illegally, send them back to the front page
    header("Location: ../reset-password.php");
}