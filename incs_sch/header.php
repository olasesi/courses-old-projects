<!doctype html>
<html lang="en">
  <head>
    <title>
	<?php 
	if(isset($page_title)){
		echo ($page_title);
	}else{
	echo 'LearnO International';	
	}
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
          <a class="navbar-brand absolute" href="index.php"><img src="images/logo.png" title="learnOinternational logo" alt="learnOinternational logo" style="height:100px;"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo GEN_WEBSITE; ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="virtual-tutorials.php">Virtual Tutorial</a>
                  <a class="dropdown-item" href="virtual-skills-acquisition.php">Virtual Skills Acquisition</a>
                  <a class="dropdown-item" href="virtual-counseling.php">Virtual Counseling</a>
                  <a class="dropdown-item" href="virtual-practicals.php">Virtual Practicals</a>
                </div>

              </li>

             
              
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <?php 
				if(isset($_SESSION['user_id'])){
					echo '<a href="logout.php">Logout</a>';
				}else{
					echo '<a href="login.php">Sign in</a> / <a href="register.php">Register</a>';
					
				}
				
				?>
				
				
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>