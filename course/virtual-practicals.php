<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}

$page_title = 'Virtual Practicals';
$course_price = '10000';	
include("../incs_sch/header.php"); 

?>

<?php 
include ("../incs_sch/general_form_code.php");
?>


 <section class="site-section element-animate">
      <div class="container">
        <div class="row">
         


		 <div class="col-md-6">
            
            <div class="block-23">
              <h3 class="heading mb-5">Virtual Practicals</h3>
			  <h5>COURSE DETAILS:</h5>
				<p>This is a practical class where learners engage in the practical aspects of tutorial, skill acquisition and counseling classes. 
				Learners engage in showing everyone what they have learnt by sending videos of the processes and how they are doing it. 
				This video serves as a proof that the learner is or has understood what has been taught. Learners are graded based on their performances and convinction and are 
				sent certificates for their success and progress during the courses.</p>
				<h5>COURSE HIGHLIGHTS</h5>
				<ol>
				<li> Presently 124, 308 learners nationwide.</li>
				<li>Well structured online interactive classes.</li>
				<li> Classes spanning through all aspects learnt above.</li>
				<li> 2 hours daily.</li>
				<li> Classes are via WhatsApp and Telegram class group platforms.</li></ol>
				
             
			 <!--<ul>
                <li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>-->
            </div>
          </div>
		 <div class="col-md-6 pr-md-5">
            <h3 class="heading mb-5">Virtual Practicals Registration</h3>
			<form action="" method="post" role="form">
                  <?php include("../incs_sch/form.php"); ?>
				  <input type="hidden" value="Virtual Practicals" name="tutorials_hidden">
                </form>
          </div>
         
          
        </div>

      </div>
    </section>




 <?php include("../incs_sch/footer.php"); ?>