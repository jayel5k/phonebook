<?php
	
	include("checking.php");
	
	include("server.php");
	$msg=" ";
	$tid="";

	$q1="INSERT INTO trans VALUES ('','$_SESSION[cno]',now(),'P')";
	@mysql_query($q1);
	$tid=@mysql_insert_id();

	foreach($_POST['qty'] as $k => $v) {
		if (!empty($v)) {
			$query="INSERT INTO trans_dtl VALUES('','$tid','$k','$v')";
			if (@mysql_query($query)) {
				$msg="SUCCESSFULLY ORDERED!!";
			} else {
				$msg="ERROR!!";	
			}
		} 
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
  No. <?php print("$tid"); ?></font></strong></div>
</body>
</html>
