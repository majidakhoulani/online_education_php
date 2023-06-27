<?php
// echo 'hello';
include'connect_db.php';
session_start();
$user_query = "SELECT * FROM users";
$user_result=$conn->query($user_query);
if($user_result->num_rows > 0){
  while( $user_row = $user_result->fetch_assoc())
 {
  $user_id=$user_row['user_id'];
 }
}
$post_id=$_GET['post_id'];
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(isset($_POST['comment_desc'])){
    $comment_desc=$_POST['comment_desc'];
    $sql="INSERT INTO `comments` (`comment_body`,`user_id`,`post_id`) VALUES ('$comment_desc','$user_id','$post_id')";
    if($conn->query($sql)===TRUE){
 //  // $message_ok="New record created successfully";
   header("location:post-details.php?post_id=$post_id");
   die();
  }
 else{
 //    // $message_erro="Error:".$sql."<br>".$conn->error;
   echo'"Error:".$sql."<br>".$conn->error';
 }
 $conn->close();
  }
}

?>
