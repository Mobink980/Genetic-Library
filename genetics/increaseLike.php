<?php
include 'includes/dbh.inc.php';
$page_id = $_GET['pageid']; //get the page_id from the url
$sql = "SELECT * FROM search WHERE page_id= '$page_id'";
        
$result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){           
            while($row = mysqli_fetch_assoc($result)){
                echo "<h3>".$row['page_like']."</h3>";
                $number = $row['page_like'];
                $number = $number + 1;
                $_SESSION['likeNumber'] = $number; //defining the sessions
                $sql = "UPDATE search SET page_like=$number WHERE page_id='$page_id';";
                $result = mysqli_query($conn, $sql);
                header("Location: ".$row['page_url']."?likesuccess=$number");
            }

        }else{
            echo 'There are no results matching your search!';
        }