<?php
include'../../connect_db.php';
// session_start();
$category_id=$_GET['category_id'];
$sql = "SELECT * FROM categories WHERE cat_id= '$category_id'";
$category_id="";
if ($result!=false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $category_id=$row['cat_id'];
  }
  }
  else{
      header("location:all-categories.php");
      die();
  }
  if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['category_id'])){
     $category_id=$_POST['category_id'];
     $sql="DELETE FROM categories WHERE cat_id=$category_id;";
     if($conn->query($sql)===TRUE){
   // $message_ok="New record created successfully";
   header("location:all-categories.php");
    die();
  }
  else{
      $message_erro="Error:".$sql."<br>".$conn->error;
      header("location:categories-manage.php");
      die();
  }
   }
    }
  
  $conn->close();
?>
