<?php
     session_start();
     if(!isset($_SESSION['cno']) AND !isset($_SESSION['lname']) AND !isset($_SESSION['fname']))	{
	     header("location:login.html");
    	 exit();
	 }
?>
