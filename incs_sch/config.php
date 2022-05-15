<?php
date_default_timezone_set('UTC');
session_start();


define ('GEN_WEBSITE', 'http://localhost/www.learnointernational.com.ng');	//http://www.learnointernational.com.ng
define("Conn_error","could not connect to server at this time"); // all of the rest below may be defined later
define("db_conn_error","<div id='oops'>
							<h1>We are sorry</h1>
							<h3>Data could not be fetched at this time</h3>
							</div>
							");
	
	

	
	
	//connecting to server
	$connect=mysqli_connect("localhost","root","","learno");
	

	$data_select=mysqli_select_db($connect,"learno") or die(db_conn_error);		//maximum execution time exceeded on this line
	
	

	
	
	
?>