<?php
include'../connect_db.php';
session_start();
// if(isset( $_SESSION['password']) && isset(( $_SESSION['email']))){
//   $password=$_SESSION["password"];
//   $email=$_SESSION["email"];
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
// else{
// $_SESSION['error']="password is changed";
// header("location:register.php");
// die();
// }
// }
// else{
//   $_SESSION['error']="please login";
//   header("location:login.php");
//   die();
// }
// $course_id=$_GET['course_id'];
// $register_query = "SELECT course_id, user_id  FROM  registration ";
// $reg_result=$conn->query($register_query);
// if($reg_result->num_rows > 0){
//   while( $reg_row = $reg_result->fetch_assoc())
//  {
//   $user_id=$reg_row['user_id'];
//   $course_id=$reg_row['course_id'];
//  }
// }
// $course_query = "SELECT * FROM courses WHERE 	course_id = '$course_id'";
// $course_result = $conn->query($course_query);
// while ($sub_row = mysqli_fetch_array($course_result)) {
// $user_courses_query = "SELECT * FROM courses , users  When course_id =  '$course_id' and user_id =  '$user_id'";
// $user_courses_result=$conn->query($user_courses_query );
$register_query = "SELECT c.course_id, course_name  FROM  registration  sc INNER JOIN courses c ON c.course_id = sc.course_id WHERE sc.user_id =   $user_id";
$reg_result=$conn->query($register_query);
if($reg_result->num_rows > 0){
//   while( $reg_row = $reg_result->fetch_assoc())
//  {
//   $user_id=$reg_row['user_id'];
//   $course_id=$reg_row['course_id'];
//  }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Education Website</title>

 <!-- <link href="aos/aos.css" rel="stylesheet"> -->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
 <link rel="stylesheet" href="https://cdn.cryptofonts.com/1.4.0/cryptofont.css"> -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <!-- <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    -->
 <link rel="stylesheet" href="../css/style.css">

 <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script> -->
 <script src="../js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>
 <!-- //navigation -->
 <main class="nav-sec">

  <!-- <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/1.gif" alt="" class="img-fluid" width="40px" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link text-white " href="admin/admin-dashboard.php">Admin</a>
            </li>
              <li class="nav-item">
              <a class="nav-link text-white " href="users/profile.html">profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="register.php">Resgister Now</a>
            </li>

          </ul>

          <form class="d-flex">
            <input class="form-control me-2 p-2" type="search" placeholder="What do you want to learn"
              aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav> -->
  <!-- <section class="hero home-content  text-center"> -->
  <!-- <div id="particles-js">
            </div> -->
  <!-- <h1 class="fs-1 fw-bolder" style="color:#40f4f4;">Learn best Online Courses</h1> -->
  <!-- <p class="fs-5  fw-bold home-p text-white">50,000 Online Courses for you</p> -->
  <!-- <div class=" home-search pb-3 py-3 w-25"> -->
  <!-- <form class="d-flex w-100">
                    <input class="form-control me-2 p-2" type="search" placeholder="What do you want to learn"
                        aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form> -->
  <!-- </div> -->
  <!-- <div class="home-image w-50 p-3 bg-danger">
             
            </div> -->
  <!-- </section> -->
 </main>
 <section class="profile pt-3 pb-3">
  <div class="container">
   <div class="main-body">

    <!-- Breadcrumb -->
    <!-- <nav aria-label="breadcrumb" class="main-breadcrumb bg-secondary p-2">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
      <li class="breadcrumb-item active" aria-current="page">User Profile</li>
     </ol>
    </nav> -->
    <!-- /Breadcrumb -->

    <div class="row gutters-sm">
     <div class="col-md-4 mb-3">
      <div class="card">
       <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
        <!-- https://bootdey.com/img/Content/avatar/avatar7.png -->
         <img src="" alt="Admin" class="rounded-circle"
          width="150">
         <div class="mt-3">

          <h4> <?php echo $user_name; ?></h4>
          <p class="text-secondary mb-1">Full Stack Developer</p>
          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
          <button class="btn btn-primary">Follow</button>
          <button class="btn btn-outline-primary">Message</button>
         </div>
        </div>
       </div>
      </div>
      <div class="card mt-3">
       <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
         <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
           <circle cx="12" cy="12" r="10"></circle>
           <line x1="2" y1="12" x2="22" y2="12"></line>
           <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg>Website</h6>
         <span class="text-secondary">https://bootdey.com</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
         <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
           <path
            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
           </path>
          </svg>Github</h6>
         <span class="text-secondary">bootdey</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
         <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
           <path
            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
           </path>
          </svg>Twitter</h6>
         <span class="text-secondary">@bootdey</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
         <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
           <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
           <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
           <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>Instagram</h6>
         <span class="text-secondary">bootdey</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
         <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
           <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
          </svg>Facebook</h6>
         <span class="text-secondary">bootdey</span>
        </li>
       </ul>
      </div>
     </div>
     <div class="col-md-8">
      <div class="card mb-3">
       <div class="card-body">
        <div class="row">
         <div class="col-sm-3">
          <h6 class="mb-0">Full Name</h6>
         </div>
         <div class="col-sm-9 text-secondary">
          <?php echo $user_name; ?>
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-sm-3">
          <h6 class="mb-0">Email</h6>
         </div>
         <div class="col-sm-9 text-secondary">
          <?php echo $user_email; ?>
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-sm-3">
          <h6 class="mb-0">Phone</h6>
         </div>
         <div class="col-sm-9 text-secondary">
          (239) 816-9029
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-sm-3">
          <h6 class="mb-0">Mobile</h6>
         </div>
         <div class="col-sm-9 text-secondary">
          (320) 380-4539
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-sm-3">
          <h6 class="mb-0">Address</h6>
         </div>
         <div class="col-sm-9 text-secondary">
          Bay Area, San Francisco, CA
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-sm-12">
          <a class="btn btn-info " target="__blank"
           href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
         </div>
        </div>
       </div>
      </div>

      <div class="row">
       <div class="col-sm-6 col-md-6 mb-3">

        <!--//benefits-section-->
        <div class="card h-100">
         <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">my</i>Courses</h6>
          <?php 
                      while( $reg_row = $reg_result->fetch_assoc()){
                       
                      ?>
          <small><?php echo htmlentities($reg_row['course_name']); ?></small>
          <div class="progress mb-3" style="height: 5px">
           <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <?php
                      }
                    }?>
          <small>Website Markup</small>
          <div class="progress mb-3" style="height: 5px">
           <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>One Page</small>
          <div class="progress mb-3" style="height: 5px">
           <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>Mobile Template</small>
          <div class="progress mb-3" style="height: 5px">
           <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small>Backend API</small>
          <div class="progress mb-3" style="height: 5px">
           <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>

         </div>
        </div>
       </div>
      </div>





     </div>
    </div>

   </div>
  </div>
 </section>



 <!-- <script src="aos/aos.js"></script> -->
 <!-- <script src="swiper/swiper-bundle.min.js"></script> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
 <!-- <script src="particles.js-master/particles.min.js"></script> -->
 <!-- <script src="/particles.js-master/demo/js/app.js"></script> -->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
 <!-- <script src="js/bootstrap.min.js"></script> -->
 <!-- <script src="js/number-rush.js"></script> -->

 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

 <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script> -->

 <script src="../js/script.js"></script>
 <!-- <script type="text/javascript">
  $('#myTab a').on('click', function(e) {
   e.preventDefault()
   $(this).tab('show')
  });
 </script> -->
</body>

</html>
