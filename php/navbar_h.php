<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top wat" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <h3 style="margin-top:-5px"  id="mobile-nav">Artistarc
                  <small> BETA
                        <span class=" glyphicon glyphicon-menu-hamburger"  style="margin-left:10px;color:white" aria-hidden="true" id="mobile-nav"></span>
                  </small></h3></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                </ul>
                
                <div>
                <ul class="nav navbar-nav" style="float:right;padding-right:15px;">
                    <li>
                        <a href="#">
	                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
	                        <span class=" glyphicon glyphicon-bell" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
	                    <a href="" style="padding: 10px;" class="dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    <img src="./img/user_profile/0001.jpg" class="img-circle usr-pic"></a>
		                    <ul class="dropdown-menu">
                                        <li><a href=""><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href=""><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href=""><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="./php/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
	                            </ul>
                    </li>
                </ul>
                </div>
            </div> 
            <!-- /.navbar-collapse -->
                       <!-- <div class="navbar-header user-settings" style="float:right">
                        
	                    <a href="" style="padding: 10px;" class="dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                    <img src="./img/user_profile/0001.jpg" class="img-circle usr-pic">
	                    </a>
	                    <ul class="dropdown-menu">
		                    <li id="body"><h4 class="text-center"><small><?php echo $_SESSION['UserName'] ; ?></small><h4></li>
                                    <li><a href=""><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href=""><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href=""><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="./php/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
	                 </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- hamburger menu -->

    <!-- hamburger -->
    <script src="js/main.js"></script>
    
    <nav id="n-nav" >
      <ul class="n-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Works</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>