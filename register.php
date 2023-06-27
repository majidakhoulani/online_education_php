<?php
include 'connect_db.php';
session_start();

// When form submitted, insert values into the database.
if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password']) && file_exists($_FILES['user_image']['tmp_name']) && is_uploaded_file($_FILES['user_image']['tmp_name'])) {
    // removes backslashes
    $username = stripslashes($_POST['user_name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $imagePath = 'storage/';
    $uniquesavename = time() . uniqid(rand());
    $destFile = $imagePath . $uniquesavename . '.jpg';
    $filename = $_FILES['user_image']['tmp_name'];
    [$width, $height] = getimagesize($filename);
    move_uploaded_file($filename, $destFile);
    $store_file = $imagePath . $uniquesavename . '.jpg';
    if ($username == '' || $password == '' || $email == '') {
        echo 'please enter all inputs';
        // $_SESSION['error'] = 'please fill all inputs';
        die();
    }

    $sql =
        "INSERT into `users` (user_name , user_email, user_password,user_image)
                     VALUES ('$username', '$email', '" .
        md5($password) .
        "','$store_file')";
    if ($conn->query($sql) === true) {
        echo 'New record created successfully';
        header('location:login.php');
        die();
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
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
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 150px 0px;border-radius: 0px 0px 150px 150px;">
  <nav class="navbar navbar-expand-lg fixed-top p-4">
   <div class="container">
    <a class="navbar-brand" href="#">
     <img src="images/logo.png" alt="" class="img-fluid" width="40px" height="40px">
     <!-- <i class="fa fa-chalkboard-teacher" style="color: #c2c7d0; font-size: 50px;"></i> -->
    </a>
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
      <li class="nav-item">
       <a class="nav-link text-white" href="about.html">About</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        Courses
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item home-p" href="#">Business</a></li>
        <li><a class="dropdown-item home-p" href="#">Design</a></li>
        <li>
         <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item home-p" href="#">Development</a></li>
       </ul>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white " href="#">Blog</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="#">Contact</a>
      </li>
     </ul>
     <form class="d-flex">
      <input class="form-control me-2 p-2" type="search" placeholder="What do you want to learn" aria-label="Search">
      <button class="btn btn-danger btn-lg rounded-3" type="submit">Search</button>
     </form>
    </div>
   </div>
  </nav>
  <section class="hero home-content  text-center">
   <h1 class="fs-2 fw-bolder text-white pb-3 ">Welcome you in our Website</h1>
  </section>
  <section class=" pb-5">
   <div class="container h-custom">
    <div class="row d-flex justify-content-center align-items-center">
     <div class="col-lg-12 col-xl-11">
      <div class=" card-register text-black"
       style="border-radius: 25px; border:2px solid #f36b80; background-color:#f8fefe;">
       <div class="text-body p-md-2">
        <div class="row justify-content-center">
         <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

          <p class="text-center h1 text-danger fw-bold mb-4 mx-1 mx-md-4 mt-4">Sign up</p>

          <form class="mx-1 mx-md-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data"
           onsubmit="return validation()">
           <div>
            <p class="mb-0">
             <?php
             if (isset($_GET['error'])) {
                 echo $_GET['error'];
             }
             ?>
            </p>
           </div>
           <div class="d-flex flex-row align-items-center mb-2 ">
            <i class="fas fa-user fa-lg me-3 fa-fw text-danger"></i>
            <div class="form-outline flex-fill mb-0">
             <input type="text" id="form3Example1c" class="form-control" name="user_name" id="user_name"
              required />
             <label class="form-label" for="form3Example1c">Your Name</label>
             <span id="name_error" class="text-danger font-weight-bold"></span>
            </div>
           </div>

           <div class="d-flex flex-row align-items-center mb-2">
            <i class="fas fa-envelope fa-lg me-3 fa-fw text-danger"></i>
            <div class="form-outline flex-fill mb-0">
             <input type="email" id="form3Example3c" class="form-control" name="email" id="user_email"
              required />
             <span id="email_error" class="text-danger font-weight-bold"></span>
             <label class="form-label" for="form3Example3c">Your Email</label>
            </div>
           </div>

           <div class="d-flex flex-row align-items-center mb-2">
            <i class="fas fa-lock fa-lg me-3 fa-fw text-danger "></i>
            <div class="form-outline flex-fill mb-0">
             <input type="password" id="form3Example4c" class="form-control" name="password" id="user_password"
              required />
             <span id="pass_error" class="text-danger font-weight-bold"></span>
             <label class="form-label" for="form3Example4c">Password</label>
            </div>
           </div>

           <div class="d-flex flex-row align-items-center mb-2">
            <i class="fas fa-key fa-lg me-3 fa-fw text-danger"></i>
            <div class="form-outline flex-fill mb-0">
             <input type="password" id="form3Example4cd" class="form-control" id="user_repassword" />
             <span id="repass_error" class="text-danger font-weight-bold"></span>
             <label class="form-label" for="form3Example4cd">Repeat your password</label>
            </div>
           </div>
           <div class="d-flex flex-row align-items-center mb-2">
            <i class="fas fa-image fa-lg me-3 fa-fw text-danger"></i>
            <div class="form-outline flex-fill mb-0">
             <input type="file" id="form3Example4cd" class="form-control" id="user_image"
              placeholder="Enter Your Image" name="user_image" />
             <span id="image_error" class="text-danger font-weight-bold"></span>
             <label class="form-label" for="form3Example4cd">Your Image</label>
            </div>
           </div>


           <div class="form-check d-flex justify-content-center mb-3">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
            <label class="form-check-label" for="form2Example3">
             Already have an account? <a href="login.php" class="home-h1">login here</a>
            </label>
           </div>

           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-2">
            <input type="submit" class="btn btn-danger rounded-pill btn-lg" value="Register" />
           </div>

          </form>

         </div>
         <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

          <img src="images/draw1.png" class="img-fluid" alt="Sample image">

         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
 </div>



 <footer class="background-two text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
   <!-- Section: Social media -->
   <section class="mb-4">
    <!-- Facebook -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-facebook-f"></i></a>

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-twitter"></i></a>

    <!-- Google -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-google"></i></a>

    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-instagram"></i></a>

    <!-- Linkedin -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-linkedin-in"></i></a>

    <!-- Github -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
      class="fab fa-github"></i></a>
   </section>
   <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   © 2023 Copyright:
   <a class="text-danger" href="https://mdbootstrap.com/">Majida-Bootstrap5</a>
  </div>
  <!-- Copyright -->
 </footer>


 <script>
  // javascript validation function

  function validation() {
   var name = document.getElementById('user_name').value;
   var email = document.getElementById('user_email').value;
   var pass = document.getElementById('user_password').value;
   var repass = document.getElementById('user_repassword').value;
   if (name == "") {
    document.getElementById('name_error').innerHTML = "** please enter your name";
    return false;

   }

   if (email == "") {
    document.getElementById('email_error').innerHTML = "** please enter your email";
    return false;

   }
   if (pass == "") {
    document.getElementById('pass_error').innerHTML = "** please  enter your password";
    return false;

   }
   if (repass == "") {
    document.getElementById('repass_error').innerHTML = "** please  enter your password again";
    return false;

   }
  }
  // javascript validation function
 </script>

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
