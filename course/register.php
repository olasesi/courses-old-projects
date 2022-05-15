<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}

$page_title = 'Registration to Learno International';

include("../incs_sch/header.php"); 	

?>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap" style="margin-top:20px;">
              <h2 class="mb-5">Choose Course to register</h2>
             
			 <p>
			 <a href="virtual-tutorials.php" class="btn btn-primary btn-block" role="button">Virtual Tutorials </a>
			  <a href="virtual-skills-acquisition.php" class="btn btn-primary btn-block" role="button">Virtual Skills Acquisition</a>
			  <a href="virtual-counseling.php" class="btn btn-primary btn-block" role="button">Virtual Counseling</a>
			  <a href="virtual-practicals.php" class="btn btn-primary btn-block" role="button">Virtual Practicals</a>
			  
			 </p>
			 
			 
			 
			 
			 
              </div>
          </div>
        </div>
      </div>
    </section>
    
   <?php include("../incs_sch/footer.php"); ?>