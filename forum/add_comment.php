<?php

session_start();
$comment_name = $_SESSION["userUid"];
$comment_user_id = $_SESSION["userId"];

$connect = new PDO('mysql:host=localhost;dbname=clients', 'root', '');

$error = '';
$comment_content = '';

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO comments 
 (parent_comment_id, comment, comment_sender_name, comment_sender_id) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :comment_sender_id)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_id' => $comment_user_id,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);//send data into ajax

?>