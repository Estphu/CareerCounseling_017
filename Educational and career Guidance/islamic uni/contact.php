<?php

	include ("parts/conn.php");
	session_start();
	
	if($_REQUEST['action']=="add")
	{
		$var1 = $_REQUEST['name'];
		$var2 = $_REQUEST['address'];
		$var3 = $_REQUEST['gender'];
		$var4 = $_REQUEST['teacher'];
		mysql_query("insert into `onlinecontact1`(`name`,`address`,`gender`,`teacher`)values('$var1','$var2','$var3','$var4')");
		echo "<script>window.location='msg.php'</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; 		 charset=iso-8859-1" />
		<title>IT Trainers Mardan</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
  <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
	</head>
	<body>
		<div class="main">
			<?php include("parts/head.php"); ?>
			<div class="box">
				<?php include("parts/left.php"); ?>
				<div class="middle">
					<div class="dir">
						<h2>Please do contact with us</h2>
<form name="form1" method="post" action="contact.php?action=add" onsubmit="return validate();">
  <table width="452" height="434" border="0" align="center">
    <tr>
      <td>Name</td>
      <td><label for="textfield"></label>
      <input type="text" name="name" id="name" style="border:2px solid #000000; padding:10px;" placeholder="Enter Your Name"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="textarea"></label>
      <textarea name="address" id="address" cols="45" rows="5" style="border:2px solid #000000; padding:10px;" placeholder="Enter Your Address"></textarea></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" id="gender" value="Male">
      <label for="radio">Male 
        <input type="radio" name="gender" id="gender" value="Female">
      Female</label></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>Teachers</td>
      <td><input type="checkbox" name="teacher" id="teacher" value="Kaleem">
      <label for="checkbox">Kaleem 
        <input type="checkbox" name="teacher" id="teacher" value="Fahad">
      Fahad</label></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Submit"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

					</div>
				</div><!--middle division close-->
				<div class="right">
					<div class="loc">
						<h2>My Location</h2>
						<img src="images/map.png" />
					</div>
					<div class="pro">
						<h2>My Programmer</h2>
						<img src="images/g.jpg" />
					</div>
				</div><!--right division close-->
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>
