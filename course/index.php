<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 
if(isset($_SESSION['user_id'])){
 header("Location:".GEN_WEBSITE."/my-course.php");
	 exit();
	}


include("../incs_sch/header.php"); ?>


<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Find Online Courses That Suit You</h2>
               
                <p class="text-center mb-5">We have plethoral of courses to improve your knowledge and skills.</p>
                <p class="text-center"><a href="register.php" class="btn py-3 px-5">Register</a></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/img1.jpg" alt="Image placeholder" class="img-fluid">
             
              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Welcome to LearnO International</h2>
              </div>
              <div class="text mb-5">
              <p>LearnO International is a renowned virtual educational, skill and counselling agency in Nigeria specialized in the dymystification of academic knowledge and skills in terms of
			     rendering educational services, skill acquisition, counselling and other instructional services to respective clients online</p>
              </div>
              <p><a href="about.php" class="btn btn-primary reverse py-2 px-4">About Us</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
  

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">Virtual Tutorial</h3>
                <p>This course offers a repertoire of academic subjects ranging from Mathematics, English, Civic, etc.</p>
                <p><a href="virtual-tutotials.php" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading">Virtual Skills Acquisition</h3>
                <p>This course offers repertoire of professional skills training ranging from Fashion, hair styling, Photography, etc.</p>
                <p><a href="virtual-skills-acquisition.php" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">Virtual Counselling</h3>
                <p>This is a special counselling class for those seeking to learn about how to manage their way and be successful in areas like marriage, relationship, etc.</p>
                <p><a href="virtual-counselling.php" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Virtual Practicals</h3>
                <p>This is a practical class where learners engage in the practical aspects of tutorial, skill acquisition, etc.</p>
                <p><a href="virtual-practicals.php" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>


    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="images/img_2b.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>Education is Life</h2>
              </div>
            
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="999950">0</strong>
                    <span>Students</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="51">0</strong>
                    <span>Educators</span>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-books"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="3902">0</strong>
                    <span>Books</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="22344">0</strong>
                    <span>Graduates</span>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Testimonies</h2>
            <p>Testimonies from some of our learners at LearnO International.</p>
          </div>
        </div>
        <div class="row element-animate">
          
          <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

            <div class="block-20 ">
              <figure>
                <img src="images/img_1-faith.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading">LearnO International has really assisted me to improve academically. I was surprised at the way the tutors taught us with such professionalism.
				  My weak subjects have been brushed to become my strong subjects within a short time. Please keep it up LearnO International. God bless you all in the team.</h3>
                <div class="meta">
                  <div><span class="ion-android-person"></span> Faith E.</div>
                  <div><span class="ion-android-pin"></span> (Lagos State)</div>
         
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 col-lg-6">
            
            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <img src="images/img_1-cecilia.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading">Kudos to the team for a good job.May God bless every person working with LearnO International.
				  I had my doubts at first but after 2 months, I saw great improvement in my son's life. Thank you very much.Continue the good work.</h3>
                <div class="meta">
                  <div><span class="ion-android-person"></span> Mrs Cecilia</div>
                  <div><span class="ion-android-pin"></span> (Benin,Edo State)</div>
               
                </div>
              </div>
            </div>  
 <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <img src="images/img_30.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading">I am gaining a lot from the online classes. I now have a skill in photography and catering. I wish to do well at the new skill
				 and better my life with it.</h3>
                <div class="meta">
                  <div><span class="ion-android-person"></span> Veronica</div>
                  <div><span class="ion-android-pin"></span> (Lagos State)</div>
                
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <img src="images/goods_serv_pix.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading">I have to write to express my gratitude to LearnO International for the good job in ensuring my child's admission to the university.
				  Keep it up. My son and daughter are now under your guide too. Do same for them. Thanks</h3>
                <div class="meta">
                  <div><span class="ion-android-person"></span> Chief Matthias Chike</div>
                  <div><span class="ion-android-pin"></span> (Anambra state)</div>
                
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
               <img src="images/goods_serv_pix.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading">Despite the fact that this institute commenced a few years ago,I must say I'm really impressed with the amount of learners I saw and the amount of professionalism shown by the team.
				 I'm glad to have taught the students and I hope the students put what they have learnt to good use.</h3>
                <div class="meta">
                  <div><span class="ion-android-person"></span> Mr Timothy Ogunjobi</div>
                  <div><span class="ion-android-pin"></span> (Ibadan)</div>
         
                </div>
              </div>
            </div>  

           

          </div>
        </div>
      </div>
    </div>

   <?php include("../incs_sch/footer.php"); ?>