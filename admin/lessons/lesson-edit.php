<?php 
include'../../connect_db.php';
session_start();
$lesson_id=$_GET['id'];
$sql = "SELECT * FROM lessons WHERE less_id= '$lesson_id'";
$result = $conn->query($sql);
$lesson_title="";
$lesson_desc="";
$lesson_image="";
if ($result!=false && $result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $lesson_title=$row['less_title'];
    $lesson_desc=$row['less_description'];
    $lesson_image='../../'.$row['less_image'];
}
}
else{
    header("location:all-lessons.php");
    die();
}


if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['lesson_title']) && isset($_POST['lesson_description'])){
    $lesson_title=$_POST['lesson_title'];
    $lesson_desc=$_POST['lesson_description'];
    if(file_exists($_FILES['lesson_image']['tmp_name']) && is_uploaded_file($_FILES['lesson_image']['tmp_name'])){
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile= '../../'.$imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['lesson_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="UPDATE `lessons` SET less_image= '$store_file' WHERE less_id=$lesson_id;";
        if($conn->query($sql)===TRUE){
    //    $message_ok="New record created successfully";
      header("location:all-lessons.php");
       die();
     }
     else{
       //  $message_erro="Error:".$sql."<br>".$conn->error;
         header("location:lesson-manage.php");
         die();
     }
    }
    $sql="UPDATE `lessons` SET less_title= '$lesson_title',less_description='$lesson_desc' WHERE less_id=$lesson_id;";
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
$conn->close();
 }
}
?>