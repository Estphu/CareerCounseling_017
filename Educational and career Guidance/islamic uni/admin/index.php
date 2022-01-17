<?php

session_start();
include ("parts/conn.php");

if($_REQUEST['action']=="login")
{
	$username = $_REQUEST['user'];
	$password = $_REQUEST['pass'];
	$sql=mysql_query("select * from `login` where `username`='$username' and `password`='$password'");
	$xyz = mysql_num_rows($sql);
	if($xyz>0)
	{
		$_SESSION['user']=$username;
		echo "<script>window.location='home.php'</script>";
	}
		else
	{
		$msg="invalid user name & password..";
	}
}
?>
<html>
<head>
	<title>Admin Side</title>
</head>
<body>
	<form name="form1" method="post" action="index.php?action=login">
	  <table width="333" height="170" border="0" align="center";>
		<tr>
		  <td>Username</td>
		  <td><label>
			<input type="text" name="user" id="user" style="border:2px solid #000000; padding:10px;">
		  </label></td>
		</tr>
		<tr>
		  <td>Password</td>
		  <td><label>
			<input type="password" name="pass" id="pass" style="border:2px solid #000000; padding:10px;">
		  </label></td>
		</tr>
		<tr>
		  <td><label>
			<input type="submit" name="Submit" value="Submit">
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
	  </table>
	</form>
	</body>
</html>
