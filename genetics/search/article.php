<?php 
    include 'header.php';
?>

<link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<main class="container">
<h1>Article page</h1>

<!--The following div tag will contain all the articles that we have in the database.-->
<div class="article_container">
<?php
    echo '<a href="../index.php" style="float: right;  margin-top:20px;" class="btn btn-warning">Back to the Website</a>';
    $title = mysqli_real_escape_string($conn, $_GET['title']);
    $date = mysqli_real_escape_string($conn, $_GET['date']);

    $sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result); //the number of results we got from the query

    if($queryResults > 0){
        //a while loop that keeps spitting out what is inside the database
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='article-box'>
            <h3>".$row['a_title']."</h3>
            <p>".$row['a_text']."</p>
            <p>".$row['a_date']."</p>
            <p>".$row['a_author']."</p>
            </div>";

        }
    }
?>

</main>
</div>
</body>
</html>