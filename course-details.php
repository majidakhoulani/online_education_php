<?php
include 'connect_db.php';
session_start();
$course_id = $_GET['course_id'];
$course_query = "SELECT * FROM courses WHERE course_id = $course_id";
$result = $conn->query($course_query);
$lesson_query = "SELECT * FROM lessons  WHERE course_id= $course_id";
$sub_result = $conn->query($lesson_query);
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
  <!--start show course details -->
  <section class="p-5 pb-5">
   <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
     <?php
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
              ?>
     <div class="col-md-9 col-lg-6 col-xl-5">
      <div class="card  p-3" style="background-color: transparent; height: 20.5rem;">
       <h1 class="card-text fs-1 fw-bolder text-danger pt-3"><?php echo htmlentities($row['course_name']); ?> </h1>
       <div class="d-flex justify-content-between align-items-center">
        <div class="fs-3 text-warning pl-3">
          <!-- style="color:#fbc634" -->
         <i class="fa fa-star" ></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star text-light"></i>
         <i class="fa fa-star text-light"></i>
        </div>
        <h5 class="fs-4 fw-bold" style="color:#cecece;">12 Reviews</h5>
       </div>
       <p class="pl-3 py-3 fw-bold text-white fs-6"><?php echo htmlentities($row['course_description']); ?></p>
       <form action="course-register.php" method="get" class="rounded-pill mt-3 mb-3 w-25"
        style="background-color: #40f4f4;">
        <input type="hidden" name="course_id" value="<?php echo htmlentities($row['course_id']); ?>">
        <input type="submit" value="Enroll for Free" class="btn btn-danger rounded-3 btn-md">
       </form>
      </div>
     </div>
     <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <img src="<?php echo htmlentities($row['course_image']); ?>" class="img-fluid" alt="Sample image">
     </div>


     <?php
                }
              }
                ?>

    </div>
   </div>
 </div>
 </section>
   <!--end show course details -->
 </div>
 <!-- end navigation -->
 <section id="benefits-section background-one" class="section benefits-section has-texture py-5">
  <div class="container text-start">
   <h1 class="fs-2 fw-bolder text-danger pt-3 ">About this Course</h1>
   <div class="row">
    <div class="item col-md-8 col-sm-6 col-12 mb-3">
     <div class="content">
      <h3 class="subtitle home-p fw-bold fs-4 py-3">Sponsored by Open Higher Education</h3>
      <p class="fs-6 text-muted text-start lh-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ipsam
       repellat ullam doloribus voluptate itaque non sed quod vero fugiat iste id pllorem
       loremceat eligendi nemo, odio aut quam accusantium Lorem ipsum dolor sit amet consectetur adipisicing elit.
       Voluptas repellendus cupiditate mollitia aliquam iure minima delectus? Ab sed, distinctio harum repudiandae
       dolores quam fuga saepe dolorem laudantium mollitia placeat delectus?Lorem ipsum dolor sit amet, consectetur
       adipisicing elit. Recusandae, rem asperiores dolor quidem quia consectetur, atque cupiditate id alias accusamus
       saepe provident laudantium tempora fuga perspiciatis ipsum nesciunt voluptate iusto.</p>
     </div>
    </div>
    <div class="item col-md-4 col-sm-6 col-12 mb-3">
     <div class="d-flex flex-direction-column">
      <div class="icon pt-3">
       <i class="fas fa-calendar" style="color:#1acaca;font-size: 30px;"></i>
      </div>
      <div class="content p-3 pb-1">
       <h3 class="subtitle home-p fw-bold fs-4">Flexible deadlines</h3>
       <p class="fs-6 text-muted text-start">Earn a Certificate upon completion</p>
      </div>
     </div>
     <div class="d-flex flex-direction-column">
      <div class="icon pt-3">
       <i class="fas fa-certificate" style="color:#1acaca;font-size: 30px;"></i>
      </div>
      <div class="content p-3 pb-1">
       <h3 class="subtitle home-p fw-bold fs-4">Shareable Certificate</h3>
       <p class="fs-6 text-muted text-start">Earn a Certificate upon completion </p>
      </div>
     </div>
     <div class="d-flex flex-direction-column">
      <div class="icon pt-3">
       <i class="fas fa-globe" style="color:#1acaca;font-size: 30px;"></i>
      </div>
      <div class="content p-3 pb-1">
       <h3 class="subtitle home-p fw-bold fs-4">100% online</h3>
       <p class="fs-6 text-muted text-start">Start instantly and learn at your own schedule. </p>
      </div>
     </div>
     <div class="d-flex flex-direction-column">
      <div class="icon pt-3">
       <i class="fas fa-graduation-cap" style="color:#1acaca;font-size: 30px;"></i>
      </div>
      <div class="content p-3 pb-1">
       <h3 class="subtitle home-p fw-bold fs-4">our Labs</h3>
       <p class="fs-6 text-muted text-start">Includes hands on learning projects. </p>
      </div>
     </div>
    </div>
    <div class="py-3 text-start">
     <h5 class="fw=1 p-3 text-danger">SKILLS YOU WILL GAIN</h5>
     <div>
      <ul class="list-group list-group-horizontal text-center w-75">
       <a class="list-group-item list-group-item-success  list-group-item-action ">Problem solving</a>
       <a class="list-group-item  list-group-item-primary  list-group-item-action">Time management.</a>
       <a class="list-group-item list-group-item-danger  list-group-item-action">Business etiquette</a>
       <a class="list-group-item list-group-item-dark  list-group-item-action">Professionalism</a>
      </ul>
     </div>
    </div>
    <div class="row py-5">
     <div class="col-md-5">
      <div class="d-flex flex-direction-column">
       <div class="w-25">
        <img class="img-rounded rounded-pill" src="images/team1.jpg" alt="" width="75px" height="75px">
       </div>
       <div class="content w-75">
        <h3 class="subtitle home-p fw-bold fs-4">Senior instructor </h3>
        <p class="fs-6 text-muted text-start">Taught by online Staff instructor is a procurement expert with many years
         of field experience. </p>
       </div>
      </div>
     </div>
    </div>
    <div class="py-3 text-center"><a class="btn btn-danger btn-lg rounded-pill" href="#">Apply Now</a></div>
   </div>
 </section>
 <!--//benefits-section-->
 <!-- start lesson info -->
 <section id="benefits2-section background-one" class="section benefits-section has-texture py-5">
  <div class="container">
   <h2 class="title pt-4 mb-2 home-h1 text-center pb-5">What you will <span id="element"></span></h2>
   <div class="row gx-3">
    <?php
              if($sub_result->num_rows > 0){
                while($sub_row = $sub_result->fetch_assoc()) {
              ?>
    <div class="card d-flex flex-row mb-4 p-3 bg-light">
     <div class="col-md-4 mb-4">
      <div class="blog-img ">
       <img class="img-fluid" src="<?php echo htmlentities($sub_row['less_image']); ?>" alt="" />
      </div>
     </div>
     <div class="col-md-8">
      <div class="card-body">
       <div class="blog-content">
        <div class="title-blog">
         <h4 class="card-title text-success fs-4 text-danger pb-3"><?php echo htmlentities($sub_row['less_title']); ?></h4>
         <p class="card-text fs-5 home-h1 fw-bold pb-3"><?php echo htmlentities($sub_row['less_description']); ?></p>
        </div>
       </div>
       <div class="edit-blog pt-3">
        <form action="lesson-details-manage.php" method="get">
         <input type="hidden" name="id" value="<?php echo $sub_row['less_id']; ?>">
         <input type="submit" class="btn btn-outline-danger" value="Show More">
        </form>
       </div>
      </div>
     </div>
    </div>
    <?php
                }
              }
                ?>
   </div>
  </div>
 </section>
 <!-- end lesson info -->
 <!--Testimonials Section-->
 <!-- style="background-color: #85caf8" -->
 <section id="testimonials-section" class="section testimonials-section py-5 background-two">
  <div class="container">
   <h2 class="title text-center mt-4 mb-5 " style="color:#1acaca;">What are students saying?</h2>
   <div id="testimonials-carousel" class="carousel slide  carousel-fade testimonials-carousel">
    <ol class="carousel-indicators  ">
     <li data-bs-target="#testimonials-carousel" data-bs-slide-to="0" class="active"></li>
     <li data-bs-target="#testimonials-carousel" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
     <div class="carousel-item active mb-5 mb-md-0">
      <div class="row">
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none;">

         <blockquote class="quote text-white">
          <i class="fa fa-quote-left" style="color:rgb(252 226 119); size: 30px;"></i>
          Love it! vehicula consequat cursus. Morbi bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin
          leo.
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">Steven Turner</span>
          <span class="title fw-bold text-muted">Bristol, UK</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team1.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left" style="color:rgb(252 226 119); size: 30px;"></i>
          Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">Michelle Cheung</span>
          <span class="title fw-bold text-muted">San Francisco, US</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team2.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none; border-right: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left"style="color:rgb(252 226 119); size: 30px;"></i>
          Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem.
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">James Lee</span>
          <span class="title fw-bold text-muted">London, UK</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team3.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
      </div>
     </div>
     <!--carousel-->
     <div class="carousel-item  mb-5 mb-md-0">
      <div class="row">
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left" style="color:rgb(252 226 119); size: 30px;"></i>
          Love it! vehicula consequat cursus. Morbi bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin
          leo.
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">Steven Turner</span>
          <span class="title fw-bold text-muted">Bristol, UK</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team2.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left" style="color:rgb(252 226 119); size: 30px;"></i>
          Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">Michelle Cheung</span>
          <span class="title fw-bold text-muted">San Francisco, US</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team1.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none; border-right: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left"style="color:rgb(252 226 119); size: 30px;"></i>
          Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem.
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <p class="details">
          <span class="name fw-bold text-muted">James Lee</span>
          <span class="title fw-bold text-muted">London, UK</span>
         </p>
        </div>
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team3.jpg" alt="" width="50px"
          height="50px">
        </div>
       </div>
      </div>
     </div>
     <!--carousel-->
    </div>
   </div>
   <!--carousel-testimonials-->
  </div>
 </section>
 <!--testimonials-section-->
 <!-- Logos -->
 <section id="logos-section" class="section logos-section py-5">
  <div class="container text-center">

   <h2 class="title mt-4 mb-5 home-h1">Our Partners</h2>
   <img class="img-fluid" src="images/sponser.png" alt="" />
   <!-- <ul class="logos-list list-inline row">
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-1.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-2.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-3.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-4.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-5.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-6.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-7.png" alt="" /></a></li>
   <li class="col-lg-3 col-6"><a href="#"><img class="img-fluid" src="assets/images/logos/logo-8.png" alt="" /></a></li>
  </ul>    -->
  </div>
 </section>
 <!--//logos-->
 <!-- footer -->
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
 <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
 <!-- <script src="swiper/swiper-bundle.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js"></script> -->
 <!-- <script src="js/jquery.star-rating-svg.js"></script> -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
 <!-- <script src="particles.js-master/particles.min.js"></script> -->
 <!-- <script src="/particles.js-master/demo/js/app.js"></script> -->
 <script src="js/bootstrap.min.js"></script>
 <!-- <script src="js/number-rush.js"></script> -->
 <script src="js/script.js"></script>
 <script>
  var typed = new Typed('#element', {
    strings: ['learn from this course.'],
    typeSpeed: 120,
    startDelay: 1200,
    backSpeed: 100,
    loop: true,
    showCursor: true,
    cursorChar: "|",
  });
</script>
</body>

</html>
