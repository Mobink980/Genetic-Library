<?php 
session_start();
include_once 'includes/dbh.inc.php';
$id = $_SESSION['userId'];
/**This file takes files from our form in the first.php and uploads it to the upload folder in the 
 * right destination.
 * In here we upload files and update the status in the profileimg table in the database
*/

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Generating the file name
if(isset($_POST['profile-img-submit'])){ //if the button with the name submit with post method is clicked
    $file = $_FILES['file']; //getting all the information from the file (we named the file as 'file')

    $fileName = $_FILES['file']['name']; //getting the name of the file 

    //getting the temporary location of the file which is very important when we want to upload the file
    $fileTmpName = $_FILES['file']['tmp_name']; 
    $fileSize = $_FILES['file']['size']; //getting the size of the file 
    $fileError = $_FILES['file']['error']; //getting the error message of the file 
    $fileType = $_FILES['file']['type']; //getting the type of the file 


    if($fileSize == 0){ //warn the user if he or she did not choose any file
        echo 'Please upload a file. You have not choose any file.';
        exit(); //terminate the current script
    }
    //(explode splits the fileName via . punctuation)
    $fileExt = explode('.', $fileName); //an array containing both the name of the file and its extension

    //end() function is a php method getting the last piece of data from an array
    $fileActualExt = strtolower(end($fileExt)); //getting the last element of the array which is the extension


    //Now we wanna tell people which kind of type files they allow to upload into our website
    $allowed = array('jpg', 'jpeg', 'png');

    //first argument: the variable we have to check for (the extension of the file)
    //second argument: the array that we want to check if the string is inside
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){ //if we had no error uploading this file
            if($fileSize < 2000000){ //if the size of the file is less than 2 Mega bytes

                //a unique number so the new files would not replace the old files
                // . is used for concatenation of several strings into one
                $fileNameNew = "profile".$id.".".$fileActualExt; 
                $fileDestination = 'uploads/'.$fileNameNew; //the destination that we wanna upload the file

                /**Now we need to move the file from temporary location to the actual location.
                 * move_uploaded_file function moves an uploaded file to a new location
                */
                //first argument: The filename of the uploaded file
                //second argument: The destination of the moved file.
                move_uploaded_file($fileTmpName, $fileDestination); 
                $sql = "UPDATE profileimg SET status=0 WHERE idUsers='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: index.php?uploadsuccess");

            }else{ //if the size of the file exceeds the limit
                echo "Your file is too big!!";
                exit(); //terminate the current script
            }
        } else{ //if an error occurred while uploading the file
            echo "There was an error uploading your file.";
            exit(); //terminate the current script
        }
    }else{ //if the extension isn't right
        echo "You cannot upload files of this type!";
        exit(); //terminate the current script
    }
}