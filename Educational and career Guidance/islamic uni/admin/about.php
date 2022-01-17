<?php

	include ("parts/conn.php");
	session_start();
	$user=$_SESSION['user'];
	if(empty($user))
	{
		echo "<script>window.location='index.php'</script>";
	}
	if($_REQUEST['action']=="delete")
	{
	
		$id = $_REQUEST['id'];
		mysql_query("delete from `paragraph` where `id`='$id'");
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
			<?php include("parts/head.php");?>
			<div class="box">
				<form name="form1" method="post" action="">
  <table width="855" height="174" border="1">
    <tr>
      <td height="37" colspan="6" align="center" bgcolor="#993300">Well come To Admin</td>
    </tr>
    <tr>
      <td colspan="6"><a href="addabout.php"><img src="images/add.png" /></a></td>
    </tr>
    <tr>
      <td align="center">Title</td>
      <td align="center">Page</td>
      <td align="center">Content</td>
      <td colspan="2" align="center";>Action</td>
    </tr>
     <?php
	  	
		$sql = mysql_query("select * from `paragraph` where `page` like 'about'");
		while($fetch = mysql_fetch_array($sql))
	  {
	  		$abc = $fetch['content'];
			$detail = substr($abc,0,20)."......";
	  ?>
      <tr>
        <td><div align="center"><?php echo $fetch['title'] ?></div></td>
        <td><div align="center"><?php echo $fetch['page'] ?></div></td>
        <td><div align="center"><a href="detail.php?id=<?php echo $fetch['id']; ?>"><?php echo  $detail?></a> </div></td>
        <td><div align="center"><a href="updatehome.php?id=<?php echo $fetch['id']; ?>"><img src="images/update.png" /></a></div></td>
        <td><div align="center"><a href="home.php?action=delete&amp;id=<?php echo $fetch['id'];?>" onClick="return confirm('Are You Sure..?')"><img src="images/delete.jpg" /></a></div></td>
      </tr>
	  <?php
	  }
	  ?>
  </table>
</form>
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>
