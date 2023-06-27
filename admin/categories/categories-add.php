<?php 
include'../../connect_db.php';
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['category_name']) && isset($_POST['category_desc']) && file_exists($_FILES['category_image']['tmp_name']) && is_uploaded_file($_FILES['category_image']['tmp_name'])){
    $category_title=$_POST['category_name'];
    $category_desc=$_POST['category_desc'];
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile="../../". $imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['category_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="INSERT INTO `categories` (`cat_title`,`cat_description`,`cat_img`) VALUES ('$category_title','$category_desc','$store_file')";
   if($conn->query($sql)===TRUE){
 // $message_ok="New record created successfully";
   header("location:all-categories.php");
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

