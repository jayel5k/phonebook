<?php
     session_start();
     if(!isset($_SESSION['cno']) AND !isset($_SESSION['lname']) AND !isset($_SESSION['fname']))
     {
     header("location:login.html");
     exit();
     }
     else
     {
     session_destroy();
     }
 ?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#FFFFCC" leftmargin="0" topmargin="0">
<div align="center"><font size="3"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><br>
  SUCCESSFULLY LOGOUT!!! </font></strong></font></div>
<div align="center"><br>
  <a href="login.html"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Customer 
  Log-in</font></a><br>
  <a href="loginadmin.html"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Admin 
  Log-in</font></a><br>
</div>
</body>
</html>