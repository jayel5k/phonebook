<?php
	
	include("checkingadmin.php");

	include("server.php");
	$msg=" ";

	$q2="SELECT a.descrip,a.uprice,a.unit,b.qnty,b.tdtlcode FROM products AS a, trans_dtl AS b WHERE tcode='$_GET[tid]'
		AND a.pcode=b.pcode ";
	$result2=@mysql_query($q2);
	
	@mysql_close($Link);
	
	$_SESSION['tcode']=$_GET['tid'];
		
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFCC" leftmargin="0" topmargin="0">
<div align="center"><br>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">MY
  TRANSACTIONS<br>
  <br>
  </font></strong>
  <table width="45%" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <td width="31%"><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Transaction No.</strong></font></td>
      <td width="4%"><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
      <td width="65%"><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php print("$_GET[tid]"); ?></strong></font></td>
    </tr>
    <tr>
      <td><strong><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif">Date</font></strong></td>
      <td><strong><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif">:</font></strong></td>
      <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php print("$_GET[dt]"); ?></strong></font></td>
    </tr>
  </table>
  <br>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">  </font></strong></div>
  <form name="form1" method="POST" action="admin_acceptorders.php">
    <table width="45%" border="1" align="center" cellpadding="2" cellspacing="0">
      <tr align="center" bgcolor="#000099">
        <td width="38%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Description</font></strong></td>
        <td width="19%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Unit
          Price</font></strong></td>
        <td width="13%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Unit </font></strong></td>
        <td width="11%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Qnty</font></strong></td>
        <td width="19%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Amount</font></strong></td>
      </tr>
      <?php
		$gtotal=0;
		while($row=@mysql_fetch_array($result2)) {
			$amt=number_format(($row['uprice']*$row['qnty']),2);
			$up=number_format($row['uprice'],2);
			$gtotal=$gtotal + $amt;
    		print("<tr> 
      			<td align=\"left\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[descrip]</font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$up</font></td>
      			<td align=\"left\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[unit]</font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><input type=\"text\" name=\"qty[$row[tdtlcode]]\" value=\"$row[qnty]\" size=\"2\" maxlength=\"2\"></font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$amt</font></td>												
    			</tr>");
		}
	?>
      <tr align="center" bgcolor="#993333">
        <td colspan="4" align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Grand
          Total :</font></strong></td>
        <td width="19%" align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <?php 
	  	$gtotal=number_format($gtotal,2);
	  	print("$gtotal"); ?>
        </font></strong></td>
      </tr>
    </table>
    <br>
    <input type="submit" name="Submit" value="Accept!">
  </form>
  <br><div align="center">
  <form name="form2" method="POST" action="admin_cancelorders.php">
    <input type="submit" name="Submit2" value="Cancel Order!">
    </form></div>
</body>
</html>
