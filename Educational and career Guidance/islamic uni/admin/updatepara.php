<?php
	include("parts/conn.php");
	session_start();
	$user=$_SESSION['user'];
	if(empty($user))	
	{
		echo "<script>window.location='index.php'</script>";
	}
	$id=$_REQUEST['id'];
	$sql=mysql_query("select * from `paragraph` where `id`='$id'");
	$rs=mysql_fetch_array($sql);
	
	if($_REQUEST['action']=="update")
	{
		$id=$_REQUEST['id'];
		$heading=$_REQUEST['heading'];
		$pagename=$_REQUEST['pagename'];
		$content=$_REQUEST['content'];
		$sql_up=mysql_query("update `paragraph` set `title`='$heading', 
		`page`='$pagename', `content`='$content' where `id`='$id'");
		echo "<script>window.location='home.php'</script>";
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
				<form id="form1" method="post" action="updatepara.php?action=update&id=<?php echo $id;?>">
			    		<table width="500" border="0" align="center" class="box" style="background:#999999; float:right; margin-top:20px;" >
                			<tr>
				                <td colspan="2" align="left" valign="top">&nbsp;</td>
			                </tr>
			                <tr>
				                <td width="163" align="left" valign="top">Heading </td>
				                <td width="570" align="left" valign="top">
				                <input name="heading" type="text" id="heading" 
                                value="<?php echo $rs['title'];?>" /></td>
			                </tr>

			                <tr>
				                <td align="left" valign="top">Select Page</td>
				                <td align="left" valign="top"> 
								<select name="pagename" id="pagename">
                                  <option>home</option>
                                  <option>about</option>
                                  <option>admissions</option>
								  <option>feedback</option>								                                  <option>news</option>
								  <option>update</option>
								</select>  
								 </td>
			                </tr>
			                <tr>
				                <td colspan="2" align="left" valign="top">Enter Massage Here! </td>
			                </tr>
			                <tr>
				                <td colspan="2" valign="top"><span class="login">
				                <textarea class="" cols="110" id="content" name="content" rows="10"><?php echo $rs['content'];?></textarea></span></td>
			                </tr>
			                <tr>
			                  <td colspan="2">
                                <input type="submit" name="Submit" value="Submit" class="ip" /></td>
			                </tr>
		                </table>
	                </form>
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>