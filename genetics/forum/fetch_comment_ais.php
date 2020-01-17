<style>
#btn-head{
    height:52px;
    color: white;
}
#btn-head button{
    float: right;
    color: black;
}

.panel-heading{
    background-image: linear-gradient(#78C381, #78C384);
}

</style>


<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=clients', 'root', '');//

$query = "
SELECT * FROM comments 
WHERE parent_comment_id = '0' and section = 'AIS' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading" id="btn-head">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i> <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
  <div class="panel-body">'.$row["comment"].'</div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM comments WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading" id="btn-head">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i> <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
    <div class="panel-body">'.$row["comment"].'</div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
