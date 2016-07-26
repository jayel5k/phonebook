<?php
	
	include("checking.php");

	include("server.php");
	$msg=" ";

	$q2="SELECT * FROM products ORDER BY descrip";
	$result2=@mysql_query($q2);
	
	@mysql_close($Link);
		
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript">
<!--
  function isblank(s)
	   {
    	   for(var i = 0; i < s.length; i++) {
        	   var c = s.charAt(i);
	           if((c != ' ') && (c != '\n') && (c != '\t')) return false;
    	   }
	       return true;
	   }

	function checkform (form)
	{

		if ((form.t1.value == "") || isblank(form.t1.value))  {
	    	alert("Please enter your Username!");
	    	form.t1.focus();
    		return false ;
	  	}

		if ((form.qty[1].value == "") || isblank(form.qty[1].value))  {
	    	alert("Please gfhgfme!");
	    	form.qty[1].focus();
    		return false ;
	  	}
		
  		// ** END **
		return true ;
	}
//-->
</script>
</head>

<body bgcolor="#FFFFCC" leftmargin="0" topmargin="0">
<div align="center"><br>
  <strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">MY 
  ORDERS</font></strong></div>
<form name="form1" method="POST" action="cust_okorder.php" onSubmit="return checkform(this);">
  <table width="47%" border="1" align="center" cellpadding="1" cellspacing="0">
    <tr align="center" bgcolor="#000099"> 
      <td width="49%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Description</font></strong></td>
      <td width="19%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Unit 
        Price</font></strong></td>
      <td width="15%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Unit</font></strong></td>
      <td width="17%"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Add contact</font></strong></td>
    </tr>
	<?php
		while($row=@mysql_fetch_array($result2)) {
			$up=number_format($row['uprice'],2);
    		print("<tr> 
		      	<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[pcode] - $row[descrip]</font></td>
      			<td align=\"right\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$up</font></td>
      			<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">$row[unit]</font></td>
      			<td align=\"center\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"> 
        		<input name=\"qty[$row[pcode]]\" type=\"text\" id=\"qty\" size=\"11\" maxlength=\"11\">
        		</font></td>
    			</tr>");
		}
	?>
  

  </table>
  <div align="center"><br>
    <input type="submit" name="Submit" value="Add Contact">
  </div>
</form>
</body>
</html>
