<?php
include'connect_db.php';
session_start();
  $user_query ="SELECT * FROM users";
  $user_result=$conn->query($user_query);
  $user_name=$user_email=$user_image="";

if ($user_result->num_rows > 0) {
// output data of each row
while($user_row = $user_result->fetch_assoc()) {
  $user_id=$user_row['user_id'];
  $user_name=$user_row['user_name'];
  $user_email=$user_row['user_email'];
  $user_image=$user_row['user_image'];

}
}
$register_query = "SELECT c.course_id, course_name  FROM  registration  sc INNER JOIN courses c ON c.course_id = sc.course_id WHERE sc.user_id =   $user_id";
$reg_result=$conn->query($register_query);
if($reg_result->num_rows > 0){
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
 <!-- //navigation -->
 <div class="nav-sec mb-5"
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 50px 0px;border-radius: 0px 0px 150px 150px;">
  <nav class="navbar navbar-expand-lg fixed-top p-4">
   <div class="container">
    <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
     aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
       <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
 </div>
 <section id="benefits-section background-one" class="section benefits-section has-texture py-5">
  <div class="container text-center">
   <div class="row">
    <div class="col-md-4">
     <div class="card mb-4">
      <div class="card-body text-center">
       <img src="images/user2.png" alt="" class="rounded-circle img-fluid" style="width: 150px;">
       <h5 class="my-3 text-danger text-uppercase"><?php echo $user_name; ?></h5>
       <p class="text-muted mb-1">Full Stack Developer</p>
       <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
       <div class="d-flex justify-content-center mb-2">
        <button type="button" class="btn btn-primary">Follow</button>
        <button type="button" class="btn btn-outline-primary ms-1">Message</button>
       </div>
      </div>
     </div>
     <div class="card mb-4">
      <div class="card-body ">
       <ul class="list-group list-group-flush rounded-3">
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
         <i class="fas fa-globe fa-lg text-warning"></i>
         <p class="mb-0">https://onlineCourse.com</p>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
         <i class="fab fa-github fa-lg" style="color: #333333;"></i>
         <p class="mb-0">myGithub</p>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
         <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
         <p class="mb-0">@myAccount</p>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
         <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
         <p class="mb-0">myAccount</p>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
         <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
         <p class="mb-0">myAccount</p>
        </li>
       </ul>
      </div>
     </div>
    </div>
    <div class="col-md-8">
     <div class="card mb-4">
      <div class="card-body">
       <div class="row">
        <div class="col-sm-3">
         <p class="mb-0">Full Name</p>
        </div>
        <div class="col-sm-9">
         <p class="text-danger mb-0"><?php echo $user_name; ?></p>
        </div>
       </div>
       <hr>
       <div class="row">
        <div class="col-sm-3">
         <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-danger">
         <?php echo $user_email; ?>
        </div>
       </div>
       <hr>
       <div class="row">
        <div class="col-sm-3">
         <p class="mb-0">Phone</p>
        </div>
        <div class="col-sm-9">
         <p class="text-muted mb-0">(097) 234-5678</p>
        </div>
       </div>
       <hr>
       <div class="row">
        <div class="col-sm-3">
         <p class="mb-0">Mobile</p>
        </div>
        <div class="col-sm-9">
         <p class="text-muted mb-0">(098) 765-4321</p>
        </div>
       </div>
       <hr>
       <div class="row">
        <div class="col-sm-3">
         <p class="mb-0">Address</p>
        </div>
        <div class="col-sm-9">
         <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
        </div>
       </div>
      </div>
     </div>
     <div class="row">
      <div class="col-md-12">
       <div class="card mb-4">
        <div class="card-body">
         <p class="mb-2"><span class="text-primary font-italic me-1">My</span>Courses</p>
         <?php 
                      while( $reg_row = $reg_result->fetch_assoc()){
                       
                      ?>
         <p class="mb-1 p-1 text-danger fs-5" style="font-size: .77rem;"><?php echo htmlentities($reg_row['course_name']); ?></p>
         <div class="progress rounded" style="height: 5px;">
          <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
         <?php
                      }
                    }?>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <div class="footer"
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 50px 0px;border-radius: 150px 150px 0px 0px;">
 </div>
 <script src="aos/aos.js"></script>
 <!-- <script src="swiper/swiper-bundle.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <script src="particles.js-master/particles.min.js"></script>
 <script src="/particles.js-master/demo/js/app.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/number-rush.js"></script>
 <script src="js/script.js"></script>
</body>
</html>
