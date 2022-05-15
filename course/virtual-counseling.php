<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}

$page_title = 'Virtual Counseling';
$course_price = '11000';
	
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
              <h3 class="heading mb-5">Virtual counseling</h3>
			  <h5>COURSE DETAILS:</h5>
              <p>This is a special counselling class for those seeking to learn about how to manage their way and be successful in areas like Marriage/ Relationship,
			  Finance/ Business, Spiritual, Personal and Social. Professional counselors are available to teach learners how to be successful in these areas and the basic 
			  techniques to adopt. Learners are taught to adopt what has been learnt immediately as the days go by. Materials and books are recommended to learners to read to 
			  buttress what they have learnt.</p>
			  <h5>COURSE HIGHLIGHTS</h5>
				<ol>
				<li>398, 209 learners nationwide.</li>
				<li>Well structured online interactive classes.</li>
				<li> Classes spanning through 5 different counselling areas.</li>
				<li> 2 hours daily.</li>
				<li> Classes are via WhatsApp and Telegram class group platforms.</li>
<ol>


             
			 <!--<ul>
                <li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>-->
            </div>
          </div>
		 <div class="col-md-6 pr-md-5">
            <h3 class="heading mb-5">Virtual counseling Registration</h3>
			<form action="" method="post">
                  <?php include("../incs_sch/form.php"); ?>
				  <input type="hidden" value="Virtual Counseling" name="tutorials_hidden">		
                </form>
          </div>
         
          
        </div>

      </div>
    </section>




 <?php include("../incs_sch/footer.php"); ?>