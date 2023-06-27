<?php
include'../../connect_db.php';
// session_start();
$course_id=$_GET['course_id'];
$sql = "SELECT * FROM courses WHERE course_id= '$course_id'";
$course_id="";
if ($result!=false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $course_id=$row['course_id'];
  }
  }
  else{
      header("location:all-courses.php");
      die();
  }
  if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['course_id'])){
     $course_id=$_POST['course_id'];
     $sql="DELETE FROM courses WHERE course_id=$course_id;";
     if($conn->query($sql)===TRUE){
   // $message_ok="New record created successfully";
   header("location:all-courses.php");
    die();
  }
  else{
      $message_erro="Error:".$sql."<br>".$conn->error;
      header("location:courses-manage.php");
      die();
  }
   }
    }
  
  $conn->close();
?>
