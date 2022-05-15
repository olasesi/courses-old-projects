<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}
include("../incs_sch/header.php"); ?>
    <!-- END header -->

    <!--<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Contact Us</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Contact Us</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>-->
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
          <div class="col-md-4">
            
            <div class="block-23">
              <h3 class="heading mb-5">Contact Information</h3>
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Enter address</span></li>
                <li><a href="tel:0814 734 8556"><span class="icon ion-ios-telephone"></span><span class="text">0814 734 8556</span></a></li>
                <li><a href="mailto:info@learnointernational.com.ng"><span class="icon ion-android-mail"></span><span class="text">info@learnointernational.com.ng</span></a></li>
                <!--<li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>-->
              </ul>
            </div>
          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

   <?php include("../incs_sch/footer.php"); ?>