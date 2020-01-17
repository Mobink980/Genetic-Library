<?php

if(isset($_POST['contact-submit'])){ //making sure that the user came here in a right way
    /**Getting all the data from the contact form */
    
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

        //check if any field is empty
    if(empty($name) || empty($subject) || empty($mailFrom) || empty($message)){
        //go back to signup page with error message in the url; also keep the fields that
        //have no problems untouched
        header("Location: ../contact.php?error=emptyfields");
        //now we use the GET method to get the information from the url and put it back to the fields
        //we don't show the password in the url so they need to type the password everytime they make a mistake 
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }

    else if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){ //IF THE EMAIL WAS INVALID
        header("Location: ../contact.php?error=invalidmail&uid=".$name);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }
    else{
    $mailTo = "mobink980@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../contact.php?mailsent");
    }

} else{ //the user came here illegally, so we send them back to the right place!
    header("Location: ../contact.php");
}