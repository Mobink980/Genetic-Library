<?php

require "includes/dbh.inc.php";

if(isset($_POST['submit-search'])){
    
    if($_POST['search'] == ""){
        echo"please enter something!";
        exit();
    }
    
    $search = mysqli_real_escape_string($conn, $_POST['search']);     

    //searching everything inside the article table against what the user typed in the search field.
    $sql = "SELECT * FROM search WHERE page_title LIKE '%$search%' OR key_words LIKE '%$search%';";

    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    echo "There are ".$queryResult." results!";
    if($queryResult > 0){           
        while($row = mysqli_fetch_assoc($result)){
            $tmp = $row['page_url'];
            $finaltemp = 'http://localhost/Genetic-Library/genetics/'.$tmp;
            echo"<h4>";
            echo "<a href='$finaltemp'>";
            echo $row['page_title'];
            echo"</a>";
            echo"</h4>";

        }

    }else{
        echo 'There are no results matching your search!';
    }

}else{
    header("Location index.php");
}



?>