<?php
if(!isset($_SESSION['user_id'])){	

if(isset($_COOKIE['remember_me'])){ 
	
	$cookiesessions = $_COOKIE['remember_me'];

	$decode_cookie = mysqli_query ($connect,"SELECT * FROM users WHERE cookie_session = '".$cookiesessions."' AND active = '1'") or die(db_conn_error);
    if (mysqli_num_rows($decode_cookie) == 1) {
	
	$rows_cookie = mysqli_fetch_array($decode_cookie, MYSQLI_NUM);
	
	$_SESSION['user_id'] = $rows_cookie[0];
	$_SESSION['fullname'] = $rows_cookie[2];
	$_SESSION['registration_no'] = $rows_cookie[3];
	$_SESSION['course'] = $rows_cookie[5];
	$_SESSION['gender'] = $rows_cookie[6];
	$_SESSION['phone_no'] = $rows_cookie[7];
	$_SESSION['state'] = $rows_cookie[8];
	 $_SESSION['email'] = $rows_cookie[9];
	 
	 
	 
	 if ($rows_cookie[1] == 'admin') $_SESSION['user_admin'] = true;
}

}
}
?>