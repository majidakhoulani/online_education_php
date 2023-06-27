<?php
include'connect_db.php';
session_start();
// if(isset( $_SESSION['password']) && isset(( $_SESSION['email']))){
//   $password=$_SESSION["password"];
//   $email=$_SESSION["email"];
  $user_query ="SELECT * FROM users";
  $user_result=$conn->query($user_query);
  $user_name=$user_email=$user_image="";

if ($user_result->num_rows > 0) {
while($user_row = $user_result->fetch_assoc()) {
  $user_id=$user_row['user_id'];
  $user_name=$user_row['user_name'];
  $user_email=$user_row['user_email'];
  $user_image=$user_row['user_image'];

}
echo   $user_name ;
echo   $user_image ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="blog-img">
  this is image

                          <!-- images/blog-img.jpg -->
                            <img class="img-fluid" src="<?php echo($user_image)?>" alt="" width="400" height="400"/>
                       
              
   </div>
</body>
</html>