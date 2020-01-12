<?php

/**Inside this, we only going to have php code to run when the user click the 
 * submit essay button and also do some error handling. we don't have html code after our php tag
 * so we don't need to close the tag.
 */
//we wanna make sure that the user got into this page by clicking this button not by typing the url
//so we will know that the user got here legitimately 
 if(isset($_POST['contribute-submit'])){

    require 'dbh.inc.php';//running the dbh.inc.php file

    //fetch the information from the form that the user signs up to our website
    $title = $_POST['title'];  //title of the article
    $essay = $_POST['essay']; //the contents of the article
    $author = $_POST['author']; //the name of the author
    $date = date("Y-m-d H:i:s"); //the local date and time
    $group = 'SI';
  


    //before we put this into our website we need to do a bunch of error handling
    //you can write so many error handlers. here are some basics

    //check if any field is empty
    if(empty($title) || empty($essay) || empty($author)){
        //go back to signup page with error message in the url; also keep the fields that
        //have no problems untouched
        header("Location: ../AIS.php?error=emptyfields&title=".$title."&essay=".$essay);
        //now we use the GET method to get the information from the url and put it back to the fields
        //we don't show the password in the url so they need to type the password everytime they make a mistake 
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    
    } else if(strlen($essay) < 100){ //in case the essay is too short
        header("Location: ../AIS.php?error=shortessay&title=".$title."&essay=".$essay);
        exit();//stop the code from running. we don't want any of the following code run when a mistake happens
    }


    else{ 
        //checking in cases that a title already exists.
        //no title should be the same for the search purposes
        $sql = "SELECT a_title FROM article WHERE a_title=?";
        
        //create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        //always check for errors first when you are writing a php code (rule of thumb)
        if(!mysqli_stmt_prepare($stmt, $sql)){ 
            header("Location: ../SI.php?error=sqlerror");
            exit();//stop the code from running. we don't want any of the following code run when a mistake happens
        }
        else{
            //if we had password as well we would write : mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_bind_param($stmt, "s", $title);
            mysqli_stmt_execute($stmt); //execute the data from the user together with the sql statement
            mysqli_stmt_store_result($stmt);//check for the match
            $resultCheck = mysqli_stmt_num_rows($stmt); //number of results we got from the database
            if($resultCheck > 0){ //if we have a matching for the username
                header("Location: ../SI.php?error=titletaken&essay=".$essay);
                exit();//stop the code from running. we don't want any of the following code run when a mistake happens 
            }

            else{//we don't just put the information of the user. it's not safe. so we use placeholders
                $sql = "INSERT INTO article (a_group, a_title, a_text, a_author, a_date) VALUES (?, ?, ?, ?, ?)";
                //create a prepared statement
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){ 
                    header("Location: ../SI.php?error=sqlerror");
                    exit();//stop the code from running. we don't want any of the following code run when a mistake happens
                }
                else{
                    //now we are going to hash the password so the hackers wont have access
                    //the people behind php will always update and upgrade this hashing method
                   
                    mysqli_stmt_bind_param($stmt, "sssss", $group, $title, $essay, $author, $date);
                    mysqli_stmt_execute($stmt); //execute the data from the user together with the sql statement
                    header("Location: ../SI.php?submit=success");
                    exit();//stop the code from running. we don't want any of the following code run when a mistake happens                       
                }
            }
        }
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
 }
 else{ //in case a user got access to this page without clicking we get them back to the signup page
    header("Location: ../SI.php");
    exit();//stop the code from running. we don't want any of the following code run when a mistake happens 
 }


