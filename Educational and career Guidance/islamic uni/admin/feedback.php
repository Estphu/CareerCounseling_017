<?php

	include ("parts/conn.php");
	session_start();
	
	if($_REQUEST['action']=="delete")
	{
	
		$id = $_REQUEST['id'];
		mysql_query("delete from `onlinecontact1` where `id`='$id'");
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
	</head>
	<body>
		<div class="main">
			<?php include("parts/head.php"); ?>
			<div class="box">
				
				<div class="middle">
<form id="form1" name="form1" method="post" action="">
    <table width="779" height="253" border="1" align="center" style="margin-top:50px; float:left; margin-left:300px;">
      <tr>
        <td colspan="6" bgcolor="#660000"><div align="center" class="style1">Welcome To feedback </div></td>
      </tr>
      
      <tr>
        <td><div align="center" class="style2">Name</div></td>
        <td><div align="center" class="style2">Address</div></td>
        <td><div align="center" class="style2">Gender</div></td>
        <td><div align="center" class="style2">Content</div></td>
        <td colspan="2"><div align="center" class="style2">Action</div></td>
      </tr>
	  <?php
	  	
		$sql = mysql_query("select * from `onlinecontact1`");
		while($fetch = mysql_fetch_array($sql))
	  {
	  		$abc = $fetch['teacher'];
			$detail = substr($abc,0,20)."";
	  ?>
      <tr>
        <td><div align="center"><?php echo $fetch['name'] ?></div></td>
        <td><div align="center"><?php echo $fetch['address']?></div></td>
        <td><div align="center"><?php echo $fetch['gender'] ?></div></td>
        <td><div align="center"><a href="detailcontact.php?id=<?php echo $fetch['id']; ?>"><?php echo  $detail?></a> </div></td>
        <td><div align="center"><a href="feedback.php?action=delete&amp;id=<?php echo $fetch['id'];?>" onClick="return confirm('Are You Sure..?')"><img src="images/delete.jpg" /></a></div></td>
      </tr>
	  <?php
	  }
	  ?>
    </table>
	<div class="clear"></div>
  </form>				
				</div><!--middle division close-->
				
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>
