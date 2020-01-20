<?php 
    include 'header.php'; //getting the database connection and the link to the style sheet
?>
<link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<main class="container">
<h1>Search Page</h1>

<div class='article_container'>
<?php
    if(isset($_POST['submit-search'])){
        echo '<a href="../index.php" style="float: right;  margin-top:20px;" class="btn btn-warning">Back to the Website</a>';
        $search = mysqli_real_escape_string($conn, $_POST['search']);       
        //searching everything inside the article table against what the user typed in the search field.
        $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' 
        OR a_date LIKE '%$search%'"; 

        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!";
        if($queryResult > 0){           
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                <h3>".$row['a_title']."</h3>
                <p>".$row['a_text']."</p>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
                </div></a>";
            }

        }else{
            echo 'There are no results matching your search!';
        }

    }else{
        header("Location index.php");
    }
?>
</main>
</div>