<?php
echo 'hello';
include 'connect_db.php';
session_start();
$user_query = 'SELECT * FROM users';
$user_result = $conn->query($user_query);
if ($user_result->num_rows > 0) {
    while ($user_row = $user_result->fetch_assoc()) {
        $user_id = $user_row['user_id'];
    }
}
$course_id = $_GET['course_id'];
$sql = "INSERT INTO `registration` (`course_id`,`user_id`,`role`) VALUES ('$course_id',' $user_id','Student')";
if ($conn->query($sql) === true) {
    // $message_ok="New record created successfully";
    header('location:users/profile.php');
    die();
} else {
    //    // $message_erro="Error:".$sql."<br>".$conn->error;
    echo '"Error:".$sql."<br>".$conn->error';
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Education Website</title>

 <link href="aos/aos.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
 <link rel="stylesheet" href="https://cdn.cryptofonts.com/1.4.0/cryptofont.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <?php
 
 ?>
 <div class="  " id="">
  <div class="modal-dialog">
   <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
     <h4 class="modal-title">Course Register</h4>
     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
     <div class="modal-content">
      <div class="title-modal">
       <h3 class="p-3 text-primary" style="font-size:16px"><?php echo htmlentities($user_row['user_name']); ?></h3>
       <hr>
       <p class="p-3 text-dark"><?php echo htmlentities($user_row['user_email']); ?></p>
       <p class="p-3 text-dark"><?php echo htmlentities($user_row['user_id']); ?></p>
      </div>
     </div>
     <div class="register-modal p-3">
      <form action="" method="get">
       <input type="hidden" name="user_id" value="<?php echo $user_row['user_id']; ?>">
       <input type="submit" value="Register" class="btn btn-primary btn-md">
      </form>
     </div>
    </div>
    <?php
    ?>
   </div>
  </div>

</body>

</html>
