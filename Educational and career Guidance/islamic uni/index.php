<?php

	include ("parts/conn.php");
	$path = "admin/";

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
				<?php include("parts/left.php"); ?>
				<div class="middle">
					<div class="dir">
						<?php
					
					$sql = mysql_query("select * from `paragraph` where `page` like 'home'");
					while($fetch = mysql_fetch_array($sql))
				{
				?>
                    <h2><?php echo $fetch['title']; ?></h2>
					<?php echo "<img src=\"$path$fetch[picture]\">" ?>
                    <p><?php echo $fetch['content']; ?></p>
                    <?php
					}
					?>
					</div>
				</div><!--middle division close-->
				<?php include("parts/right.php"); ?>
			</div><!--box division close-->
			<?php include("parts/footer.php"); ?>
		</div><!--main division close-->
	</body>
</html>
