<?php

	include ("parts/conn.php");
	session_start();
	
	if($_REQUEST['action']=="add")
	{
		$var1 = $_REQUEST['title'];
		$var2 = $_REQUEST['page'];
		$var3 = $_REQUEST['content'];
		mysql_query("insert into `paragraph`(`title`,`page`,`content`)values('$var1','$var2','$var3')");
		
		echo "<script>window.location='about.php'</script>";
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
				<form action="addabout.php?action=add" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="463" height="543" border="1" align="center" style="margin-top:50px; float:left; margin-left:350px;">
      <tr>
        <td colspan="2" bgcolor="#660000"><div align="center" class="style3">Add Home</div></td>
      </tr>
      <tr>
        <td width="229"><div align="center">Title</div></td>
        <td width="218"><label>
          <div align="center">
            <input type="text" name="title" id="title" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td><div align="center">Page</div></td>
        <td><label>
          <div align="center">
            <select name="page" id="page">
              <option>home</option>
              <option>about</option>
              <option>contact</option>
              <option>admission</option>
            </select>
          </div>
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">Content</div></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <div align="center">
            <textarea name="content" id="content" rows="10" cols="40"></textarea>
          </div>
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <div align="center">
            <input type="submit" name="Submit" value="Submit" />
          </div>
        </label></td>
      </tr>
    </table>
	<div class="clear"></div>
  </form>				
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>
