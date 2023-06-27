<?php
include 'articles-edit.php';
include 'articles-delete.php';

?>
<!Doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta http-equiv="Content-Language" content="en">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Manage Categories</title>
 <meta name="viewport"
  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
 <meta name="description" content="This is an example dashboard created using build-in elements and components.">
 <meta name="msapplication-tap-highlight" content="no">
 <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
 <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
  <div class="app-header header-shadow">
   <div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
     <div>
      <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
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
     <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
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
   include '../sider-navbar.php';
   ?>
   <div class="app-main__outer">
    <div class="app-main__inner">
     <section class="Courses-filter  Pt-3 pb-3 background-one">
      <div class="container">
       <div class=" text-start pb-3">
        <h1 class="fs-1 fw-bolder home-h1  pt-3">Manage Articles</h1>
       </div>
       <div class="Courses-filter-content d-flex flex-column justify-content-center ">
        <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
        <div class="container">
         <div class="row justify-content-center" id="manage_course">
          <div class="col-md-8 ">
           <div class="card mt-3 tab-card">
            <div class="card-header tab-card-header">
             <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <li class="nav-item">
               <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One"
                aria-selected="true">UPDATE</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two"
                aria-selected="false">DELETE</a>
              </li>
             </ul>
            </div>

            <div class="tab-content" id="myTabContent">
             <!-- tab content starts -->
             <!-- add new course tab starts -->

             <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

              <div class="card-body col-md-12">
               <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
                <div class="card-header bg-danger text-light p-2 cardh2">
                 <h3>UPDATE NEW ARTICLE</h3>
                </div>

                <div class="card-body small">
                 <form action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">

                   <label for="exampleFormControlSelect1">Article
                    Name</label>
                   <input type="text" name="article_title" id="article_name" value="<?php echo htmlentities($article_title); ?>">
                   <span id="desc_error" class="text-danger font-weight-bold"></span>
                  </div>


                  <div class="form-group">
                   <label for="pwd">article
                    Description</label>
                   <input type="text" name="article_description" id="article_desc" value="<?php echo htmlentities($article_desc); ?>">
                   <span id="desc_error" class="text-danger font-weight-bold"></span>
                  </div>

                  <div class="form-group">
                   <label for="pwd">article
                    Image</label>
                   <img src="<?php echo htmlentities($article_image); ?>" height="200px" width="200px" />
                   <input type="file" name="article_image" id="article_img" accept="image/*">
                   <span id="image_error" class="text-danger font-weight-bold"></span>
                  </div>

                  <div class="">
                   <button type="submit" class="btn btn-danger" name="btn_update">Submit</button>
                  </div>
                 </form>
                </div>
               </div>
              </div>
             </div>
             <!--  delete course tab starts -->
             <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
              <div class="card-body col-md-12">


               <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
                <div class="card-header bg-primary text-light p-2 cardh2 ">
                 <h3>Delete Article</h3>
                </div>

                <div class="card-body small">
                 <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">

                   <label for="exampleFormControlSelect1">Artcile
                    id</label>
                   <input type="number" name="article_id" value="<?php echo htmlentities($article_id); ?>">
                   <span id="desc_error" class="text-danger font-weight-bold"></span>
                  </div>

                  <div class="">
                   <button type="submit" class="btn btn-danger" name="btn-delete-course">Submit</button>
                  </div>
                 </form>


                </div>
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
    </div>
    <?php
    include '../admin-footer.php';
    ?>
   </div>
   <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
 </div>
 <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
 </script>

 <script type="text/javascript">
  $('#myTab a').on('click', function(e) {
   e.preventDefault()
   $(this).tab('show')
  });
 </script>
</body>

</html>
