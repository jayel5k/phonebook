<?php
	include("checking.php");

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFCC" leftmargin="10" topmargin="10">
<font color="#000099" size="3" face="Arial, Helvetica, sans-serif"><strong>
<?php
	print("Customer:<font color=\"#FF0000\">[$_SESSION[cno]]</font> $_SESSION[lname], $_SESSION[fname]");
?>
</strong></font>
</body>
</html>
