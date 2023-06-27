<?php
include 'connect_db.php';
session_start();
// When form submitted, check and create user session.
if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password'])) {
    // removes backslashes user_name
    $username = stripslashes($_POST['user_name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    if ($username == '' || $password == '' || $email == '') {
        echo 'please enter all inputs';
        // $_SESSION['error'] = 'please fill all inputs';
        die();
    }
    // Check user is exist in the database
    $sql =
        "SELECT * FROM `users` WHERE user_email='$email'
                     AND user_password='" .
        md5($password) .
        "'";
    // $result = mysqli_query($con, $query) or die(mysql_error());
    $result = $conn->query($sql);
    $res = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
 
    if ($result != false && $result->num_rows > 0) {
        if ($res['user_email'] == 'admin@onlineC.com') {
            header('location:admin/admin-dashboard.php');
        } else {
            $_SESSION['user_name'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:index.php');
        }
    } else {
        // $_SESSION['error']='pass and email error';
        header('location:login.php');
    }
  }
else {
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
    <button class="navbar-toggler  bg-danger" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
     aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
       <a class="nav-link active text-white" aria-current="page" href="index.html">Home</a>
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
       <a class="nav-link text-white " href="admin/admin-dashboard.html">Admin</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="contact.html">Contact</a>
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
   <p class="fs-5  fw-bold home-p text-white">50,000 Online Courses for you</p>
  </section>
  <section class="p-5 pb-5">
   <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
     <div class="col-md-9 col-lg-6 col-xl-5 ">
      <img src="images/draw2.webp" class="img-fluid" alt="Sample image">
     </div>
     <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
       <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
        <p class="lead fw-normal fw-bold mb-0 me-3" style="color:#dd4b39">Sign in with</p>
        <button type="button" class="btn btn-primary btn-floating mx-1">
         <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
         <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
         <i class="fab fa-linkedin-in"></i>
        </button>
       </div>

       <div class="divider d-flex align-items-center my-4">
        <p class="text-center fw-bold mx-3 mb-0 text-danger fw-bold">Or</p>
       </div>
       <p class="mb-0">
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        }
        ?>
       </p>
       <!-- Email input -->
       <div class="form-outline mb-4">
        <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your name"
         name="user_name" required />
        <label class="form-label fw-bold " for="form3Example3" style="color:#40f4f4;">User Name</label>
       </div>
       <div class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control form-control-lg"
         placeholder="Enter a valid email address" name="email" required />
        <label class="form-label fw-bold " for="form3Example3" style="color:#40f4f4;">Email address</label>
       </div>

       <!-- Password input -->
       <div class="form-outline mb-3">
        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password"
         name="password" required />
        <label class="form-label" for="form3Example4" style="color:#40f4f4;">Password</label>
       </div>

       <div class="d-flex justify-content-between align-items-center">
        <!-- Checkbox -->
        <div class="form-check mb-0">
         <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
         <label class="form-check-label fw-bold" for="form2Example3">
          Remember me
         </label>
        </div>
        <a href="#!" class="text-body fw-bold">Forgot password?</a>
       </div>

       <div class="text-center text-lg-start mt-4 pt-2">
        <button type="submit"class="btn btn-danger rounded-pill btn-lg"
         style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        <p class="small fw-bold mt-2 pt-1 mb-0 " style="color:#40f4f4;">Don't have an account? <a
          href="register.html" class="link-danger">Register</a></p>
       </div>
      </form>
     </div>
    </div>
   </div>
  </section>
 </div>
 <footer class="background-two text-center text-white">
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
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   © 2023 Copyright:
   <a class="text-danger" href="https://mdbootstrap.com/">Majida-Bootstrap5</a>
  </div>
 </footer>
 <!-- end footer -->

<!-- some libraries -->
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
