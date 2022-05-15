<?php
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(!isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}
	
?>

<!doctype html>
<html lang="en">
  <head>
    <title>
	<?php 
	echo $_SESSION['course'].'-'.$_SESSION['fullname'];	
	?>
	
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="LearnO International is a renowned virtual educational,skill and counselling agency in Nigeria specialized in the dymystification of academic knowledge and skills in terms of
			     rendering educational services, skill acquisition, counselling and other instructional services to respective clients online">
    
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="<?php echo GEN_WEBSITE.'/my-course.php'; ?>"><img src="images/logo.png" title="learnOinternational logo" alt="learnOinternational logo" style="height:100px;"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo GEN_WEBSITE.'/my-course.php'; ?>">Course Home</a>
              </li>
             <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">link1</a>
                  <a class="dropdown-item" href="#">link2</a>
                  <a class="dropdown-item" href="#">link3</a>
                  <a class="dropdown-item" href="#">link4</a>
                </div>

              </li>-->

             
              
              <!--<li class="nav-item">
                <a class="nav-link" href="">link5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">link5</a>
              </li>-->
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <?php 
				if(isset($_SESSION['user_id'])){
					echo '<a href="logout.php">Logout</a>';
				}
				
				?>
				
				
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
	
	
	
	<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Welcome to <?php echo $_SESSION['course'];?></h2>
               <h3 class="heading text-center mb-4"><?php echo $_SESSION['fullname'].'<br>'.$_SESSION['registration_no'];?></h3>
               <!-- <p class="text-center mb-5">We have plethoral of courses to improve your knowledge and skills.</p>
                <p class="text-center"><a href="register.php" class="btn py-3 px-5">Register</a></p>-->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
	
	  
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <a class="navbar-brand absolute" href="<?php echo GEN_WEBSITE.'/my-course.php'; ?>"><img src="images/logo.png" title="learnOinternational logo" alt="learnOinternational logo" style="height:100px;"/></a>
            
          </div>
          
		  <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-12">
                <ul class="list-unstyled">
                  <li><a href="<?php echo GEN_WEBSITE.'/my-course.php'; ?>">Course Home</a></li>
				   <li>
                <?php 
				if(isset($_SESSION['user_id'])){
					echo '<a href="logout.php">Logout</a>';
				}
				
				?>
				
				
              </li>
				</ul>
              </div>
            </div>
          </div>
       
          <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Enter address in full</span></li>
                <li><a href="tel:0814 734 8556"><span class="icon ion-ios-telephone"></span><span class="text">0814 734 8556</span></a></li>
                <li><a href="mailto:info@learnointernational.com.ng"><span class="icon ion-android-mail"></span><span class="text">info@learnointernational.com.ng</span></a></li>
              
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left">
Copyright &copy; <?php 
					$COPYYEAR = 2020;
					$curyear = date('Y');
					echo $COPYYEAR. (($COPYYEAR != $curyear)? '-' . $curyear : '');
					?>  All rights reserved | This was created by <a href="https://www.facebook.com/designsbyblocks" target="_blank" class="text-primary">Designs by Blocks</a>
</p>
            <p class="float-md-right">
            

            </p>
          </div>
        </div>
      </div>
    </footer>
  
  
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>