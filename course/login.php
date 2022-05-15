<?php 
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 

if(isset($_SESSION['user_id'])){
	 header("Location:".GEN_WEBSITE);
	 exit();
	}
$page_title = 'Login to learnointernational';
?>
 
<?php
//username == email address

$login_errorsl = array();
if(isset($_POST['login']) AND $_SERVER['REQUEST_METHOD'] == 'POST'){

if (isset($_POST['username'])) {		//Username == Registration number
   $el = mysqli_real_escape_string ($connect,trim($_POST['username'] ));	
} else {
   $login_errorsl['username'] = 'Registration number was not correctly entered.';
}
if (preg_match ('/^.{6,255}+$/', $_POST['pass'])) {									
   $pl = mysqli_real_escape_string ($connect,$_POST['pass']);
}else{
   $login_errorsl['pass'] = 'Please enter correct password. Minimum of 6 characters';
}


if (empty($login_errorsl)) {
    //Will be allowed if payment has been made and regiserating number gived
	$rl = mysqli_query ($connect, "SELECT * FROM users WHERE (registration_no='".strtoupper($el)."' AND password='".$pl."' AND active='1')") or die(db_conn_error);	
	
	if (mysqli_num_rows($rl) == 1) {
    
	$row = mysqli_fetch_array ($rl, MYSQLI_NUM);
    
	
	$value = md5(uniqid(rand(), true));
	$query_confirm_sessions = mysqli_query ($connect, "SELECT cookie_session FROM users WHERE registration_no='".strtoupper($el)."' AND active = '1'") or die(db_conn_error);
	$cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
	
	if (empty($cookie_value_if_empty[0])){
	mysqli_query($connect,"UPDATE users SET cookie_session = '".$value."' WHERE registration_no='".strtoupper($el)."' AND active = '1'") or die(db_conn_error);		
	setcookie("remember_me", $value, time() + 2592000);			//session time out is 1 month
	
	}else if(!empty($cookie_value_if_empty[0])){
	
	setcookie("remember_me", $cookie_value_if_empty[0], time() + 2592000);	
	}
	
	
	$_SESSION['user_id'] = $row[0];
    $_SESSION['fullname'] = $row[2];
	$_SESSION['registration_no'] = $row[3];
	$_SESSION['course'] = $row[5];
    $_SESSION['gender'] = $row[6];
    $_SESSION['phone_no'] = $row[7];
    $_SESSION['state'] = $row[8];
    $_SESSION['email'] = $row[9];
	 
	 if ($row[1] == 'admin') $_SESSION['user_admin'] = true;
    
	
	 header("Location:my-course.php");
	 exit;
	 
	} else {
      $login_errorsl['pass'] = 'The registration number and password did not match.';	
}
} // End of $login_errors IF.

}

?>
 
 
<?php include("../incs_sch/header.php");  ?>
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap" style="margin-top:20px;">
              <h2 class="mb-4">Log in </h2>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Registration number</label>
                    <input type="text" id="name" class="form-control py-2" placeholder="LOI/2020/5" name="username" required="required" value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>">
                   <?php
						if (array_key_exists('username',  $login_errorsl)) {
						echo '<small class="message" style="color:red;">'.$login_errorsl['username'].'</small>';
						}?>
				  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password" id="name" class="form-control py-2" name="pass" placeholder="Password" value="" required="required">
                  <?php
						if (array_key_exists('pass',  $login_errorsl)) {
						echo '<small class="message" style="color:red;">'.$login_errorsl['pass'].'</small>';
						}?>
				  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Login" class="btn btn-primary px-5 py-2" name="login">
                  </div>
                </div>
              </form>
			  <small>Forgot password? Please contact the admin</small>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include("../incs_sch/footer.php"); ?>