<?php 
include'../connect_db.php';
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
    $category_image='../'.$row['cat_img'];
}
}
else{
    header("location:all_categories.php");
    die();
}


if($_SERVER['REQUEST_METHOD']==='POST'){
   if(isset($_POST['category_title']) && isset($_POST['category_description'])){
    $category_title=$_POST['category_title'];
    $category_desc=$_POST['category_description'];
    if(file_exists($_FILES['category_image']['tmp_name']) && is_uploaded_file($_FILES['category_image']['tmp_name'])){
        $imagePath='storage/';
        $uniquesavename=time().uniqid(rand());
        $destFile= "../".$imagePath. $uniquesavename.'.jpg';
        $filename=$_FILES['category_image']['tmp_name'];
        list($width,$height)=getimagesize($filename);
        move_uploaded_file($filename,$destFile);
        $store_file=$imagePath. $uniquesavename.'.jpg';
        $sql="UPDATE `categories` SET cat_img= '$store_file' WHERE cat_id=$category_id;";
        if($conn->query($sql)===TRUE){
    //    $message_ok="New record created successfully";
      header("location:all_categories.php");
       die();
     }
     else{
       //  $message_erro="Error:".$sql."<br>".$conn->error;
         header("location:edit_category.php");
         die();
     }
    }
    $sql="UPDATE `categories` SET cat_title= '$category_title',cat_description='$category_desc' WHERE cat_id=$category_id;";
   if($conn->query($sql)===TRUE){
 // $message_ok="New record created successfully";
 header("location:all_categories.php");
  die();
}
else{
    $message_erro="Error:".$sql."<br>".$conn->error;
    header("location:edit_category.php");
    die();
}
$conn->close();
 }
}
//for securite, we using method called htmlentities
//echo (htmlentities("Hello   " .$name));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Objects</title>
    <style>
        form>input {
            margin-bottom: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <h1>Edit Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Title</label>
        <input type="text" name="category_title" value="<?php echo(htmlentities($category_title))?>"><br>
        <label for="">Description</label>
        <input type="text" name="category_description"  value="<?php echo(htmlentities($category_desc))?>"><br>
        <label for="">Image</label>
        <img src="<?php echo(htmlentities($category_image))?>" height="200px" width="200px"/>
        <input type="file" name="category_image" accept="image/*"><br>
        <input type="submit" value="update"><br>
    </form>
</body>

</html>
