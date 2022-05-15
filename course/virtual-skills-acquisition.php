<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}

$page_title = 'Virtual Skills Acquisition';
$course_price = '5000';
	
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
              <h3 class="heading mb-5">Virtual Skills Acquisition</h3>
			  <h5>COURSE DETAILS:</h5>
              <p>This course offers a repertoire of professional skills training ranging from Fashion Design, Hair Styling, Photography, Catering, Web and Graphic design, Music, 
			  Public Speaking, Soap making, Make up, Driving. Professional tutors engage in teaching and instructing learners in achieving the skill. The class is divided into 
			  two sessions: morning and evening classes to suit learners' schedule. Fee for classes can be paid daily, weekly or monthly. However, learners pay based on the 
			  amount of classes they will take part in daily. Materials are given during or after every class to better aid learners' understanding.</p>
			  <h5>COURSE HIGHLIGHTS:</h5>
            <ol>
			<li>Presently 258, 210 learners nationwide.</li>
				<li> Well structured interactive online classes.</li>
			<li> Classes spanning through 10 professional skills.</li>
				<li> 2 hours daily for a period of one month minimum.</li>
				<li> 2 sessions daily (Morning and Evening)</li>
				<li>Classes are via WhatsApp and Telegram different class group platforms.</li>
</ol>



             
			 <!--<ul>
                <li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>-->
            </div>
          </div>
		 <div class="col-md-6 pr-md-5">
            <h3 class="heading mb-5">Virtual Skills Acquisition Registration</h3>
			<form action="" method="post">
                 <?php include("../incs_sch/form.php"); ?>
				  <input type="hidden" value="Virtual Skills Acquisition" name="tutorials_hidden">
                </form>
          </div>
         
          
        </div>

      </div>
    </section>




 <?php include("../incs_sch/footer.php"); ?>