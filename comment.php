<?php
include 'add-comment.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Add Comment</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
 <script src="js/bootstrap.min.js"></script>
</head>

<body>
 <!-- start navigation -->
 <div class="nav-sec mb-5"
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 50px 0px;border-radius: 0px 0px 150px 150px;">
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
 </div>
 <!-- end navigation -->
 <!-- start comment -->
 <section class="pt-3 pb-3">
  <div class="container">
   <div class="row">
    <div class="col-md-7 m-auto mt-5">
     <div class="card">
      <div class="card-body bg-danger text-white p-3 ">
       <h3 class="card-title fs-3 text-center">ADD NEW Comment</h3>
      </div>
      <div class="card-text">
       <form action="" method="post" enctype="multipart/form-data">
        <div >
         <div class="form-group">
          <!-- <label>Comment Description</label> -->
          <textarea name="comment_desc" cols="30" rows="10" id="editor"></textarea>
         </div>
        </div>
        <div class="">
         <button type="submit" class="btn btn-danger m-2" name="btn_add">Add Comment</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- end comment -->
 <!-- <div class="footer"
  style="background-image:url('images/banner-bg.jpg');background-size: cover;background-repeat: no-repeat;padding: 50px 0px;border-radius: 150px 150px 0px 0px;">
 </div> -->
 <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
 <script>
  ClassicEditor
   .create(document.querySelector('#editor'), {
    autoParagraph: false,
  
   })
   .catch(error => {
    console.error(error);
   });
 </script>
</body>

</html>
