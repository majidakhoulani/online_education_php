<?php 
include'../../connect_db.php';
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['lesson_name']) && isset($_POST['lesson_desc']) &&($_POST['course_id']) &&file_exists($_FILES['lesson_image']['tmp_name']) && is_uploaded_file($_FILES['lesson_image']['tmp_name'])){
    $lesson_title=$_POST['lesson_name'];
    $lesson_desc=$_POST['lesson_desc'];
    $course_id=$_POST['course_id'];
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile="../../". $imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['lesson_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        //$category_id="SELECT cat_id FROM categories";
        $sql="INSERT INTO `lessons` (`less_title`,`less_description`,`less_image`,`course_id`) VALUES ('$lesson_title','$lesson_desc','$store_file','$course_id')";
   if($conn->query($sql)===TRUE){
 // $message_ok="New record created successfully";
   header("location:all-lessons.php");
  die();
}
else{
   // $message_erro="Error:".$sql."<br>".$conn->error;
   echo'"Error:".$sql."<br>".$conn->error';
}
$conn->close();
 }
}
?>

