<?php 
include'../../connect_db.php';
session_start();
$sql="SELECT * FROM articles";
$result=$conn->query($sql);
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Show Articles</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
     <?php 
     include'../sider-navbar.php';
     ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                <div>
            <button class="btn btn-success"><a href="articles-manage-add.php" class="text-white">Add
                Article</a></button>
          </div>
                 <!-- Start Blog  -->
      <div class="latest-blog">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Articles</h1>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
              ?>
                <div v class="col-md-4 col-lg-4 col-xl-3 border border-info m-2 p-0">
                    <div class="blog-box">
                        <div class="blog-img">
                          <!-- images/blog-img.jpg -->
                            <img class="img-fluid" src="../../<?php echo htmlentities($row['post_image'])?>" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3  class="p-3 text-primary" style="font-size:16px"><?php echo htmlentities($row['post_title'])?></h3>
                                <p class="pb-3 pl-3 text-dark"><?php echo htmlentities($row['post_description'])?></p>
                                <p class="pb-3 pl-3 text-success"><?php echo htmlentities($row['post_auth'])?></p>
                                <p class="pb-3 pl-3 text-danger"><?php echo htmlentities($row['post_created_at'])?></p>
                            </div>
                            <div class="edit-blog p-3">
                          <form action="articles-manage.php" method="get">
                            <input type="hidden" name="id" value="<?php echo($row["post_id"])?>">
                            <input type="submit" value="edit" class="btn btn-primary btn-md">
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
    </div>
    <!-- End Blog  -->
                </div>
                <?php 
     include'../admin-footer.php';
     ?>
            </div>
            <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>
</body>

</html>

