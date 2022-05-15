<?php
require ("../incs_sch/config.php");
include("../incs_sch/cookie_for_most.php"); 
if(!isset ($_SESSION['user_id'])){
	header("Location:".GEN_WEBSITE);
	exit();
}

mysqli_query($connect,"UPDATE users SET cookie_session = '' WHERE user_id = '".$_SESSION['user_id']."' AND active = '1'") or die(db_conn_error);	
session_destroy();
setcookie("remember_me", "", time() - 31104002342124230);		
	
header("Location:".GEN_WEBSITE);
exit();

?>
