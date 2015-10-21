<?php
include 'assets/php/connect.php';

session_start(); // Start the session

echo "
<!--
  Name: Artistarc
  Version: 2.0 Beta
  Author: KJ
  Website: http://rtistarc.in
  Support: http://_______.com
-->
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class='lt-ie7'> <![endif]-->
<!--[if IE 7]>     <html class='lt-ie8'> <![endif]-->
<!--[if IE 8]>     <html class='lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Artistarc . Home</title>

  <meta name='description' content=''>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel='icon' type='image/png' href='assets/_con/images/logo.png'>

  <!-- nanoScroller -->
  <link rel='stylesheet' type='text/css' href='assets/nanoScroller/nanoscroller.css' />

  <!-- Animate css -->
  <link rel='stylesheet' href='assets/animate.css/animate.css'>
   <script src='assets/wow.js/wow.min.js'></script>
              <script>
              new WOW().init();
              </script>
              
  <!-- FontAwesome -->
  <link rel='stylesheet' type='text/css' href='assets/font-awesome/css/font-awesome.min.css' />

  <!-- Material Design Icons -->
  <link rel='stylesheet' type='text/css' href='assets/material-design-icons/css/material-design-icons.min.css' />

  <!-- IonIcons -->
  <link rel='stylesheet' type='text/css' href='assets/ionicons/css/ionicons.min.css' />

  <!-- WeatherIcons -->
  <link rel='stylesheet' type='text/css' href='assets/weatherIcons/css/weather-icons.min.css' />

  <!-- Google Prettify -->
  <link rel='stylesheet' type='text/css' href='assets/google-code-prettify/prettify.css' />
  <!-- Main -->
  <link rel='stylesheet' type='text/css' href='assets/_con/css/_con.min.css' />

  
    <!-- jQuery -->
    <script src='assets/jquery/jquery.js'></script>
  
  <!--[if lt IE 9]>
    <script src='assets/html5shiv/html5shiv.min.js'></script>
  <![endif]-->
<!--   <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>
    $(document).ready(function() {
     alert('wtf');
    $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('#user-head').addClass('fadeOut');
      };
      });
      });
    </script>-->
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class='navbar-top'>
    <div class='nav-wrapper'>

      <!-- Sidebar toggle -->
      <a href='page-profile.html#' class='yay-toggle'>
        <div class='burg1'></div>
        <div class='burg2'></div>
        <div class='burg3'></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href='page-profile.html#!' class='brand-logo'>
        <img src='assets/_con/images/logo.png' alt='Con'>
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li><a href='page-profile.html#!' class='search-bar-toggle'><i class='mdi-action-search'></i></a>
        </li>
         <li><a href='page-profile.html#!' class='lighten-3 grey-text z-depth-0 chat-toggle'><i class='fa fa-comments'></i></a>
        </li>
        <li class='user'>
          <a class='dropdown-button' href='page-profile.html#!' data-activates='user-dropdown'>
            <img src='assets/_con/images/user.jpg' alt='John Doe' class='circle'>".$_SESSION['UserName']."<i class='mdi-navigation-expand-more right'></i>
          </a>

          <ul id='user-dropdown' class='dropdown-content'>
            <li><a href='page-profile.html'><i class='fa fa-user'></i> Profile</a>
            </li>
            <li><a href='mail-inbox.html'><i class='fa fa-envelope'></i> Messages <span class='badge new'>2</span></a>
            </li>
            <li><a href='page-profile.html#!'><i class='fa fa-cogs'></i> Settings</a>
            </li>
            <li class='divider'></li>
            <li><a href='assets/php/_logout.php'><i class='fa fa-sign-out'></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class='yaybar yay-shrink yay-hide-to-small yay-gestures'>

    <div class='top'>
      <div>
        <!-- Sidebar toggle -->
        <a href='page-profile.html#' class='yay-toggle'>
          <div class='burg1'></div>
          <div class='burg2'></div>
          <div class='burg3'></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href='page-profile.html#!' class='brand-logo'>
          <img src='assets/_con/images/logo-white.png' alt='Con'>
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class='nano'>
      <div class='nano-content'>

        <ul>
          <li>
            <a href='angularjs/index.html' class='waves-effect waves-blue'><i class='ion ion-social-angular'></i> Open Angular Version <span class='badge new'></span></a>
          </li>
          <li class='label'>Menu</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-dashboard'></i> Dashboards<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li>
                <a href='dashboard.html' class='waves-effect waves-blue'> Dashboard</a>
              </li>
              <li>
                <a href='dashboard-v1.html' class='waves-effect waves-blue'> Dashboard v1</a>
              </li>
            </ul>
          </li>

          <li>
            <a href='widgets.html' class='waves-effect waves-blue'><i class='fa fa-magic'></i> Widgets</a>
          </li>

          <li>
            <a href='layouts.html' class='waves-effect waves-blue'><i class='mdi mdi-av-web'></i> Layouts</a>
          </li>

          <li class='label'>Elements</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-css3'></i> CSS<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='css-alerts.html'><i class='mdi-alert-warning'></i> Alerts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-badges.html'><i class='mdi-action-stars'></i> Badges</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-colors.html'><i class='mdi-image-palette'></i> Colors</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-grid.html'><i class='mdi-action-dashboard'></i> Grid</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-helpers.html'><i class='mdi-action-help'></i> Helpers</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-icons.html'><i class='mdi-communication-invert-colors-on'></i> Icons</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-shadow.html'><i class='mdi-maps-layers'></i> Shadow</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-typography.html'><i class='fa fa-font'></i> Typography</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-cubes'></i> UI Elements<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ui-buttons.html'><i class='fa fa-square'></i> Buttons</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-cards.html'><i class='mdi-av-web'></i> Cards</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-collapsible.html'><i class='mdi-action-view-day'></i> Collapsible</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-collections.html'><i class='fa fa-server'></i> Collections</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-dropdown.html'><i class='mdi-navigation-arrow-drop-down-circle'></i> Dropdown</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-modals.html'><i class='fa fa-external-link'></i> Modals</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-pagination.html'><i class='mdi mdi-navigation-more-horiz'></i> Pagination</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-progress-bars.html'><i class='fa fa-tasks'></i> Progress Bars</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-tabs.html'><i class='mdi-action-tab-unselected'></i> Tabs</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-toasts.html'><i class='mdi-action-announcement'></i> Toasts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-tooltips.html'><i class='fa fa-comment-o'></i> Tooltips</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-waves.html'><i class='mdi-image-blur-on'></i> Waves</a>
              </li>

              <li><a class='waves-effect waves-blue' href='ui-search-bar.html'><i class='mdi-action-search'></i> Search Bar</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-image-panorama'></i> Media<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='media-hover-effects.html'><i class='mdi mdi-image-style'></i> Hover Effects</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-scroll-effects.html'><i class='fa fa-magic'></i> Scroll Effects</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-gallery.html'><i class='mdi mdi-image-collections'></i> Gallery</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-material-box.html'><i class='mdi mdi-image-collections'></i> Material Box</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-parallax.html'><i class='mdi mdi-image-panorama'></i> Parallax</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-player.html'><i class='mdi mdi-av-play-circle-outline'></i> Player</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-slider.html'><i class='mdi mdi-action-view-carousel'></i> Slider</a>
              </li>
            </ul>
          </li>

          <li class='label'>Components</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-check-square-o'></i> Forms<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='forms-base.html'><i class='fa fa-cube'></i> Base</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-advanced.html'><i class='fa fa-cubes'></i> Advanced</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-validation.html'><i class='fa fa-check-square-o'></i> Validation</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-editors.html'><i class='fa fa-edit'></i> Editors</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-checkout.html'> Checkout</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-contacts.html'> Contacts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-login.html'> Login</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-register.html'> Register</a>
              </li>
            </ul>
          </li>

          <li class='open'>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-globe'></i> Pages<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li class='active'><a class='waves-effect waves-blue' href='page-profile.html'>Profile</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-timeline.html'>Timeline</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-calendar.html'>Calendar</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-forgot-password.html'>Forgot Password</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-lock.html'>Screen Lock</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-sign-in.html'>Sign In</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-sign-up.html'>Sign Up</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-404.html'>404</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-500.html'>500</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-blank.html'>Blank</a>
              </li>
            </ul>
          </li>

          <li class='label'>Extra</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-envelope'></i> Mailbox<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='mail-inbox.html'><i class='mdi-content-inbox'></i> Inbox</a>
              </li>
              <li><a class='waves-effect waves-blue' href='mail-compose.html'><i class='mdi-content-add-circle'></i> Compose</a>
              </li>
              <li><a class='waves-effect waves-blue' href='mail-view.html'><i class='mdi-content-drafts'></i> View</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-action-shopping-cart'></i> eCommerce<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ecommerce-dashboard.html'><i class='fa fa-dashboard'></i> Dashboard</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-products.html'><i class='fa fa-tags'></i> Products</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-product-single.html'><i class='fa fa-tag'></i> Product Single</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-orders.html'><i class='fa fa-cart-plus'></i> Orders</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-order-single.html'><i class='fa fa-cart-plus'></i> Order Single</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-customers.html'><i class='fa fa-users'></i> Customers</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-settings.html'><i class='fa fa-cog'></i> Settings</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-invoice.html'><i class='ion ion-android-list'></i> Invoice</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-pricing-tables.html'><i class='fa fa-money'></i> Pricing Tables</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-bar-chart'></i> Charts<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='charts-flot.html'>Flot</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-rickshaw.html'>Rickshaw</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-sparkline.html'>Sparkline</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-nvd3.html'>NVD3</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-maps-place'></i> Maps<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='maps-google.html'>Google Maps</a>
              </li>
              <li><a class='waves-effect waves-blue' href='maps-vector.html'>Vector Maps</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-table'></i> Tables<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ui-tables.html'>Base Tables</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-datatables.html'>Data Tables</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-indent'></i> Menu Levels<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li>
                <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Second Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                <ul>
                  <li>
                    <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Third Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                    <ul>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Third Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                    <ul>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class='label'>Stats</li>
          <li class='content'>
            <span><i class='fa fa-spinner'></i> Server Load</span>
            <div class='progress small light-green lighten-4'>
              <div class='light-green accent-5' style='width: 37%'></div>
            </div>

            <span><i class='fa fa-thumbs-o-up'></i> User Satisfaction</span>
            <div class='progress small'>
              <div style='width: 91%'></div>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->

  <!-- Main Content -->
  <section class='content-wrap'>

    <!-- Breadcrumb -->
    <div class='page-title wow slideInDown user-head' id='user-head' data-wow-duration='2s' style='height:150px'>

      <div class='row '>
        <div class='col s12 m9 l10 '>
          <h1>Profile</h1>

         <!-- <ul>
            <li>
              <a href='page-profile.html#'><i class='fa fa-home'></i> Home</a>  <i class='fa fa-angle-right'></i>
            </li>

            <li><a href='dashboard.html'>Dashboard</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='page-profile.html#'>Pages</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='page-profile.html'>Profile</a>
            </li>
          </ul>-->
        </div>
        <!--<div class='col s12 m3 l2 right-align'>
          <a href='page-profile.html#!' class='btn grey lighten-3 grey-text z-depth-0 chat-toggle'><i class='fa fa-comments'></i></a>
        </div>-->
      </div>

    </div>
    <!-- /Breadcrumb -->
   
    
<!--********************-->
<!-- [ Main Container ] -->
<!--********************-->

  <div class='row sortable'>
  
  <!--********************-->
  <!-- [ Container #1 ] -->
  <!--********************-->

  <div class='col s12 l3'>
  
  <!-- Statistics -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-bar-chart'></i> Statistics</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row center-align' style='margin-top: 0'>
              <div class='col m6 s12'>
                <strong>87</strong>
                <h5>Following</h5>
              </div>
              <div class='col m6 s12'>
                <strong>12</strong>
                <h5>Followers</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- /Statistics -->
        
        <!-- Read Messages -->
        
       <div class='card-panel mail-card'>
          <div class='row'>
            <div class='col s8'>
             <a href=''>
               <strong><b>Dianne Chambers</b></strong>
             </a>
            </div>
            <div class='col s4 right-align'>
              <small>9:02 AM</small>
            </div>
          </div>
          <div class='row'>
            <div class='col'>
            <a href='mail-view.html'> 
              Ut feugiat tempus felis, sit amet mattis dolor accumsan quis. Aenean pharetra tempus justo, vitae euismod ipsum congue a.
            </a>
          </div>
          </div>
          <hr>
          <div class='row'>
            <div class='col s8'>
             <a href=''>
               <strong><b>Dianne Chambers</b></strong>
             </a>
            </div>
            <div class='col s4 right-align'>
              <small>12:18 AM</small>
            </div>
          </div>
          <div class='row'>
            <div class='col'>
            <a href='mail-view.html'> 
              Lorium ipsum fesdgiat sdsemp us fasdad, lkl qdt kklsnk dolor accumsan. Aenean pharetra tempus justo, vitae iosta mito uchiha.
            </a>
          </div>
          </div>
        </div>
        
        <!-- /Read message>
        
        <!-- Send Message -->
        <div class='card'>
          <div class='title'>
            <h5><i class='fa fa-user'></i> Send Message</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <form action='page-profile.html#!'>
              <div class='input-field'>
                <textarea id='textarea1' class='materialize-textarea' name='message'></textarea>
                <label for='textarea1'>Send me message</label>
              </div>
              <button class='btn'>Send</button>
            </form>
          </div>
        </div>
        <!-- /Send Message -->
        
        
         <!-- Troops -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='mdi-social-people'></i> Troops</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row ' style='margin-top: 0'>
            
              <div class='col m12 s12'>
                <strong><h5>FaadFactory<span class='badge'>1</span></h5></strong>
                <!-- &nbsp;&nbsp;&nbsp;13 -->
              </div>
              
              <div class='col m12 s12' style='padding-bottom:0px; padding-right: 33px;'>
                <strong><h5>Tesico<span class='new badge'>4</span></h5></strong>
                <!-- &nbsp;&nbsp;&nbsp;27 -->
              </div>

              <div class='col m12 s12' style='padding-bottom:'>
                <h4><strong>
                <a class='waves-effect waves-light modal-trigger right' href='#modal1' data-dismissible='true' data-opacity='0.6' data-induration='400' data-outduration='300'>
                &nbsp;<span class='new mdi-social-group-add right'></span>
                </a></strong></h4>
                <!-- &nbsp;&nbsp;&nbsp;27 -->
              </div>
              
            <!-- Modal Structure -->
                <div id='modal1' class='modal'>
                <div class='modal-content'>
                   <h4>Create a Troop</h4>
                   <p><br></p>
                   <p><form id='form_create_troop' action='' accept-charset='UTF-8' method='post' role='form'>
                   <div class='input-field align-center'>
                     <input id='troop_name' type='text' class='validate'>
                     <label for='troop_name'>Enter Troop Name</label>
                     <button class='btn' type='submit' name='action'>
                     Submit <i class='mdi-content-send right'></i>
                     </button>
                   </div></form></p>
                </div>
                <div class='modal-footer'>
                <a href='#!' class='modal-action modal-close waves-effect waves-red btn-flat '>[x] Close</a>
            <!--<a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat '>Agree</a> -->
                </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /Troops -->

        
        <!-- Skills -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-trophy'></i> Skills</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <a href='page-profile.html#!' class='skill'>JavaScript</a>
            <a href='page-profile.html#!' class='skill'>CSS3</a>
            <a href='page-profile.html#!' class='skill'>HTML5</a>
            <a href='page-profile.html#!' class='skill'>jQuery</a>
            <a href='page-profile.html#!' class='skill'>AngularJS</a>
            <a href='page-profile.html#!' class='skill'>Bootstrap</a>
            <a href='page-profile.html#!' class='skill'>PHP</a>
            <a href='page-profile.html#!' class='skill'>MySQL</a>
          </div>
        </div>
        <!-- /Skills -->

  </div>
  
  
  <!--********************-->
  <!-- [ Container #2 ] -->
  <!--********************-->
  
  <div class='col s12 l6'>
  
          <div class='card-panel'>
          <form action='' accept-charset='UTF-8' id='form_update_post' method='post' role='form' >
            <!-- To -->
            <div class='input-field'>
              <input id='post_body' type='text' class='validate' value='' name='post_body'>
              <label for='post_body'>Share Your Art</label>
            </div>
            <button class='btn' type='submit' name='action'>
                 Share <i class='mdi-content-send right'></i>
            </button>
            <!-- /To -->
          </form>
          
        </div>
        
        <div class='card'>
        <div class='title'>
	    <h5>Test</h5>
	    <a class='close' href='#'>
	      <i class='mdi-content-clear'></i>
	    </a>
	    <a class='minimize' href='#'>
	      <i class='mdi-navigation-expand-less'></i>
	    </a>
	</div>
		<figure class='hover-effect effect-zoe'>
		<img src='assets/_con/images/image-2.jpeg' style='width:100%;height:200px;'>
<!-- 	        <span class='card-title' style='background'>Card Title</span> -->
		<figcaption>
                <h2>Creative <span>Zoe</span></h2>
                <p class='icon-links'>
                <a href='media-hover-effects.html#'><span class='fa fa-heart-o'></span></a>
                <a href='media-hover-effects.html#'><span class='fa fa-eye'></span></a>
                <a href='media-hover-effects.html#'><span class='fa fa-paperclip'></span></a>
              </p>
              <p class='description'>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
            </figcaption>
          </figure>
	  <div class='content'>
	    I am a very simple card. I am good at containing small bits of information.
	    I am convenient because I require little markup to use effectively.
	    
	    <a href='#!'>This is a link</a>
	</div>
	  <div class='card-action'>
	    <a class='' href='#' style='color:black'>
	      <i class='fa fa-star-o'></i>
	    </a>
	    <a class='' href='#' style='color:black'>
	      <i class='fa fa-comment'></i></i>
	    </a>
	    <a class='' href='#' style='color:black'>
	      <i class='fa fa-share'></i>
	    </a>
	  </div>
	</div>
        
          <!-- test -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-bar-chart'></i> Statistics</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row center-align' style='margin-top: 0'>
              <div class='col m6 s12'>
                <strong>87</strong>
                <h5>Following</h5>
              </div>
              <div class='col m6 s12'>
                <strong>12</strong>
                <h5>Followers</h5>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /test -->
        
  </div>
  
  
  <!--********************-->
  <!-- [ Container #3 ] -->
  <!--********************-->
  
  <div class='col s12 l3'>
  
        <!-- Customer -->
          <div class='card'>
            <div class='title'>
              <h5>Artists</h5>
               <a class='close' href='#'>
	        <i class='mdi-content-clear'></i>
	       </a>
              <a class='minimize' href='ecommerce-order-single.html#'>
                <i class='mdi-navigation-expand-less'></i>
              </a>
            </div>
            <div class='content'>

              <div class='row no-margin-top'>
              
                <div class='col s12 l5'>
                  <img width='100' src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>
                </div>
                
                <div class='col s12 l7'>
                  <h4>Patsy Griffin</h4>
                  6008 Cotton Nook, Arminto,
                  <br>Montana, 59114-7319, US,
                  <br><i class='mdi-communication-phone'></i> (406) 500-7506
                </div>
              </div>

              <div class='row'>
            <div class='col s6'>
              <a href='#' class='btn waves-effect'>See</a>
            </div>
            <div class='col s6 right-align'>
              <h5><i class='fa fa-users'></i> 185</h5>
            </div>
          </div>
              
            </div>
          </div>
        <!-- /Customer -->
  
        <!-- to-Do -->
  
         <div class='card-panel todo-card'>
           <div class='todo-task'>
             <input type='checkbox' id='checkbox1' checked='checked'>
             <label for='checkbox1'>Change passwords on accounts <span class='todo-remove mdi-action-delete'></span></label>
           </div>
 
           <div class='todo-task'>
             <input type='checkbox' id='checkbox2'>
             <label for='checkbox2'>Make video for Youtube <span class='todo-remove mdi-action-delete'></span></label>
           </div>
 
           <div class='todo-task'>
             <input type='checkbox' id='checkbox3'>
             <label for='checkbox3'>Gain popularity on Envato <span class='todo-remove mdi-action-delete'></span></label>
           </div>
 
           <div class='input-field'>
             <input id='todo-add' type='text'>
             <label for='todo-add'>Add New</label>
           </div>
         </div>
        <!-- /to-Do -->
  
  
  <!-- Statistics -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-bar-chart'></i> Statistics</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row center-align' style='margin-top: 0'>
              <div class='col m6 s12'>
                <strong>87</strong>
                <h5>Following</h5>
              </div>
              <div class='col m6 s12'>
                <strong>12</strong>
                <h5>Followers</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- /Statistics -->
  </div>
</div>

  </section>
  <!-- /Main Content -->

  <!-- Search Bar -->
  <div class='search-bar'>
    <div class='layer-overlay'></div>
    <div class='layer-content'>
      <form action='' id='form_search_box'>
        <!-- Header -->
        <a class='search-bar-toggle grey-text text-darken-2' href='page-profile.html#!'><i class='mdi-navigation-close'></i></a>

        <!-- Search Input -->
        <div class='input-field'>
        <form action='search/_search.php'>
        
          <i class='mdi-action-search prefix'></i>
          
          <input type='text' name='con-search' placeholder='Search...'>
        </form>
        </div>

        <!-- Search Results -->
        <div class='search-results'>

        <!-- search 2 test -->
        
        <div class='row'>
           <div class='col s12 l12'>
             
             <script type='text/javascript'>
               function getmydata(p){
               var page=p;
               $('#loadingmessage').show();  // show the loading message.
               $.ajax({
                 url: 'search/_search.php',
                 type: 'POST',
                 cache: false,
                 data: '&search_querry='+ page,
                 success : function(html){
                 $('#results').html(html);
                  $('#loadingmessage').hide(); // hide the loading message
                 }
               });
              }
            </script>
            <input type='text' onkeyup='getmydata(this.value)'/>
            <br><div id='loadingmessage' style='display:none'>
            Loading...
            </div>
            <div id='results'></div>
             
           </div>
        </div>
        
        <!-- / search 2 test -->
        
          <div class='row'>
            <div class='col s12 l4'>
              <h4>Users</h4>

              <div class='each-result'>
                <img src='assets/_con/images/user2.jpg' alt='Felecia Castro' class='circle photo'>
                <div class='title'>Felecia Castro</div>
                <div class='label'>Content Manager</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user3.jpg' alt='Max Brooks' class='circle photo'>
                <div class='title'>Max Brooks</div>
                <div class='label'>Programmer</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>
                <div class='title'>Patsy Griffin</div>
                <div class='label'>Support</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user6.jpg' alt='Vernon Garrett' class='circle photo'>
                <div class='title'>Vernon Garrett</div>
                <div class='label'>Photographer</div>
              </div>
            </div>
            <div class='col s12 l4'>
              <h4>Troops</h4>

              <div class='each-result'>
                <div class='icon circle blue white-text'>MD</div>
                <div class='title'>Material Design</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle teal white-text'>
                  <i class='fa fa-dashboard'></i>
                </div>
                <div class='title'>Admin Dashboard</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle orange white-text'>RD</div>
                <div class='title'>Responsive Design</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle red white-text'>
                  <i class='fa fa-tablet'></i>
                </div>
                <div class='title'>Mobile First</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>
            </div>
            <div class='col s12 l4'>
              <h4>Posts</h4>

              <div class='no-result'>No results were found ;(</div>
            </div>
          </div>

        </div>

      </form>
    </div>
  </div>
  <!-- /Search Bar -->



  <!--
  Chat
    .chat-light - light color scheme
-->
  <div class='chat'>
    <div class='layer-overlay'></div>

    <div class='layer-content'>

      <!-- Contacts -->
      <div class='contacts'>
        <!-- Top Bar -->
        <div class='topbar'>
          <a href='page-profile.html#!' class='text'>Chat</a>
          <a href='page-profile.html#!' class='chat-toggle'><i class='mdi-navigation-close'></i></a>
        </div>
        <!-- /Top Bar -->

        <div class='nano'>
          <div class='nano-content'>

            <span class='label'>Online</span>

            <div class='user'>
              <img src='assets/_con/images/user2.jpg' alt='Felecia Castro' class='circle photo'>

              <div class='name'>Felecia Castro</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user3.jpg' alt='Max Brooks' class='circle photo'>

              <div class='name'>Max Brooks</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>

              <div class='name'>Patsy Griffin</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user5.jpg' alt='Chloe Morgan' class='circle photo'>

              <div class='name'>Chloe Morgan</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user6.jpg' alt='Vernon Garrett' class='circle photo'>

              <div class='name'>Vernon Garrett</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user7.jpg' alt='Greg Mcdonalid' class='circle photo'>

              <div class='name'>Greg Mcdonalid</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user8.jpg' alt='Christian Jackson' class='circle photo'>

              <div class='name'>Christian Jackson</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>


            <span class='label'>Offline</span>

            <div class='user'>
              <img src='assets/_con/images/user9.jpg' alt='Willie Kelly' class='circle photo'>

              <div class='name'>Willie Kelly</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user10.jpg' alt='Jenny Phillips' class='circle photo'>

              <div class='name'>Jenny Phillips</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user11.jpg' alt='Darren Cunningham' class='circle photo'>

              <div class='name'>Darren Cunningham</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user12.jpg' alt='Sandra Cole' class='circle photo'>

              <div class='name'>Sandra Cole</div>
              <div class='status'>Lorem status</div>
            </div>

          </div>
        </div>
      </div>
      <!-- /Contacts -->

      <!-- Messages -->
      <div class='messages'>

        <!-- Top Bar with back link -->
        <div class='topbar'>
          <a href='page-profile.html#!' class='chat-toggle'><i class='mdi-navigation-close'></i></a>
          <a href='page-profile.html#!' class='chat-back'><i class='mdi-hardware-keyboard-arrow-left'></i> Back</a>
        </div>
        <!-- /Top Bar with back link -->

        <!-- All messages list -->
        <div class='list'>
          <div class='nano scroll-bottom'>
            <div class='nano-content'>

              <div class='date'>Monday, Feb 23, 8:23 pm</div>

              <div class='from-me'>
                Hi, Felicia.
                <br>How are you?
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Hi! I am good!
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                Glad to see you :)
                <br>This long text is intended to show how the chat will display it.
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Also, we will send the longest word to show how it will fit in the chat window: <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
              </div>

              <div class='date'>Friday, Mar 10, 5:07 pm</div>

              <div class='from-me'>
                Hi again!
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Hi! Glad to see you.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                I want to add you in my Facebook.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                Can you give me your page?
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>I do not use Facebook. But you can follow me in Twitter.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                It's good idea!
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>You can find me here - <a href='https://twitter.com/nkdevv'>https://twitter.com/nkdevv</a>
              </div>

            </div>
          </div>
        </div>
        <!-- /All messages list -->

        <!-- Send message -->
        <div class='send'>
          <form action='page-profile.html#!'>
            <div class='input-field'>
              <input id='chat-message' type='text' name='chat-message'>
            </div>

            <button class='btn waves-effect z-depth-0'><i class='mdi-content-send'></i>
            </button>
          </form>
        </div>
        <!-- /Send message -->

      </div>
      <!-- /Messages -->
    </div>

  </div>
  <!-- /Chat -->

  <footer>&copy; 2015 <strong>Artistarc</strong>. All rights reserved. <a href='http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK'></a>
  </footer>
    
  <!-- Main js -->
  <script type='text/javascript' src='assets/php/main.js'></script>

  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type='text/javascript' src='assets/_con/js/_demo.js'></script>

  <!-- jQuery -->
  <script type='text/javascript' src='assets/jquery/jquery.min.js'></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type='text/javascript' src='assets/jqueryRAF/jquery.requestAnimationFrame.min.js'></script>

  <!-- nanoScroller -->
  <script type='text/javascript' src='assets/nanoScroller/jquery.nanoscroller.min.js'></script>

  <!-- Materialize -->
  <script type='text/javascript' src='assets/materialize/js/materialize.min.js'></script>

  <!-- Sortable -->
  <script type='text/javascript' src='assets/sortable/Sortable.min.js'></script>

  <!-- Main -->
  <script type='text/javascript' src='assets/_con/js/_con.min.js'></script>


  <!-- Google Prettify -->
  <script type='text/javascript' src='assets/google-code-prettify/prettify.js'></script>
</body>

</html>

     ";
?>