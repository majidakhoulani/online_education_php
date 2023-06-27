<?php 
include'connect_db.php';
session_start();
if(isset($_SESSION["password"]) && isset(($_SESSION["email"]))){
  $password=$_SESSION["password"];
  $email=$_SESSION["email"];

  $sql = "SELECT user_id FROM users WHERE user_email= '$email' AND user_password=' $password'";
  $result = $conn->query($sql);

if ($result!=false && $result->num_rows > 0) {
// output data of each row
$_SESSION['pass']= 'you are loggined';
die();
header("location:login.php");
die();
while($row = $result->fetch_assoc()) {
 // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
} else {
echo "0 results";
}
}
if(isset($_POST["user_name"]) && isset($_POST["email"]) && isset($_POST["password"])){
  // print_r($_POST);
   $userName=$_POST["user_name"];
   $password=$_POST["password"];
   $email=$_POST["email"];
 
   // die("there is data");
   if($userName=="" || $password=="" ||  $email==""){
      //echo("please enter all inputs");
      $_SESSION["error"]="please fill all inputs";
      die();
   }
   $sql ="INSERT INTO `users`(`user_name`,`user_email`,`user_password`) VALUES('$userName','$email','$password');";
   if($conn->query($sql)===TRUE){
       $_SESSION['email']= $email;
       $_SESSION['password']= $password;
       $_SESSION['pass']= 'you register correctly ok';
       //echo("New record created successfully");
       header("location:login.php");
       die();

       //echo("New record created successfully");
   }
   else{
       echo("Error:".$sql."<br>".$conn->error);
   }
   $conn->close();
  }
  else if($_SERVER['REQUEST_METHOD']==='POST'){
    // header("location:register.php?error=dont have access here");
   // $_SESSION["error"]="dont have access here";
 
 }
 else{
     // $_SESSION['error']="please login";
     // header("location:register.php");
     // die();
 }

?>
<?php 
include'connect_db.php';
session_start();
if(isset($_POST["password"]) && isset($_POST["email"])){
     $password=$_POST["password"];
     $email=$_POST["email"];
     if($password=="" ||  $email==""){
        $_SESSION["error"]="please fill all inputs";
     }
    }
    
if(isset($_SESSION["password"]) && isset(($_SESSION["email"]))){
    $password=$_SESSION["password"];
    $email=$_SESSION["email"];

    $sql = "SELECT user_id FROM users WHERE user_email= '$email' AND user_password=' $password'";
    $result = $conn->query($sql);

if ($result!=false && $result->num_rows > 0) {
  // output data of each row
  $_SESSION['email']=$email;
  $_SESSION['password']=$password;
  $_SESSION['pass']='login correctly';
  header("location:index.php");
//   die();
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
    $_SESSION['error']='pass and email error';
    header("location:login.php");
}
$conn->close();
}
// else if($_SERVER['REQUEST_METHOD']==='POST'){
//    // header("location:register.php?error=dont have access here");
//   $_SESSION["error"]="dont have access here";

// }
else{
   // $_SESSION['error']="please login with correct email and password";
    // header("location:register.php");
    // die();
}
?>


<!-- blog -->
<div class=" col-md-8  rounded-3">
            <div class="row ">
              <?php
              if($post_result->num_rows > 0){
                while($post_row =$post_result->fetch_assoc()) {
              ?>
              <div class="card d-flex flex-row mb-4 p-3"
                style="background: linear-gradient(90.9deg, rgb(3, 195, 195) 0.3%, rgb(37, 84, 112) 87.8%);">
                <div class="col-md-5">

                  <!-- <div class="col-md-12 d-flex flex-column mb-3" style="padding:0;"> -->
                  <div class="h-100 p-3">
                    <img src="<?php echo htmlentities($post_row['post_image']); ?>" class="img-fluid h-100" alt="">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="p-3 card-body">
                    <h3 class="fs-5"><?php echo htmlentities($post_row['post_title']); ?> </h3>
                    <hr class="w-50 text-muted bg-light">
                    <div class="blog-body">
                      <p class="fs-6 lh-2 text-white text-truncate"><?php echo htmlentities($post_row['post_description']); ?></p>
                      <hr class="w-100 text-muted bg-light">
                    </div>
                    <div class="blog-footer d-flex flex-row justify-content-between">
                      <p class="fs-6 text-white">By<span class=" p-1 fs-6"
                          style="color:#8fed8f;"><?php echo htmlentities($post_row['post_auth']); ?></span></p>
                      <p class="fs-6 text-white"><?php echo htmlentities($post_row['post_created_at']); ?></p>

                      <div class="d-flex flex-row justify-content-between">
                        <!-- love -->
                        <a href="#" style="color: #3b9895;" class="p-1"><i
                            class="fa fa-heart fa-lg"></i></a>

                        <!--like -->
                        <a href="#" style="color: #55acee;" class="p-1"><i
                            class="fa fa-thumbs-up fa-lg"></i></a>

                        <!-- dislike -->
                        <a href="#" style="color: #dd4b39;" class="p-1"><i
                            class="fa fa-thumbs-down fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- </div> -->
                </div>
              </div>
              <?php
                }
              }
                ?>

            </div>

          </div>

          <!-- end blog -->
          <!-- start contact -->
          <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h2 class="text-start  fw-bold mb-4  mt-4"  style="color:blue;">Contact Us</h2>
                                    <!-- <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div> -->
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm"
                                        novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="label fw-bold mb-1" for="name"  style="color:red">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="label fw-bold mb-1" for="email" style="color:red">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label  fw-bold mb-1" for="subject" style="color:red">Subject</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="label fw-bold mb-1 " for="#" style="color:red" >Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5">
                                    <img src="images/about3.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <section class="ftco-section pt-5 pb-5 background-one">
        <div class="container h-custom">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5 pt-3">
                    <h2 class="fs-1 home-h1">Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3 card  p-3" style="background-color:rgb(80, 158, 210)">
                                <div class=" w-100 text-center">
                                    <!-- <div class="icon d-flex align-items-center justify-content-center rounded-pill p-1 w-25 m-auto" style="background-color:#1acaca;"> -->
                                        <!-- <span class="fa fa-map-marker p-3 text-white" ></span> -->
                                        <!-- <img src="https://img.icons8.com/?size=512&id=63306&format=png" alt="" width="100" height="100"> -->
                                        <img width="96" height="96" src="https://img.icons8.com/color/96/telegram-app--v1.png" alt="telegram-app--v1"/>
                                    <!-- </div> -->
                                    <div class="text">
                                        <p class="fs-6  text-white"><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 card p-3 g-2" style="background-color:rgb(162, 236, 161)">
                                <div class=" w-100 text-center">
                                    <!-- <div class="icon d-flex align-items-center justify-content-center rounded-pill p-1 w-25 m-auto" style="background-color:#1acaca;">
                                        <span class="fa fa-phone p-3 text-white"></span>
                                    </div> -->
                                    <img width="96" height="96" src="https://img.icons8.com/color/96/itranslate.png" alt="itranslate"/>
                                    <div class="text">
                                        <p class="fs-6 text-white"><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 card p-3"  style="background-color:rgb(255, 240, 75)">
                                <div class="dbox w-100 text-center">
                                    <!-- <div class="icon d-flex align-items-center justify-content-center rounded-pill p-1 w-25 m-auto" style="background-color:#1acaca;">
                                        <span class="fa fa-paper-plane p-3 text-white"></span>
                                    </div> -->
                                    <img width="96" height="96" src="https://img.icons8.com/fluency/96/worldwide-location.png" alt="worldwide-location"/>
                                    <div class="text">
                                        <p class="fs-6  text-white"><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 card  p-3 g-2 "  style="background-color:rgb(244, 125, 125)">
                                <div class="dbox w-100 text-center">
                                    <!-- <div class="icon d-flex align-items-center justify-content-center rounded-pill p-1 w-25 m-auto" style="background-color:#1acaca;">
                                        <span class="fa fa-globe p-3 text-white"></span>
                                    </div> -->
                                    <img width="100" height="100" src="https://img.icons8.com/stickers/100/phone-not-being-used.png" alt="phone-not-being-used"/>
                                    <div class="text">
                                        <p class="fs-6  text-white"><span>Website</span> <a href="#">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <!-- contact -->
                    </div>
                </div>
            </div>
        </div>
    </section>
                        <!-- end contact -->
                        <div class="alert alert-danger" role="alert">
            <!-- <h4 class="alert-heading">Alert Heading</h4>
                            <p>Alert Content</p>
                            <hr> -->
            <p class="mb-0">
             <?php
             // if(isset($_GET['error']))
             // {
             //     echo($_GET['error']);
             // }
             if (isset($_SESSION['error'])) {
                 if ($_SESSION['error'] != '') {
                     echo $_SESSION['error'];
                     $_SESSION['error'] = '';
                 }
             }
             ?>
            </p>
           </div>