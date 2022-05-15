<?php
if (!isset($reg_errors)) {$reg_errors = array();}
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['submitting_form'])){    //though the browser will take you to the next stage if everything is set except "Choose City". But php will ensure that a city is checked.
	
	//edit 1
	if (preg_match ('/^[A-Z\'. -]{3,60}$/i', $_POST['first_name'])) {		//only 50 characters are allowed to be inputted
		$fn = mysqli_real_escape_string ($connect, trim($_POST['first_name']));
	} else {
		$reg_errors['first_name'] = 'Your full name is too long or has invalid characters';
	
	}
	
	if (filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
     $e = mysqli_real_escape_string ($connect, $_POST['email']);			
	
	} else {
     $reg_errors['email'] = 'Please enter a valid email address';
	
	}
	if (preg_match ('/^.{6,255}+$/', $_POST['pass1'])){
		if($_POST['pass1'] == $_POST['pass2']){
          $p = mysqli_real_escape_string ($connect, $_POST['pass1']);
		
		} else {
           $reg_errors['pass2'] = 'The password did not match';
		   
		   }
	}else{
     $reg_errors['pass1'] = 'Please enter password minimum of 6 characters';
	
	}
	
	//edit 1
	if (preg_match ('/^[0-9]{11}$/i', $_POST['phone'])) {		//only 11 characters are allowed to be inputted
		$phone_number = mysqli_real_escape_string ($connect, trim($_POST['phone']));
	} else {
		$reg_errors['phone'] = 'Phone number has invalid characters';
	
	}
	
	
	if ($_POST['city'] == "Choose State") {
		
		$reg_errors['city'] = 'Please choose a region';
	} else{
	$area = $_POST['city'];
	}

	
	if (isset($_POST['gender'])) {
		
		$gen = $_POST['gender'];
	} 
	
	
	
if (empty($reg_errors)) {
    
	 $q = "SELECT email FROM users WHERE LOWER(email) = '".strtolower($e)."'";
     $r = mysqli_query ($connect, $q) or die(db_conn_error);
    $rows = mysqli_num_rows($r);
  
	if ($rows == 0) { // No problem	
	//$hashs=md5(rand(0,1000));	
	
	
	//$statecode = mysqli_query($connect, "SELECT state_name FROM local_area WHERE area='".$area."'");
	//while($while_statecode = mysqli_fetch_array($statecode)){
		
		//$user_state=$while_statecode['state_name'];
		//}
	
	//$business_description = "Visit us to see all our products and services. They are all of high quality and are affordable. Click now to explore.";		//150 characters
	$nows = strtotime('now');
	
	$q_query = "INSERT INTO users (fullname, registration_no, password, course, gender, phone_no, state, email, cookie_session, timestamp) VALUES 
	('".$fn."','No Registration','".$p."','".$_POST['tutorials_hidden']."', '".$gen."','".$phone_number."', '".$area."', '".$e."', '','".$nows."')";
	
	
	$r_query = mysqli_query($connect, $q_query) or die(db_conn_error);
	
	//if(mysqli_affected_rows($connect) == 1){
		

	
	echo '<section class="site-section element-animate">
      <div class="container">
        <div class="row">
         


		 <div class="col-md-6">
            
            <div class="block-23">
              <h2>Payment Review and Checkout</h2>
			 <div class="panel panel-primary"> 
				<div class="panel-heading"> Product/Service </div> 
					<div class="panel-body"><h3> '.$_POST['tutorials_hidden'].' </h3>
					<hr>
					<h1 class="text-primary">&#8358;'.number_format($course_price).'</h1>
					</div> 
					
			</div> 
			
			  
			  
			 </div>
          </div>
         
          
        </div>

		
		<div class="row">
         


		 <div class="col-md-6">
            
            <div class="block-23">
             <div class="panel panel-primary"> 
				<a href="" class="btn btn-primary">Checkout</a>
			</div> 
					
			</div> 
			
			  
			  
			 </div>
          </div>
         
          
        </div>
		
		
		
		
		
		
		
      </div>
    </section>';
	
	
	include("../incs_sch/footer.php");
	exit();
	
	//}else{
      //trigger_error('You could not be registered due to a system error. We apologize for any inconvenience.');
	//}

	}else{
     
	 $reg_errors['username'] = 'This email has already been registered. Please try another.';
	   
	 }
}
}
?>