<?php 
    include 'header.php';
?>
<!--search.php is the search file that we are going to load up with all the search results.
we need to make sure that no article in the database has the same title or the same date.-->
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>

<h1>Front page</h1>
<h2>All articles</h2>

<!--The following div tag will contain all the articles that we have in the database.-->
<div class="article_container">
<?php
    $sql = "SELECT * FROM article";
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
</div>
</body>
</html>