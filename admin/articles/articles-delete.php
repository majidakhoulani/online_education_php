<?php
include'../../connect_db.php';
// session_start();
$article_id=$_GET['article_id'];
$sql = "SELECT * FROM articles WHERE post_id= '$article_id'";
$article_id="";
if ($result!=false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $article_id=$row['post_id'];
  }
  }
  else{
      header("location:all-articles.php");
      die();
  }
  if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['article_id'])){
     $article_id=$_POST['article_id'];
     $sql="DELETE FROM articles WHERE post_id=$article_id;";
     if($conn->query($sql)===TRUE){
   // $message_ok="New record created successfully";
   header("location:all-articles.php");
    die();
  }
  else{
      $message_erro="Error:".$sql."<br>".$conn->error;
      header("location:articles-manage.php");
      die();
  }
   }
    }
  
  $conn->close();
?>
