<?php
// $connect = mysqli_connect("localhost", "root", "", "testing1");
include 'connect_db.php';
session_start();
$tab_query = 'SELECT * FROM categories ORDER BY cat_id ASC';
$tab_result = $conn->query($tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
// display courses section
while ($row = mysqli_fetch_array($tab_result)) {
    if ($i == 0) {
        $tab_menu .=
            '
   <li class="nav-item px-3 mb-2"><a class="nav-link active" href="#' .
            $row['cat_id'] .
            '" data-toggle="tab" role="tab" aria-selected="true">' .
            $row['cat_title'] .
            '</a></li>';
        $tab_content .=
            '
   <div id="' .
            $row['cat_id'] .
            '" class="tab-pane p-3 d-flex flex-row flex-wrap fade in  active show" role="tabpanel " style=" gap:25px">';
    } else {
        $tab_menu .=
            '
   <li class="nav-item px-3 mb-2"><a class="nav-link"  href="#' .
            $row['cat_id'] .
            '" data-toggle="tab" role="tab" aria-selected="false">' .
            $row['cat_title'] .
            '</a></li>';
        $tab_content .=
            '
   <div id="' .
            $row['cat_id'] .
            '" class="tab-pane p-3 d-flex flex-row flex-wrap  fade show "  role="tabpanel" style=" gap:25px">';
    }
    $course_query = "SELECT * FROM courses WHERE cat_id = '" . $row['cat_id'] . "'";
    $course_result = $conn->query($course_query);
    while ($sub_row = mysqli_fetch_array($course_result)) {
        $tab_content .=
            '
  <div class="card" style="width:20rem" data-aos="zoom-in" data-aos-easing="linear"  data-aos-duration="2000">
   <img src="' .
            $sub_row['course_image'] .
            '" class="img-fluid" />
            <div class="card-body">
   <h4  class="card-title">' .
            $sub_row['course_name'] .
            '</h4>
            <p class="card-text text-truncate">' .
            $sub_row['course_description'] .
            '</p>
 <a href="course-details.php?course_id=' .
            $sub_row['course_id'] .
            '">More Info</a>
            </div>
            </div>

  ';
    }
    $tab_content .= '<div style="clear:both"></div></div>';
    $i++;
}
// display articles section
$post_query = 'SELECT * FROM articles ORDER BY post_id ASC';
$post_result = $conn->query($post_query);
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
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
 -->
 <link rel="stylesheet" href="css/style.css">

 <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script> -->
 <script src="js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>
 <!-- start navigation -->
 <div class="nav-sec mb-5"
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 150px 0px;border-radius: 0px 0px 150px 150px;">
  <nav class="navbar navbar-expand-lg fixed-top p-4">
   <div class="container">
    <a class="navbar-brand" href="#">
     <img src="images/logo.png" alt="" class="img-fluid" width="40px" height="40px">
     <!-- <i class="fa fa-chalkboard-teacher" style="color: #c2c7d0; font-size: 50px;"></i> -->
    </a>
    <button class="navbar-toggler bg-danger text-white" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
     aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item ">
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
       <a class="nav-link text-white" href="contact.html">Contact</a>
      </li>
      <?php if (isset($_SESSION['user_name']) && $_SESSION['user_name']): ?>
      <li class="nav-item">
       <a class="nav-link text-white " href="users/profile.php">profile</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white " href="logout.php">Logout</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
       <a class="nav-link text-white" href="register.php">Resgister Now</a>
      </li>
      <?php endif; ?>
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
   <!-- start Courses -->
 <section class="Courses pb-4 Pt-4 ">
  <div class="container">
   <div class=" text-start pb-3" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000">
    <h1 class="fs-2 fw-bolder text-danger  pt-3">Our Online Courses </h1>
    <p class="fs-5  fw-bold home-h1">Latest Courses,</p>
   </div>
   <div class="Courses-content d-flex flex-column justify-content-center ">
    <div class="Courses-content-list text-center pb-4 m-auto w-75 d-flex flex-justify-center" data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1000">
     <ul class="nav nav-tabs  nav-pills  justify-content-center " id="myTab">
      <?php
      echo $tab_menu;
      ?>
     </ul>
    </div>
    <div class="Courses-content-body" data-aos="zoom-in" data-aos-easing="linear"  data-aos-duration="1800">
     <div class="mb-4">
      <div class="tab-content w-100 " data-aos="zoom-in" data-aos-easing="linear"  data-aos-duration="2000">
       <br />
       <?php
       echo $tab_content;
       ?>
      </div>
     </div>
   
    </div>
   </div>
  </div>
 </section>
   <!-- end Courses -->
  <!-- start Trending Courses -->
 <section class="Courses-filter  background-one" style="padding: 100px 0px; border-radius: 150px;">
  <div class="container">
   <div class=" text-start pb-3" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000">
    <h1 class="fs-2 fw-bolder text-danger pt-3">Trending Technologies</h1>
    <p class="fs-5  fw-bold home-h1"> Trending Courses,</p>
   </div>
   <div class="Courses-filter-content d-flex flex-column justify-content-center "data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1000" >
    <!-- Control buttons -->
    <div id="myBtnContainer" class="Courses-filter-list text-center pb-4">
     <button class="btn btn-primary border border-0 active p-3 " onclick="filterSelection('All')"> Show all</button>
     <button class="btn btn-primary  border border-0  p-3 " onclick="filterSelection('Business')"> Business</button>
     <button class="btn btn-primary border border-0 p-3" onclick="filterSelection('Design')"> Design</button>
     <button class="btn btn-primary border border-0 p-3" onclick="filterSelection('Development')">
      Development</button>
     <button class="btn btn-primary border border-0 p-3" onclick="filterSelection('Mobile')"> Mobile</button>
    </div>

    <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
    <div class="container">
     <div class="row d-flex  justify-content-center "  data-aos="fade-up" data-aos-easing="ease-in-sine"  data-aos-duration="1500">
      <div class="card rounded-0 filterDiv Business text-center m-auto p-3 mb-2" style="width: 15rem;" >
       <img src="images/artificial-intelligence.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Artificial Intelligence </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Mobile Development text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/amazon-web-services.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">AWS</p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Business text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/selenium.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Selenium</p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Mobile text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/cloud-computing.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Cloud Computing </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Business text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/hadoop.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Hadoop </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Mobile text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/reactjs.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">ReactJS</p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Design text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/data-science.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Data Science </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Design text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/angular7.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Angular 7 </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Development text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/blockchain.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Blockchain </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Development Design text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/git.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Git </p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv Development text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/machine-learning.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">Machine Learning</p>
       </div>
      </div>
      <div class="card rounded-0 filterDiv  Design text-center m-auto p-3 mb-2" style="width: 15rem;">
       <img src="images/devops.png" class="img-fluid" alt="...">
       <div class="card-body ">
        <p class="card-text home-p  fw-bolder font-body pt-2">DevOps</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
  <!-- end Trending Courses -->
   <!-- start Team  -->
 <section class="team-section pt-4 pb-4">
  <div class="container">
   <div class=" text-start pb-5" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000">
    <h1 class="fs-2 fw-bolder text-danger  pt-3" >Our Instructors</h1>
    <p class="fs-5  fw-bold home-h1">Lorem ipsum dolor,</p>
   </div>
   <div class="text-center pb-5 team-card d-flex flex-row  justify-content-between">
    <div class="row">
     <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1400">
      <div class="card rounded-3 overlay ">
       <img src="images/team2.jpg" class="img-fluid " alt="...">
       <div class="card-body  team-info">
        <h5 class="card-title home-h1 pt-2 mb-0">Jon wilston</h5>
        <p class="card-text home-p fw-bolder font-body pt-2">Instructor</p>
       </div>
       <div class="middle">
        <div class="team-social-media d-flex flex-row justify-content-between ">
         <!-- Facebook -->
         <a href="#" style="color: #3b5998;" class="p-2"><i class="fab fa-facebook fa-lg"></i></a>

         <!-- Twitter -->
         <a href="#" style="color: #55acee;" class="p-2"><i class="fab fa-twitter fa-lg"></i></a>

         <!-- Google -->
         <a href="#" style="color: #dd4b39;" class="p-2"><i class="fab fa-google fa-lg"></i></a>

         <!-- Instagram -->
         <a href="#" style="color: #ac2bac;" class="p-2"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6  mb-4" data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1800">
      <div class="card rounded-2 overlay">
       <img
        src="https://images.unsplash.com/profile-fb-1527869404-f8a097e99c32.jpg?ixlib=rb-4.0.3&crop=faces&fit=crop&w=128&h=128"
        class="img-fluid" alt="...">
       <div class="card-body ">
        <h5 class="card-title home-h1 pt-2 mb-0">Merry Wins</h5>
        <p class="card-text home-p fw-bolder font-body pt-2">Engineer</p>
       </div>
       <div class="middle">
        <div class="team-social-media d-flex flex-row justify-content-between ">
         <!-- Facebook -->
         <a href="#" style="color: #3b5998;" class="p-2"><i class="fab fa-facebook fa-lg"></i></a>

         <!-- Twitter -->
         <a href="#" style="color: #55acee;" class="p-2"><i class="fab fa-twitter fa-lg"></i></a>

         <!-- Google -->
         <a href="#" style="color: #dd4b39;" class="p-2"><i class="fab fa-google fa-lg"></i></a>

         <!-- Instagram -->
         <a href="#" style="color: #ac2bac;" class="p-2"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-down" data-aos-easing="linear"  data-aos-duration="1900">
      <div class="card rounded-2 overlay">
       <img src="images/team3.jpg" class="img-fluid" alt="...">
       <div class="card-body ">
        <h5 class="card-title home-h1 pt-2 mb-0 ">Lius Sommon</h5>
        <p class="card-text home-p fw-bolder font-body pt-2">Manager</p>
       </div>
       <div class="middle">
        <div class="team-social-media d-flex flex-row justify-content-between ">
         <!-- Facebook -->
         <a href="#" style="color: #3b5998;" class="p-2"><i class="fab fa-facebook fa-lg"></i></a>

         <!-- Twitter -->
         <a href="#" style="color: #55acee;" class="p-2"><i class="fab fa-twitter fa-lg"></i></a>

         <!-- Google -->
         <a href="#" style="color: #dd4b39;" class="p-2"><i class="fab fa-google fa-lg"></i></a>

         <!-- Instagram -->
         <a href="#" style="color: #ac2bac;" class="p-2"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-left" data-aos-easing="linear"  data-aos-duration="2000">
      <div class="card rounded-2 overlay">
       <img src="images/team1.jpg" class="img-fluid" alt="...">
       <div class="card-body ">
        <h5 class="card-title home-h1 pt-2 mb-0 ">Sally Soman</h5>
        <p class="card-text home-p fw-bolder font-body pt-2">Director</p>
       </div>
       <div class="middle">
        <div class="team-social-media d-flex flex-row justify-content-between ">
         <!-- Facebook -->
         <a href="#" style="color: #3b5998;" class="p-2"><i class="fab fa-facebook fa-lg"></i></a>

         <!-- Twitter -->
         <a href="#" style="color: #55acee;" class="p-2"><i class="fab fa-twitter fa-lg"></i></a>

         <!-- Google -->
         <a href="#" style="color: #dd4b39;" class="p-2"><i class="fab fa-google fa-lg"></i></a>

         <!-- Instagram -->
         <a href="#" style="color: #ac2bac;" class="p-2"><i class="fab fa-instagram fa-lg"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
  <!-- end Team  --> 
  <!-- start Offers  -->
 <section class="offers   background-one" style="padding: 100px 0px;
    border-radius: 150px;">
  <div class="container">
   <div class=" text-start pb-3" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000">
    <h1 class="fs-2 fw-bolder text-danger  pt-3">Our Offers</h1>
    <p class="fs-5  fw-bold home-h1">Lorem ipsum dolor,</p>
   </div>
   <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-6" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1600">
     <div class="swiper text-center pb-5 w-100 ">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper " >
       <!-- Slides -->
       <div class="swiper-slide">
        <div class="row">
         <div class="col-12 p-3" >
          <div class="card ">
           <img src="images/offer1.jpg" class="card-img-top" alt="...">
           <div class="card-body">
            <h5 class="fs-6 fw-bolder text-danger">35% discount for premium Bootstrap Themes, Templates, UI
             Kits</h5>
            <p class="fs-5 fw-bold home-h1">We’re getting nearer to the end of summer and because we
             know that this period can make a serious dent in your pocket..</p>
            <a href="#" class="btn btn-danger rounded-pill">Read more</a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="swiper-slide">
        <div class="row">
         <div class="col-12 p-3">
          <div class="card ">
           <img
            src="https://courses.cognitiveclass.ai/asset-v1:CognitiveClass+PY0101EN+v3+type@asset+block@course_card.png"
            class="card-img-top " alt="...">
           <div class="card-body">
            <h5 class="fs-6 fw-bolder text-danger">We built an OpenAI powered Tailwind CSS code generator
             using GPT-3</h5>
            <p class="fs-5 fw-bold home-h1">A couple of days ago we got access to the OpenAI’s Beta
             API platform and I had the occasion to play around with it...</p>
            <a href="#" class="btn btn-danger rounded-pill">Read more</a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="swiper-slide">
        <div class="row">
         <div class="col-12 p-3">
          <div class="card ">
           <img src="images/offer3.webp" class="card-img-top" alt="...">
           <div class="card-body">
            <h5 class="fs-6 fw-bolder text-danger">35% discount for premium Bootstrap Themes, Templates, UI
             Kits</h5>
            <p class="fs-5 fw-bold home-h1">We’re getting nearer to the end of summer and because we
             know that this period can make a serious dent in your pocket..</p>
            <a href="#" class="btn btn-danger rounded-pill">Read more</a>
           </div>
          </div>
         </div>
        </div>
       </div>

       ...
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
     </div>
    </div>
    <div class="col-md-6 " data-aos="fade-left" data-aos-easing="linear"  data-aos-duration="1600">
     <img src="images/placeholder.png" class=" img-fluid " alt="...">
    </div>
   </div>
   <!-- Slider main container -->

  </div>
 </section>
   <!--end Offers  -->
   <!-- start blog -->
 <section class="blog-section pt-4 pb-4">
  <div class="container">
   <div class="text-start pb-3" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000">
    <h1 class="fs-2 fw-bolder text-danger  pt-3">Our Blogs</h1>
    <p class="fs-5  fw-bold home-h1">Lorem ipsum dolor,</p>
   </div>
   <div class="row">
    <?php
              if($post_result->num_rows > 0){
                while($post_row =$post_result->fetch_assoc()) {
              ?>
    <div class=" col-md-4 mb-4 "  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1000">

     <div class="card rounded-3">
      <div class="">
       <img src="<?php echo htmlentities($post_row['post_image']); ?>" class="img-fluid" alt="">
      </div>
      <div class="p-3 card-body">
       <h6 class="fs-6 fw-bolder text-primary text-left py-3"><?php echo htmlentities($post_row['post_title']); ?> </h6>
       <hr class="w-50 text-muted bg-light">
       <div class="blog-body">
        <p class="fs-5 fw-bold text-dark text-truncate"><?php echo htmlentities($post_row['post_description']); ?></p>
        <hr class="w-100 text-muted bg-light">
       </div>
       <p class="fs-6 text-dark fw-bold">Publishing Date: <span
         class=" fs-6 text-danger  fw-bold"><?php echo htmlentities($post_row['post_created_at']); ?></span></p>
       <div class="blog-footer d-flex flex-row justify-content-between">
        <p class="fs-6 text-primary p-2">By <span class="  fs-6 home-h1 fw-bold"><?php echo htmlentities($post_row['post_auth']); ?></span></p>
        <div class="d-flex flex-row justify-content-between gap-2 p-2">
         <a href="#" style="color: #55acee;" class="fs-6"><i class="fa fa-thumbs-up fa-lg"></i></a>
         <a href="#" style="color: #dd4b39;" class="fs-6"><i class="fa fa-thumbs-down fa-lg"></i></a>
        </div>
       
       </div>
       <form action="comment.php" method="get" class="rounded-pill mt-3 mb-3 w-25"
         style="background-color: #40f4f4;">
         <input type="hidden" name="post_id" value="<?php echo htmlentities($post_row['post_id']); ?>">
         <input type="submit" value="Add Comment" class="btn btn-danger rounded-3 btn-md">
        </form>
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
   <!--end blog -->
   <!-- start testimonials -->
 <section id="testimonials-section" class="section testimonials-section py-5 background-two" style="padding: 100px 0px;
 border-radius: 150px;">
  <div class="container">
   <h1 class="fs-2 fw-bolder text-danger text-center  p-3" data-aos="zoom-in" data-aos-easing="linear"  data-aos-duration="1000">What are students saying?</h1>
   <div id="testimonials-carousel" class="carousel slide  carousel-fade testimonials-carousel pt-3"  data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1600">
    <ol class="carousel-indicators  ">
     <li data-bs-target="#testimonials-carousel" data-bs-slide-to="0" class="active"></li>
     <li data-bs-target="#testimonials-carousel" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
     <div class="carousel-item active mb-5 mb-md-0">
      <div class="row">
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #ee626b; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <!-- style="color:rgb(252 226 119); size: 30px;" -->
          <i class="fa fa-quote-left text-danger"></i>
          Love it! vehicula consequat cursus. Morbi bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin
          leo.
          <i class="fa fa-quote-right text-danger"></i>
         </blockquote>
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">Steven Turner</span>
          <span class="title fw-bold text-white">Bristol, UK</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team1.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #ee626b; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left text-danger"></i>
          Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!
          <i class="fa fa-quote-right text-danger"></i>
         </blockquote>
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">Michelle Cheung</span>
          <span class="title fw-bold text-white">San Francisco, US</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team2.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none; border-right: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left text-danger"></i>
          Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem.
          <i class="fa fa-quote-right text-danger"></i>
         </blockquote>
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">James Lee</span>
          <span class="title fw-bold text-white">London, UK</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team3.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
      </div>
      <!--//row-->
     </div>
     <!--//carousel-item-->
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
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">Steven Turner</span>
          <span class="title fw-bold text-white">Bristol, UK</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team2.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left" style="color:rgb(252 226 119); size: 30px;"></i>
          Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">Michelle Cheung</span>
          <span class="title fw-bold text-white">San Francisco, US</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team1.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
       <div class="item col-md-4 col-12">
        <div class="quote-box card p-3 "
         style="background-color: transparent; border:3px solid #1acaca; border-bottom: none; border-left: none; border-top: none; border-right: none;">
         <blockquote class="quote text-white">
          <i class="fa fa-quote-left"style="color:rgb(252 226 119); size: 30px;"></i>
          Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem.
          <i class="fa fa-quote-right"style="color:rgb(252 226 119); size: 30px;"></i>
         </blockquote>
         <!--//quote-->
         <p class="details">
          <span class="name fw-bold text-info">James Lee</span>
          <span class="title fw-bold text-white">London, UK</span>
         </p>
        </div>
        <!--//quote-box-->
        <div class="people text-center mb-5">
         <img class="img-rounded rounded-pill user-pic" src="images/team3.jpg" alt="" width="50px"
          height="50px">
        </div>
        <!--//people-->
       </div>
       <!--//item-->
      </div>
      <!--//row-->
     </div>
     <!--//carousel-item-->
    </div>
    <!--//carousel-inner-->
   </div>
   <!--//carousel-testimonials-->
  </div>
 </section>
 <!-- end testimonials -->
 <!-- start pricing -->
 <section id="pricing" class="pricing    pt-4 pb-4">
  <div class="container">
   <div class="text-start pb-3 mb-3" data-aos="fade-up-right" data-aos-easing="linear"  data-aos-duration="1000" >
    <h1 class="fs-2 fw-bolder text-danger  pt-3">Our pricin</h1>
    <p class="fs-5  fw-bold home-h1">Lorem ipsum dolor,</p>
   </div>
   <div class="row">
    <div class="col-lg-4 col-md-4"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1000" >
     <div class="card p-3 text-center aos-init aos-animate   text-white bg-primary">
      <h3 class="card-text fs-3 fw-bolder text-danger p-2">Free</h3>
      <h4 class="card-text fs-4 fw-bolder"><sup>$</sup>0<span> / month</span></h4>
      <ul class="list-group  text-center " style="border:none">
       <li class="list-group-item bg-primary  text-white" style="border:none">Aida dere</li>
       <li class="list-group-item bg-primary text-white" style="border:none">Nec feugiat nisl</li>
       <li class="list-group-item bg-primary  text-white" style="border:none">Nulla at volutpat dola</li>
       <li class="list-group-item  bg-primary text-decoration-line-through  text-white" style="border:none">Pharetra
        massa</li>
       <li class="list-group-item  bg-primary text-decoration-line-through  text-white " style="border:none">Massa
        ultricies mi</li>
      </ul>
      <div class="btn-wrap mt-1">
       <a href="#" class="btn btn-danger rounded-pill">Buy Now</a>
      </div>
     </div>
    </div>

    <div class="col-lg-4 col-md-4"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="1500">
     <div class="card p-3 text-center aos-init aos-animate bg-danger  text-white ">
      <h3 class="card-text fs-3 fw-bolder text-primary p-2">BUSINESS</h3>
      <h4 class="card-text fs-4 fw-bolder"><sup>$</sup>19<span> / month</span></h4>
      <ul class="list-group  text-center " style="border:none">
       <li class="list-group-item bg-danger   text-white" style="border:none">Aida dere</li>
       <li class="list-group-item bg-danger  text-white" style="border:none">Nec feugiat nisl</li>
       <li class="list-group-item bg-danger   text-white" style="border:none">Nulla at volutpat dola</li>
       <li class="list-group-item bg-danger   text-white " style="border:none">Pharetra massa</li>
       <li class="list-group-item text-decoration-line-through bg-danger   text-white" style="border:none">Massa
        ultricies mi</li>
      </ul>
      <div class="btn-wrap mt-1">
       <a href="#" class="btn btn-primary rounded-pill text-white ">Buy Now</a>
      </div>
     </div>
    </div>
    <div class="col-lg-4 col-md-4"  data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="2000">
     <div class="card p-3 text-center aos-init aos-animate  text-white bg-primary" data-aos="fade-up"
      data-aos-delay="100">
      <h3 class="card-text fs-3 fw-bolder text-danger p-2">DEVELOPER</h3>
      <h4 class="card-text fs-4 fw-bolder"><sup>$</sup>29<span> / month</span></h4>
      <ul class="list-group  text-center " style="border:none">
       <li class="list-group-item bg-primary  text-white" style="border:none">Aida dere</li>
       <li class="list-group-item  bg-primary text-white" style="border:none">Nec feugiat nisl</li>
       <li class="list-group-item  bg-primary  text-white" style="border:none">Nulla at volutpat dola</li>
       <li class="list-group-item  bg-primary  text-white " style="border:none">Pharetra massa</li>
       <li class="list-group-item  bg-primary text-white " style="border:none">Massa ultricies mi</li>
      </ul>
      <div class="btn-wrap mt-1">
       <a href="#" class="btn btn-danger rounded-pill">Buy Now</a>
      </div>
     </div>
    </div>
   </div>
 </section>
 <!-- end pricing -->
 <!-- start footer -->
 <footer class="background-two text-center text-white">
  <div class="container p-4 pb-0">
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
 <script src="particles.js-master/particles.min.js"></script>
 <script src="/particles.js-master/demo/js/app.js"></script>
 <script src="js/number-rush.js"></script>
 <script src="js/script.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
 <!-- <script src="js/bootstrap.min.js"></script> -->
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script> -->
</body>
</html>
