<?php

	include("server.php");

	$q="SELECT * FROM customer WHERE custno='$_POST[u]' AND pword='$_POST[p]'";
	$result=@mysql_query($q);
	$row=@mysql_fetch_array($result);

	if($row){
		session_start();
		$_SESSION['cno']=$row['custno'];
		$_SESSION['lname']=$row['lname'];
		$_SESSION['fname']=$row['fname'];
		header("Location: welcomecust.php");
		exit();
	}
	else{
		$msg="USER NOT EXISTING!!";
	}

	@mysql_close($link);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#FFFFCC"><br>
<br>
<form name="form1" method="POST" action="login.php">
  <table width="24%" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr bgcolor="#003366"> 
      <td height="29" colspan="2"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Customer 
        Log-in</strong></font></td>
    </tr>
    <tr bgcolor="#99CCFF"> 
      <td colspan="2" bgcolor="#99CCFF"><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php print("$msg"); ?></strong></font></td>
    </tr>
    <tr bgcolor="#99CCFF"> 
      <td width="45%"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">USER: 
        </font></strong></td>
      <td width="55%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="u" type="text" size="4" maxlength="4">
        </font></td>
    </tr>
    <tr bgcolor="#99CCFF"> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">PASSWORD:</font></strong></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="p" type="password" size="10" maxlength="10">
        </font></td>
    </tr>
    <tr bgcolor="#99CCFF"> 
      <td> <div align="center"> </div></td>
      <td><input type="submit" name="Submit" value="Login!"></td>
    </tr>
</table>
<div align="center"><br>
<a href="loginadmin.html"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Log as ADMIN 
</font></a><br>
</div>
</form>
</body>
</html>
