<?php

session_start();
// $comment_name = $_SESSION["userUid"];
// $comment_user_id = $_SESSION["userId"];
$section = 'EC';
$comment_name = 'Mahdi';
$comment_user_id =  '3';

$connect = new PDO('mysql:host=localhost;dbname=clients', 'root', '');

$error = '';
$comment_content = '';

if(empty($_POST["comment_content"])) //if the comment field is empty, then show some error message
{
 $error .= '<p class="text-danger">Comment field is empty</p>';
}
else //otherwise, save the variable received by the post method in variable $comment_content 
{
 $comment_content = $_POST["comment_content"];
}

if($error == '') //if there were no errors then execute the following query
{
 $query = "
 INSERT INTO comments 
 (parent_comment_id, section, comment, comment_sender_name, comment_sender_id) 
 VALUES (:parent_comment_id, :section, :comment, :comment_sender_name, :comment_sender_id)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':section'    => $section,
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

//json_encode Returns the JSON representation of a value
echo json_encode($data);//send data into ajax

?>