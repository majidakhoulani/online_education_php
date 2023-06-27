<?php 
include'../../connect_db.php';
session_start();
$course_id=$_GET['id'];
// $category_id=$_GET['cat_id']; and cat_id= '$category_id'
$sql = "SELECT * FROM courses WHERE course_id= '$course_id';";
$result = $conn->query($sql);
$course_title="";
$course_desc="";
$course_image="";
if ($result!=false && $result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $course_title=$row['course_name'];
    $course_desc=$row['course_description'];
    $course_image='../../'.$row['course_image'];
}
}
else{
    header("location:all-courses.php");
    die();
}


if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['course_title']) && isset($_POST['course_description'])){
    $course_title=$_POST['course_title'];
    $course_desc=$_POST['course_description'];
    if(file_exists($_FILES['course_image']['tmp_name']) && is_uploaded_file($_FILES['course_image']['tmp_name'])){
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile= '../../'.$imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['course_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="UPDATE `courses` SET course_image= '$store_file' WHERE course_id=$course_id;";
        if($conn->query($sql)===TRUE){
    //    $message_ok="New record created successfully";
      header("location:all-courses.php");
       die();
     }
     else{
       //  $message_erro="Error:".$sql."<br>".$conn->error;
         header("location:courses-manage.php");
         die();
     }
    }
    $sql="UPDATE `courses` SET course_name= '$course_title',course_description='$course_desc' WHERE course_id=$course_id;";
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
$conn->close();
 }
}
?>