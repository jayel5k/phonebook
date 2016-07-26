<?php
     session_start();
     if(!isset($_SESSION['user']) AND !isset($_SESSION['name']))	{
	     header("location:loginadmin.html");
    	 exit();
	 }
?>
