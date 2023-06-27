<?php 
include'../../connect_db.php';
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['article_name']) && isset($_POST['article_desc']) &&  isset($_POST['article_auth']) && isset($_POST['article_date']) && file_exists($_FILES['article_image']['tmp_name']) && is_uploaded_file($_FILES['article_image']['tmp_name'])){
    $article_title=$_POST['article_name'];
    $article_desc=$_POST['article_desc'];
    $article_auth=$_POST['article_auth'];
    $article_date=$_POST['article_date'];
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile="../../". $imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['article_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="INSERT INTO `articles` (`post_title`,`post_description`,`post_auth`,`post_created_at`,`post_image`) VALUES ('$article_title',' $article_desc','$article_auth','$article_date','$store_file')";
   if($conn->query($sql)===TRUE){
 // $message_ok="New record created successfully";
   header("location:all-articles.php");
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

