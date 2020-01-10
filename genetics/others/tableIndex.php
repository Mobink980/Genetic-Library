<?php 
    include_once 'table.php'; //having access to the table.php file
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
        .tableHead{
            color: white;
            background-color:rgb(50, 120, 200);
        }
        #fileTable{
            margin-top: 20px;
        }
        </style>
    </head>
    <body>
    <!--Creating a table with Bootstrap-->
    <table class="table table-striped table-bordered table-hover table-condensed" id="fileTable">
        <thead>
            <tr class="tableHead">
                <th>file_id</th>
                <th>user_id</th>
                <th>file_name</th>
                <th>file_address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mary</td>
                <td>Sanders</td>
                <td>mary.sanders@gmail.com</td>
                <td>$1500</td>
            </tr>
    
            <tr>
                <td>Richard</td>
                <td>Brook</td>
                <td>richard.brook@gmail.com</td>
                <td>$2000</td>
            </tr>    
        </tbody>

    </table>
        <?php 
            $sql = "SELECT * from files_of_clients;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){ //if the number of rows in the $result is more than 0 

                while($row = mysqli_fetch_assoc($result)){ //Keep spitting the data as long as we have results
                    echo $row['file_id'] ,"  ",$row['user_id'] ,"  ",$row['file_name'] ,
                    "  ", $row['file_address'],"<br>"; //We write the name of the column that we want to access
                }
            }
        ?>
    </body>
</html>