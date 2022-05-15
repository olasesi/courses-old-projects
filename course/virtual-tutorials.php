<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}

$page_title = 'Virtual Tutorials';		
$course_price = '3000';


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
              <h3 class="heading mb-5">Virtual Tutorials</h3>
			  <h5>COURSE DETAILS:</h5>
			  <p>This course offers a repertoire of academic subjects ranging from Mathematics, English Language, Chemistry, Physics, Biology, Civic Education, Literature, Government,
			  Economics, Further Mathematics, Account, CRS/IRS, Data Processing, Agricultural Science, Catering and Textile for the senior classes.
              The junior classes offer subjects like Mathematics, English Language, Civic Education, French, CRS/IRS, Security Education, Social Studies, Basic Science, 
			  Basic Technology, Information and Communication Technology, Business Studies, PHE, Agric Science, Home Economics.</p>
			  <h5>SPECIAL PRIVATE TUTORS</h5><p> Skilled and professional private tutors are also available for special private lessons nationwide. LearnO International will provide tutors to 
			  any client who needs one. However, this is recommended for students who need special one - on - one guidance and coaching based on serious academic struggles and 
			  challenges. Send a message to <a href="mailto:info@learnointernational.com.ng" title="send mail">info@learnointernational.com.ng</a> 
			  to get more details about this or call <a href="tel:0814 734 8556" title="call">08147348556</a>. 
			</p>

			<h5>COURSE HIGHLIGHTS</h5>
            <ol>
			<li> Presently  148,783 students nationwide.</li>
           <li>Well structured interactive online classes for primary school students, JSS to SSS students, and also WASSCE, NECO, GCE, UTME, POST UTME/ SCREENING.</li>
          <li> Classes spanning through 15 Senior School subjects and 15 Junior School subjects.</li>
           <li>Four hours daily divided into 2 sessions (2 hours per session: Morning and Evening)</li>
           <li> Classes are mostly via WhatsApp and Telegram different class group platforms.</li> 

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
            <h3 class="heading mb-5">Virtual Tutorials Registration</h3>
			<form action="" method="POST">
                 <?php include("../incs_sch/form.php"); ?>
               
			   <input type="hidden" value="Virtual Tutorials" name="tutorials_hidden">
				
				</form>
          </div>
         
          
        </div>

      </div>
    </section>




 <?php include("../incs_sch/footer.php"); ?>