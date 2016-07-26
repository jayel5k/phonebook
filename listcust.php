<?php
	
	include("checkingadmin.php");

	include("server.php");
	$msg=" ";

	$q2="SELECT * FROM customer WHERE lname LIKE '%$_POST[lname]%' ORDER BY lname,fname";
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
    <table width="34%" border="1" align="center" cellpadding="2" cellspacing="0">
      <tr align="center" bgcolor="#000099">
        <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Customer # </font></strong></td>
        <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Lastame</font></strong></td>
        <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Firstname</font></strong></td>
      </tr>
      <?php
		while($row=@mysql_fetch_array($result2)) {
    		print("<tr align=\"center\"> 
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">
				<a href=\"list_trans.php?cno=$row[custno]\">$row[custno]</a></font></td>
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[lname] </font></td>
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[fname]</font></td>
    			</tr>");
		}
	?>
    </table>
</div>
  <br>
  <br>
</body>
</html>
