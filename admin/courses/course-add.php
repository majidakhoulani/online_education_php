<?php 
include'../../connect_db.php';
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['course_name']) && isset($_POST['course_desc']) &&($_POST['category_id']) &&file_exists($_FILES['course_image']['tmp_name']) && is_uploaded_file($_FILES['course_image']['tmp_name'])){
    $course_title=$_POST['course_name'];
    $course_desc=$_POST['course_desc'];
    $category_id=$_POST['category_id'];
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile="../../". $imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['course_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        //$category_id="SELECT cat_id FROM categories";
        $sql="INSERT INTO `courses` (`course_name`,`course_description`,`course_image`,`cat_id`) VALUES ('$course_title','$course_desc','$store_file','$category_id')";
   if($conn->query($sql)===TRUE){
 // $message_ok="New record created successfully";
   header("location:all-courses.php");
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

