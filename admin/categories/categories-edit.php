<?php 
include'../../connect_db.php';
session_start();
$category_id=$_GET['id'];
$sql = "SELECT * FROM categories WHERE cat_id= '$category_id'";
$result = $conn->query($sql);
$category_title="";
$category_desc="";
$category_image="";
if ($result!=false && $result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $category_title=$row['cat_title'];
    $category_desc=$row['cat_description'];
    $category_image='../../'.$row['cat_img'];
}
}
else{
    header("location:all-categories.php");
    die();
}


if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['category_title']) && isset($_POST['category_description'])){
    $category_title=$_POST['category_title'];
    $category_desc=$_POST['category_description'];
    if(file_exists($_FILES['category_image']['tmp_name']) && is_uploaded_file($_FILES['category_image']['tmp_name'])){
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile= "../../".$imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['category_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="UPDATE `categories` SET cat_img= '$store_file' WHERE cat_id=$category_id;";
        if($conn->query($sql)===TRUE){
    //    $message_ok="New record created successfully";
      header("location:all-categories.php");
       die();
     }
     else{
       //  $message_erro="Error:".$sql."<br>".$conn->error;
         header("location:categories-manage.php");
         die();
     }
    }
    $sql="UPDATE `categories` SET cat_title= '$category_title',cat_description='$category_desc' WHERE cat_id=$category_id;";
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
$conn->close();
 }
}
?>