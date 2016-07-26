<?php
	
	include("checkingadmin.php");

	include("server.php");
	$msg=" ";

	$q2="SELECT a.status,a.tcode,DATE_FORMAT(a.orderdate,'%M %e, %Y') AS deyt,b.fname,b.lname FROM trans AS a,customer AS b
		 WHERE status='A' and a.custno=b.custno AND a.custno='$_GET[cno]' ORDER by orderdate DESC ";
	$result2=@mysql_query($q2);
	
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
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">TRANSACTIONS<br>
  <br>
  </font></strong>
    <table width="29%" border="1" align="center" cellpadding="2" cellspacing="0">
      <tr align="center" bgcolor="#000099">
        <td width="23%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Transaction
          #</font></strong></td>
        <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Name</font></strong></td>
        <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Date</font></strong></td>
        <td width="28%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Status</font></strong></td>
      </tr>
      <?php
		while($row=@mysql_fetch_array($result2)) {
			if ($row['status'] == 'P') {
				$stat="Pending";
			} else {
				$stat="For Pick-up";
			}
    		print("<tr align=\"center\"> 
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><a href=\"payment_dtltrans.php?tid=$row[tcode]&dt=$row[deyt]\">$row[tcode]</a></font></td>
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[lname], $row[fname]</font></td>
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[deyt]</font></td>
				<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$stat</font></td>
    			</tr>");
		}
	?>
    </table>
</div>
  <br>
  <br>
</body>
</html>
