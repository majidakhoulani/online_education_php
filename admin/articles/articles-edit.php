<?php 
include'../../connect_db.php';
session_start();
$article_id=$_GET['id'];
$sql = "SELECT * FROM articles WHERE post_id= '$article_id'";
$result = $conn->query($sql);
$article_title="";
$article_desc="";
$article_image="";
if ($result!=false && $result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $article_title=$row['post_title'];
    $article_desc=$row['post_description'];
    $article_image='../../'.$row['post_image'];
}
}
else{
    header("location:all-articles.php");
    die();
}


if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['article_title']) && isset($_POST['article_description'])){
    $article_title=$_POST['article_title'];
    $article_desc=$_POST['article_description'];
    if(file_exists($_FILES['article_image']['tmp_name']) && is_uploaded_file($_FILES['article_image']['tmp_name'])){
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile= "../../".$imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['article_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="UPDATE `articles` SET post_image= '$store_file' WHERE post_id=$article_id;";
        if($conn->query($sql)===TRUE){
    //    $message_ok="New record created successfully";
      header("location:all-articles.php");
       die();
     }
     else{
       //  $message_erro="Error:".$sql."<br>".$conn->error;
         header("location:articles-manage.php");
         die();
     }
    }
    $sql="UPDATE `articles` SET 	post_title= '$article_title',post_description='$article_desc' WHERE post_id=$article_id;";
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
$conn->close();
 }
}
?>