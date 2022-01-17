<?php 
include 'includes/header.php';
session_start();
if(!isset($_SESSION['username'])){
	header("Location: ../test.php");
}
 ?>
       <?php 
       include 'includes/sidebar.php';
        ?>

            <?php 
            include 'includes/nav.php';

             ?>
                        
            <?php 
            include 'includes/footer.php';

             ?>}
