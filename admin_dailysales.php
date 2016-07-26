<?php
	
	include("checkingadmin.php");

	include("server.php");
	$deyt=" ";

	if (isset($_POST['mm'])) {
		$deyt=date('Y-m-d', mktime(0,0,0,$_POST['mm'],$_POST['dd'],$_POST['yy']));
	}
	$q2="SELECT * FROM payments WHERE datepaid='$deyt'";
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
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Daily SAles Report <br>
  </font></strong>
  <form name="form3" method="POST" action="admin_dailysales.php">
    <table width="45%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="31%"><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Date</strong></font></td>
        <td width="4%"><font color="#666666" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
        <td width="65%"><select name="mm">
          <option value="1">January</option>
          <option value="2">February</option>
        </select>
          <select name="dd">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="31">31</option>
                    </select> <select name="yy">
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                              </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit3" value="Generate Report!"></td>
      </tr>
    </table>
  </form>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
  </font></strong><br>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">  </font></strong></div>
    <table width="45%" border="1" align="center" cellpadding="2" cellspacing="0">
      <tr align="center" bgcolor="#000099">
        <td width="38%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">ORNO</font></strong></td>
        <td width="19%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Trans Code </font></strong></td>
        <td width="13%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Date PAid </font></strong></td>
        <td width="19%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Amount</font></strong></td>
      </tr>
      <?php
		$gtotal=0;
		while($row=@mysql_fetch_array($result2)) {
			$gtotal=$gtotal + $row['gtotal'];
    		print("<tr> 
      			<td align=\"left\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[orno]</font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[tcode]</font></td>
      			<td align=\"left\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[datepaid]</font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[gtotal]</font></td>												
    			</tr>");
		}
	?>
      <tr align="center" bgcolor="#993333">
        <td colspan="3" align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Grand
          Total :</font></strong></td>
        <td width="19%" align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <?php 
	  	$gtotal=number_format($gtotal,2);
	  	print("$gtotal"); ?>
        </font></strong></td>
      </tr>
    </table>
    <br>
  <br>
</body>
</html>
