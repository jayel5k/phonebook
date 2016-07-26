<?php
	$Host="localhost"; 
	$DBName="phonebook"; 
	$User="root"; 
	$Password="system"; 
	
	$Link=@mysql_connect($Host, $User, $Password) or die("Cannot connect to server!!"); 
	@mysql_select_db($DBName, $Link) or die("SQL-Errors: ". mysql_error());

?>