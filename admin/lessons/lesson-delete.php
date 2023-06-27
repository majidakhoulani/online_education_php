<?php
include'../../connect_db.php';
// session_start();
$lesson_id=$_GET['lesson_id'];
$sql = "SELECT * FROM lessons WHERE less_id= '$lesson_id'";
$lesson_id="";
if ($result!=false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $lesson_id=$row['less_id'];
  }
  }
  else{
      header("location:all-lessons.php");
      die();
  }
  if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['lesson_id'])){
     $lesson_id=$_POST['lesson_id'];
     $sql="DELETE FROM lessons WHERE less_id=$lesson_id;";
     if($conn->query($sql)===TRUE){
   // $message_ok="New record created successfully";
   header("location:all-lessons.php");
    die();
  }
  else{
      $message_erro="Error:".$sql."<br>".$conn->error;
      header("location:lesson-manage.php");
      die();
  }
   }
    }
  
  $conn->close();
?>
