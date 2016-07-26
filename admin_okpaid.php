<?php
	
	include("checkingadmin.php");
	
	include("server.php");
	$msg=" ";
	$tid="";

	$q2="INSERT INTO payments VALUES ('','$_SESSION[tcode]',now(),'$_POST[orno]','$_SESSION[gtotal]')";
	@mysql_query($q2);
	
	$q1="UPDATE trans SET status='O' WHERE tcode='$_SESSION[tcode]'";
			if (@mysql_query($q1)) {
				$msg="SUCCESSFULLY PAID!!";
			} else {
				$msg="ERROR!!";	
			}
	@mysql_close($Link);
		
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFCC" leftmargin="0" topmargin="0">
<div align="center"><br>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">
<?php
	print("$msg");
?>
</font></strong></div>
<div align="center"><br>
  <strong>  <font color="#666666" size="2" face="Arial, Helvetica, sans-serif">Transaction
  No. <?php print("$_SESSION[tcode]"); ?></font></strong></div>
</body>
</html>
