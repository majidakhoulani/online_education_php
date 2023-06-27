<?php
include '../connect_db.php';
session_start();
?>
<!Doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta http-equiv="Content-Language" content="en">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Admin Dashboard.</title>
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
   include 'sider-navbar.php';
   ?>
   <div class="app-main__outer">
    <div class="app-main__inner">
     <?php include 'dashboard-content.php'; ?>
    </div>
    <?php
    include 'admin-footer.php';
    ?>
   </div>
   <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
 </div>
 <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
 </script>
</body>
</html>
