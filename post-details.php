<?php
include 'connect_db.php';
session_start();
$post_id = $_GET['post_id'];
// $post_query = "SELECT * FROM articles WHERE post_id= '$post_id'";
// $result = $conn->query($post_query);
// add comment
$user_query = 'SELECT * FROM users';
$user_result = $conn->query($user_query);
if ($user_result->num_rows > 0) {
    while ($user_row = $user_result->fetch_assoc()) {
        $user_id = $user_row['user_id'];
    }
}
// $post_query = "SELECT a.post_id, post_title  FROM  comments  cc INNER JOIN articles a ON a.post_id = cc.post_id WHERE cc.user_id =   $user_id";
$post_query = "SELECT * FROM articles WHERE post_id= '$post_id'";
$result = $conn->query($post_query);
$comments_query = "SELECT * FROM comments WHERE post_id= '$post_id'";
$comment_result = $conn->query($comments_query);
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
  <div class="hero home-content  text-center pt-3">
   <h1 class="fs-2 fw-bolder text-white pb-3 "  data-aos-easing="linear"  data-aos-duration="1200">LEARN <span id="element"></span></h1>
   <p class="fs-5  fw-bold  text-white" data-aos="zoom-in"  data-aos-easing="linear"  data-aos-duration="3000">50,000 Online Courses for you</p>
  </div>
  <!-- end navigation -->
<!-- start hero section-->
  <div class="p-5 pb-5">
   <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100" data-aos="fade-up"  data-aos-easing="linear"  data-aos-duration="1000">
     <div class="col-md-6 ">
      <img src="images/draw2.webp" class="img-fluid" alt="Sample image">
     </div>
     <div class="col-md-5 offset-md-1 ">
      <form action="" method="post">
       <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
        <p class="lead fw-normal fw-bold mb-0 me-3 text-danger">Contact us with</p>
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
        <p class="text-center fw-bold mx-3 mb-0 text-danger">Or</p>
       </div>

       <!-- Email input -->
       <div class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control form-control-lg"
         placeholder="Enter a valid email address" name="email" />
        <label class="form-label fw-bold home-h1" for="form3Example3">Email address</label>
       </div>

       <!-- Password input -->
       <div class="form-outline mb-3">
        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password"
         name="password" />
        <label class="form-label fw-bold home-h1" for="form3Example4">Password</label>
       </div>
       <div class="form-outline mb-4">
        <textarea name="message" class="form-control  form-control-lg" id="message" cols="30" rows="4"
         placeholder="Message"></textarea>
        <label class="form-label fw-bold home-h1" for="form2Example3">
         Message
      </label>
       </div>
       <div class="text-center text-lg-start mt-4 pt-2"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1000">
        <button type="submit" class="btn btn-danger btn-lg rounded-pill"
         style="padding-left: 2.5rem; padding-right: 2.5rem;">Send Message</button>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
  <!-- end hero section-->
 </div>
  <!-- start statistics -->
  <section class="statistics pb-4 pt-4" style="margin-top:-175px">
  <div class="container">
   <div class="row d-flex  align-items-center">
    <div class="col-md-4 p-4" data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="500">
     <div class="d-flex flex-row p-4 lh-2 w-100 bg-white "
      style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); border-radius: 25px;">
      <div class="w-25 pt-2 text-center">
       <i class="fa fa-chalkboard-teacher" style="color: #255ab6; font-size: 50px;"></i>
      </div>
      <div class="w-75 statistics-content px-3">
       <h3 class="fs-4 fw-bolder home-h1">Our Students</h3>
       <div class="d-flex flex-row home-p">
        <p class="fs-3  fw-bold  " id="numberOne">0</p>
        <p class="fs-3  fw-bold ">+</p>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 p-4"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="900">
     <div class="d-flex flex-row p-4 lh-2 w-100 bg-white "
      style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); border-radius: 25px;">
      <div class="w-25 pt-2 text-center">
       <i class="fa fa-book-open" style="color: #255ab6; font-size: 50px;"></i>
      </div>
      <div class="w-75 statistics-content px-3">
       <h3 class="fs-4 fw-bolder home-h1">Our Courses</h3>
       <div class="d-flex flex-row home-p">
        <p class="fs-3  fw-bold  " id="numberTwo">0</p>
        <p class="fs-3  fw-bold ">+</p>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 p-4"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1500">
     <div class="d-flex flex-row p-4 lh-2 w-100 bg-white"
      style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15); border-radius: 25px;">
      <div class="w-25 pt-2 text-center">
       <i class="fa fa-user-graduate" style="color: #255ab6; font-size: 50px;"></i>
      </div>
      <div class="w-75 statistics-content px-3">
       <h3 class="fs-4 fw-bolder home-h1">Our Instructor</h3>
       <div class="d-flex flex-row home-p">
        <p class="fs-3  fw-bold  " id="numberThree">0</p>
        <p class="fs-3  fw-bold ">+</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
  <!-- end statistics -->
 <section class="p-5 pb-5">
  <div class="container">
   <div class="row">
    <?php
              if($result->num_rows > 0){
                $row = $result->fetch_assoc()
              ?>
    <div class="col-md-8">
     <div class="card">
      <img src="<?php echo htmlentities($row['post_image']); ?>" class="img-fluid" alt="Sample image">
      <div class=" p-3" style="background-color: transparent; height: 20.5rem;">
       <h1 class="card-text fs-1 fw-bolder text-danger pt-3"><?php echo htmlentities($row['post_title']); ?> </h1>
       <p class="pl-3 py-3 fw-bold  fs-6"><?php echo htmlentities($row['post_description']); ?></p>
      </div>
     </div>
    </div>
    <!-- image here -->
    <?php
                }
              
                ?>
    <div class="col-md-3 offset-1">
     <div class="form-floating  mt-1 mb-4 search">
      <input text="text" class="form-control search-input" placeholder="Search about courses"
       id="floatingTextarea"></input>
      <label for="floatingTextarea">Search</label>
     </div>
     <div class="form-floating filter-category">
      <select class="form-select  filter-category-options" id="floatingSelect" aria-label="Floating label select">
       <option selected></option>
       <option value="1">Business</option>
       <option value="2">Design</option>
       <option value="3">Development</option>
       <option value="3">Mobile</option>
      </select>
      <label for="floatingSelect">Categories</label>
     </div>
    </div>
   </div>
  </div>
 </section>
 <section id="benefits2-section background-one" class="section benefits-section has-texture py-5">
  <div class="container">
  <div class="content">
      <h3 class="subtitle text-danger fw-bold fs-4">The Latest Comments</h3>
     </div>
   <h2 class="title pt-4 mb-2 text-danger text-left pb-5"></h2>
   <div class="row">
    <!-- add php  -->
    <?php
    if($comment_result->num_rows > 0){
      while($comment_row =$comment_result->fetch_assoc()) {
    ?>
     <div class="col-md-8">
     <div class="card mb-4 bg-light">
      <div class="card-body">
       <div class="blog-content">
        <div class="title-blog">
         <p class="card-text fs-5 fw-bolder ">
         <i class="fa fa-quote-left fs-6 text-danger p-2"></i>
          <?php echo htmlentities($comment_row['comment_body']); ?>
         <i class="fa fa-quote-right fs-6 text-danger p-2 "></i>
        </p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <?php }} ?>
   </div>
  </div>
 </section>
 <!-- end lesson info -->
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

 
 <!-- <script src="swiper/swiper-bundle.min.js"></script> -->
 <script src="aos/aos.js"></script>
 <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js">
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <script src="particles.js-master/particles.min.js"></script>
 <script src="/particles.js-master/demo/js/app.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/number-rush.js"></script>
 <script src="js/script.js"></script>
 <script>
    AOS.init();
  </script>
  <script>
  var typed = new Typed('#element', {
    strings: ['BEST ONLINE COURSES'],
    typeSpeed: 120,
    startDelay: 1200,
    backSpeed: 100,
    loop: true,
    showCursor: false,
    
  });
</script>
</body>

</html>
