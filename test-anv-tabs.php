<?php
// $connect = mysqli_connect("localhost", "root", "", "testing1");
include'connect_db.php';
$tab_query = "SELECT * FROM categories ORDER BY cat_id ASC";
$tab_result = $conn->query($tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="nav-item px-3 active"><a class="nav-link" href="#'.$row["cat_id"].'" data-toggle="tab">'.$row["cat_title"].'</a></li>';
  $tab_content .= '
   <div id="'.$row["cat_id"].'" class="tab-pane  fade in  active ">';
 }
 else
 {
  $tab_menu .= '
   <li class="nav-item px-3"><a class="nav-link"  href="#'.$row["cat_id"].'" data-toggle="tab">'.$row["cat_title"].'</a></li>';
  $tab_content .= '
   <div id="'.$row["cat_id"].'" class="tab-pane fade">';
 }
 $course_query = "SELECT * FROM courses WHERE cat_id = '".$row["cat_id"]."'";
 $course_result =$conn->query($course_query);
 while($sub_row = mysqli_fetch_array($course_result))
 {
  $tab_content .= '
  <div class="col-md-3" style="margin-bottom:36px;">
   <img src="'.$sub_row["course_image"].'" class="img-fluid" />
   <h4>'.$sub_row["course_name"].'</h4>
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
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
    <main class="nav-sec">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/1.gif" alt="" class="img-fluid" width="40px" height="40px">
                    <!-- <i class="fa fa-chalkboard-teacher" style="color: #c2c7d0; font-size: 50px;"></i> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link text-white " href="admin/admin-dashboard.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="register.php">Resgister Now</a>
                        </li>

                    </ul>
                    <!-- <form class="d-flex">
                        <button class="btn btn-primary btn-md rounded-pill" type="submit"><span class="fs-5 p-2">Get
                                Start</span></button>
                    </form> -->
                    <form class="d-flex">
                        <input class="form-control me-2 p-2" type="search" placeholder="What do you want to learn"
                            aria-label="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <section class="hero home-content  text-center">
            <!-- <div id="particles-js">
            </div> -->
            <h1 class="fs-1 fw-bolder" style="color:#40f4f4;" >Learn best Online Courses</h1>
            <p class="fs-5  fw-bold home-p text-white">50,000 Online Courses for you</p>
            <!-- <div class=" home-search pb-3 py-3 w-25"> -->
                <!-- <form class="d-flex w-100">
                    <input class="form-control me-2 p-2" type="search" placeholder="What do you want to learn"
                        aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form> -->
            <!-- </div> -->
            <!-- <div class="home-image w-50 p-3 bg-danger">
             
            </div> -->
        </section>

<section class="p-5 pb-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5 ">
        <img src="images/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal fw-bold mb-0 me-3" style="color:#dd4b39">Contact us with</p>
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
            <p class="text-center fw-bold mx-3 mb-0 home-h1 fw-bold" >Or</p>
          </div>
         
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="email"/>
            <label class="form-label fw-bold " for="form3Example3"  style="color:#40f4f4;">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password"/>
            <label class="form-label" for="form3Example4"  style="color:#40f4f4;">Password</label>
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
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0 "  style="color:#40f4f4;">Don't have an account? <a href="register.html"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</main>
    <section class="statistics pt-5 pb-4 background-one ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 statistics-sm">
                    <div class="d-flex flex-row p-3 lh-1 w-100 bg-color rounded-1">
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
                <div class="col-lg-4   statistics-sm ">
                    <div class="d-flex flex-row p-3 lh-1 w-100 bg-color rounded-1">
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
                <div class="col-lg-4   statistics-sm ">
                    <div class="d-flex flex-row p-3 lh-1 w-100 bg-color rounded-1">
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
                <!-- <div class="col-lg-4    ">
                  
                  <div class="d-flex flex-row p-3 lh-1 w-100 bg-color">
                      <div class="w-25 pt-2 text-center">
                          <i class="fa fa-book-open" style="color: #255ab6; font-size: 50px;"></i>
                      </div>
                      <div class="w-75 statistics-content pl-3">
                          <h3 class="fs-4 fw-bolder home-h1">Our Students</h3>
                          <div class="d-flex flex-row home-p">
                              <p class="fs-3  fw-bold  pl-3"  id="numberTwo">0</p>
                              <p class="fs-3  fw-bold ">+</p>
                          </div>
                      </div>
                  </div>
              </div> -->
                <!-- <div class="col-lg-4     ">
                <div class="d-flex flex-row p-3 lh-1 w-100 bg-color">
                    <div class="w-25 pt-2 text-center">
                        <i class="fa fa-user-graduate" style="color: #255ab6; font-size: px;"></i>
                    </div>
                    <div class="w-75 statistics-content pl-3">
                        <h3 class="fs-4 fw-bolder home-h1">Our Students</h3>
                        <div class="d-flex flex-row home-p">
                            <p class="fs-3  fw-bold  pl-3"  id="numberThree">0</p>
                            <p class="fs-3  fw-bold ">+</p>
                        </div>
                    </div>
                </div>
            </div> -->
                <!-- <div class="col  border border-danger me-2">
                    <div class="d-flex flex-row">
                        <div class="w-25  pe-3">
                            <i class="fa fa-book-open" style="color: #255ab6; font-size: 50px;"></i>
                        </div>
                        <div class="w-75 pe-1">
                            <h3 class="fs-5 fw-bolder home-h1">Online Courses</h3>
                            <div class="d-flex flex-row home-p">
                            <p class="fs-5  fw-bold  pl-3"  id="numberTwo">0</p>
                            <p class="fs-5  fw-bold ">+</p>
                        </div>
                        </div>
                    </div>

                </div> -->
                <!-- <div class="col  border border-success me-2">
                    <div class="d-flex flex-row">
                        <div class="w-25  pe-3">
                            <i class="fa fa-user-graduate" style="color: #255ab6; font-size: 50px;"></i>
                        </div>
                        <div class="w-75 pe-1">
                            <h3 class="fs-5 fw-bolder home-h1">Experts Instructors</h3>
                            <div class="d-flex flex-row home-p">
                                <p class="fs-5  fw-bold  pl-3"  id="numberThree">0</p>
                                <p class="fs-5  fw-bold ">+</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="Courses-filter  Pt-3 pb-3 background-one">
        <div class="container">
            <div class=" text-start pb-3">
                <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Online Courses </h1>
                <p class="fs-5  fw-bold home-p">Lorem ipsum dolor,</p>
            </div>
            <!-- <div class="Courses-filter-content d-flex flex-column justify-content-center "> -->
                <!-- Control buttons -->
                <!-- <div id="myBtnContainer" class="Courses-filter-list text-center pb-4"> -->
   <ul class="nav nav-tabs" id="myTab">
   <?php
   echo $tab_menu;
   ?>
   </ul>
                <!-- </div> -->

                <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
                <!-- <div class="container"> -->
                    <!-- <div class="row d-flex  justify-content-center "> -->
                       
    <div class="tab-content">
   <br />
   <?php
   echo $tab_content;
   ?>
   </div>
                      

                      
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>
    <section class="Courses-filter  Pt-3 pb-3 background-one">
        <div class="container">
            <div class=" text-start pb-3">
                <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Online Courses </h1>
                <p class="fs-5  fw-bold home-p">Lorem ipsum dolor,</p>
            </div>
            <div class="Courses-filter-content d-flex flex-column justify-content-center ">
                <!-- Control buttons -->
                <div id="myBtnContainer" class="Courses-filter-list text-center pb-4">
                    <button class="btn  active " onclick="filterSelection('All')"> Show all</button>
                    <button class="btn" onclick="filterSelection('Business')"> Business</button>
                    <button class="btn" onclick="filterSelection('Design')"> Design</button>
                    <button class="btn" onclick="filterSelection('Development')"> Development</button>
                    <button class="btn" onclick="filterSelection('Mobile')"> Mobile</button>
                </div>

                <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
                <div class="container">
                    <div class="row d-flex  justify-content-center ">
                        <!-- <div class="filterDiv cars">     -->

                        <div class="card rounded-0 filterDiv Business" style="width: 15rem;padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/1.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Master Web Design</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="filterDiv colors fruits"></div> -->
                        <div class="card rounded-0 filterDiv Mobile Development" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/2.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">App Development</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv cars">Volvo</div> -->
                        <div class="card rounded-0 filterDiv Business" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/3.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Comunication Skills</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv colors">Red</div> -->
                        <div class="card rounded-0 filterDiv Mobile" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/4.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Master Web Design</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv cars">Ford</div> -->
                        <div class="card rounded-0 filterDiv Business" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/5.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">App Development</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>

                        <!-- <div class="filterDiv colors">Blue</div> -->
                        <div class="card rounded-0 filterDiv Mobile" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/6.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Comunication Skills</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv animals">Cat</div> -->
                        <div class="card rounded-0 filterDiv Design" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/7.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Master Web Design</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv animals">Dog</div> -->
                        <div class="card rounded-0 filterDiv Design" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/8.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Comunication Skills</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!--
  <div class="filterDiv fruits">Melon</div> -->
                        <div class="card rounded-0 filterDiv Development" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/9.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">App Development</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv fruits animals">Kiwi</div> -->
                        <div class="card rounded-0 filterDiv Development Design" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/10.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Master Web Design</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                            </div>
                        </div>
                        <!-- <div class="filterDiv fruits">Lemon</div> -->
                        <div class="card rounded-0 filterDiv Development" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/11.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Comunication Skills</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <div class="card rounded-0 filterDiv  Design" style="width: 15rem; padding: 0;">
                            <!-- card-img-top -->
                            <img src="images/12.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">App Development</h5>
                                <p class="card-text home-p  fw-bolder font-body pt-2">Best Free Courses </p>
                                <a href="#" class="btn btn-primary btn-md"><span class="">Join
                                        Free</span></a>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                        </div>
                        <!-- <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section  pt-3 pb-3" style="background-color: #6096ba">
        <div class="container">
            <div class=" text-start pb-5">
                <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Instructors</h1>
                <p class="fs-5  fw-bold text-white text-light">Lorem ipsum dolor,</p>
            </div>
            <div class="text-center pb-5 team-card d-flex flex-row  justify-content-between">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <!-- <div class="overlay1"> -->
                        <div class="card rounded-2 overlay ">

                            <!-- card-img-top -->
                            <img src="images/team2.jpg" class="img-fluid " alt="...">
                            <div class="card-body  team-info">
                                <h5 class="card-title home-h1 pt-2 mb-0">Jon wilston</h5>
                                <p class="card-text home-p fw-bolder font-body pt-2">Instructor</p>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                            <div class="middle">
                                <div class="team-social-media d-flex flex-row justify-content-between ">
                                    <!-- Facebook -->
                                    <a href="#" style="color: #3b5998;" class="p-2"><i
                                            class="fab fa-facebook fa-lg"></i></a>

                                    <!-- Twitter -->
                                    <a href="#" style="color: #55acee;" class="p-2"><i
                                            class="fab fa-twitter fa-lg"></i></a>

                                    <!-- Google -->
                                    <a href="#" style="color: #dd4b39;" class="p-2"><i
                                            class="fab fa-google fa-lg"></i></a>

                                    <!-- Instagram -->
                                    <a href="#" style="color: #ac2bac;" class="p-2"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-3 col-md-6  mb-4">
                        <div class="card rounded-2 overlay">
                            <img src="images/team1.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0">Merry Wins</h5>
                                <p class="card-text home-p fw-bolder font-body pt-2">Engineer</p>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                            <div class="middle">
                                <div class="team-social-media d-flex flex-row justify-content-between ">
                                    <!-- Facebook -->
                                    <a href="#" style="color: #3b5998;" class="p-2"><i
                                            class="fab fa-facebook fa-lg"></i></a>

                                    <!-- Twitter -->
                                    <a href="#" style="color: #55acee;" class="p-2"><i
                                            class="fab fa-twitter fa-lg"></i></a>

                                    <!-- Google -->
                                    <a href="#" style="color: #dd4b39;" class="p-2"><i
                                            class="fab fa-google fa-lg"></i></a>

                                    <!-- Instagram -->
                                    <a href="#" style="color: #ac2bac;" class="p-2"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card rounded-2 overlay">
                            <img src="images/team3.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0 ">Lius Sommon</h5>
                                <p class="card-text home-p fw-bolder font-body pt-2">Manager</p>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                            <div class="middle">
                                <div class="team-social-media d-flex flex-row justify-content-between ">
                                    <!-- Facebook -->
                                    <a href="#" style="color: #3b5998;" class="p-2"><i
                                            class="fab fa-facebook fa-lg"></i></a>

                                    <!-- Twitter -->
                                    <a href="#" style="color: #55acee;" class="p-2"><i
                                            class="fab fa-twitter fa-lg"></i></a>

                                    <!-- Google -->
                                    <a href="#" style="color: #dd4b39;" class="p-2"><i
                                            class="fab fa-google fa-lg"></i></a>

                                    <!-- Instagram -->
                                    <a href="#" style="color: #ac2bac;" class="p-2"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card rounded-2 overlay">
                            <img src="images/team1.jpg" class="img-fluid" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title home-h1 pt-2 mb-0 ">Sally Soman</h5>
                                <p class="card-text home-p fw-bolder font-body pt-2">Director</p>
                                <!-- <a href="#" class="btn btn-warning btn-sm">More Details</a> -->
                            </div>
                            <div class="middle">
                                <div class="team-social-media d-flex flex-row justify-content-between ">
                                    <!-- Facebook -->
                                    <a href="#" style="color: #3b5998;" class="p-2"><i
                                            class="fab fa-facebook fa-lg"></i></a>

                                    <!-- Twitter -->
                                    <a href="#" style="color: #55acee;" class="p-2"><i
                                            class="fab fa-twitter fa-lg"></i></a>

                                    <!-- Google -->
                                    <a href="#" style="color: #dd4b39;" class="p-2"><i
                                            class="fab fa-google fa-lg"></i></a>

                                    <!-- Instagram -->
                                    <a href="#" style="color: #ac2bac;" class="p-2"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products-section  pt-3 pb-3" style="background-color: #e7ecef">
        <div class="container">
            <div class="text-start pb-5">
                <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Blogs</h1>
                <p class="fs-5  fw-bold home-p">Lorem ipsum dolor,</p>
            </div>
            <div class="pb-5">
                <div class="row">

                    <div class="col-lg-8  mb-2 rounded-3 background-blog">
                        <div class="row">
                          
                            <div class="col-lg-2 " style="padding:0">
                                <img src="images/team1.jpg" class="img-fluid h-100" alt="">
                            </div>
                            <div class="col-lg-10  pt-2">
                                <h3 class="fs-5">The latest news about Bitcoins </h3>
                                <hr class="w-50 text-muted bg-light">
                                <div class="blog-body">
                                    <p class="fs-6 lh-2 text-white">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit. Repellendus voluptates,
                                        unde non ea nobis porro libero incidunt cupiditate officia vitae rem, atque
                                        eaque odit reprehenderit numquam nostrum.</p>
                                    <hr class="w-100 text-muted bg-light">
                                </div>
                                <div class="blog-footer d-flex flex-row justify-content-between">
                                    <p class="fs-6 text-white">By<span class=" p-1 fs-6" style="color:#8fed8f;">Julie
                                            Wilston</span></p>
                                    <div class="d-flex flex-row justify-content-between">
                                         <!-- love -->
                                        <a href="#" style="color: #3b9895;" class="p-2"><i
                                                class="fa fa-heart fa-lg"></i></a>

                                         <!--like -->
                                        <a href="#" style="color: #55acee;" class="p-2"><i
                                                class="fa fa-thumbs-up fa-lg"></i></a>

                                       <!-- dislike -->
                                        <a href="#" style="color: #dd4b39;" class="p-2"><i
                                                class="fa fa-thumbs-down fa-lg"></i></a>
                                    </div>
                                </div>

                            </div>
                            
                    
                    </div>
                    
                    </div>
                 
                    

                    <div class="col-lg-3 offset-1">
                        <div class="form-floating  mt-1 mb-4 search">
                            <input text="text" class="form-control search-input" placeholder="Search about courses" id="floatingTextarea"></input>
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

            <!-- <div class="col-lg-3 col-md-6">
                <div class="card rounded-0" >
                  <img src="images/team3.jpg" class="img-fluid" alt="...">
                  <div class="card-body ">
                      <h5 class="card-title pt-2 mb-0 ">Lius Sommon</h5>
                      <p class="card-text  font-body pt-2">Manager</p>
                      <a href="#" class="btn btn-warning btn-sm">More Details</a>
                  </div>
              </div>
              </div> -->
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card rounded-0" >
                  <img src="images/team1.jpg" class="img-fluid" alt="...">
                  <div class="card-body ">
                      <h5 class="card-title pt-2 mb-0 ">Sally Soman</h5>
                      <p class="card-text  font-body pt-2">Directory</p>
                      <a href="#" class="btn btn-warning btn-sm">More Details</a>
                  </div>
              </div>
              </div> -->
        </div>
    </section>
    <section class="blog-section  pt-3 pb-3" style="background-color: #6096ba">
        <div class="container">
            <div class=" text-start pb-5">
                <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Offers</h1>
                <p class="fs-5  fw-bold text-white text-light">Lorem ipsum dolor,</p>
            </div>
            <!-- Slider main container -->
            <div class="swiper text-center pb-5 w-100 ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="card ">
                                    <img src="https://cdn.pixabay.com/photo/2016/01/19/07/36/tree-1148032__340.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">35% discount for premium Bootstrap Themes, Templates, UI
                                            Kits</h5>
                                        <p class="card-text">We’re getting nearer to the end of summer and because we
                                            know that this period can make a serious dent in your pocket..</p>
                                        <a href="#" class="btn btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="card ">
                                    <img src="https://cdn.pixabay.com/photo/2016/09/08/04/12/programmer-1653351__340.png"
                                        class="card-img-top " alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">We built an OpenAI powered Tailwind CSS code generator
                                            using GPT-3</h5>
                                        <p class="card-text">A couple of days ago we got access to the OpenAI’s Beta
                                            API platform and I had the occasion to play around with it...</p>
                                        <a href="#" class="btn btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="card ">
                                    <img src="https://cdn.pixabay.com/photo/2019/09/09/08/23/internet-4463031__340.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">35% discount for premium Bootstrap Themes, Templates, UI
                                            Kits</h5>
                                        <p class="card-text">We’re getting nearer to the end of summer and because we
                                            know that this period can make a serious dent in your pocket..</p>
                                        <a href="#" class="btn btn-primary">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ...
                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </div>
    </section>
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
            <a class="text-white" href="https://mdbootstrap.com/">Majida-Bootstrap5</a>
        </div>
        <!-- Copyright -->
    </footer>




    <script src="aos/aos.js"></script>
    <!-- <script src="swiper/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src=
		"particles.js-master/particles.min.js">
	</script>
    	<script src=
		"/particles.js-master/demo/js/app.js">
	</script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/number-rush.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script type="text/javascript">
    $('#myTab a').on('click', function(e) {
      e.preventDefault()
      $(this).tab('show')
    }); 
    </script> -->
</body>

</html>



<section class="Courses-filter  Pt-3 pb-3 background-one">
    <div class="container">
      <div class=" text-start pb-3">
        <h1 class="fs-1 fw-bolder home-h1  pt-3">Our Online Courses </h1>
        <p class="fs-5  fw-bold home-p">Lorem ipsum dolor,</p>
      </div>
      <div class="Courses-filter-content d-flex flex-column justify-content-center ">
      <!-- Control buttons -->
      <!-- <div id="myBtnContainer" class="Courses-filter-list text-center pb-4"> -->
      <ul class="nav nav-tabs" role="tablist" id="myTab">  
        <?php 
        while ($row = mysqli_fetch_array($tab_result)) {
          if ($i == 0) {?>
           
           
         <li class="nav-item px-3 active">
          <a class="nav-link" href="#'.$row['cat_id'] .'" data-toggle="tab" role="tab" aria-selected="true"><?php echo $row['cat_title']  ?></a>
        </li>
        <!-- <li class="nav-item px-3">
          <a class="nav-link"  href="#'. $row['cat_id'] .'" data-toggle="tab" role="tab" aria-selected="false"><?php echo $row['cat_title']  ?></a>
        </li> -->
      
     <?php
          }}?>
            </ul>
        
        <div class="tab-content">
          <?php
           $course_query = "SELECT * FROM courses WHERE cat_id = '" . $row['cat_id'] . "'";
           $course_result = $conn->query($course_query);
           while ($sub_row = mysqli_fetch_array($course_result)) {
          ?>
           <div id="' .$row['cat_id'] .'" class="tab-pane  fade in  active show " role="tabpanel">
           <div class="col-md-3" style="margin-bottom:36px;">
            <img src="<?php echo $sub_row['course_image'] ?>" class="img-fluid" />
            <h4> <?php echo $sub_row['course_name']?></h4>
            <a href="course-details.php?course_id=' .  $sub_row['course_id'] .  '">More Info</a>
           </div>
           </div>
     
       
<div style="clear:both"></div></div>
<?php       $i++;
      }
        ?>


      <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
      <!-- <div class="container"> -->
      <!-- <div class="row d-flex  justify-content-center "> -->

 
    </div>




    <!-- </div> -->
    <!-- </div> -->
    </div>
    </div>
  </section>