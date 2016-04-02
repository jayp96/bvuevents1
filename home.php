<?php session_start();?>

<?php 
include("./inc/header.inc.php");


if(!isset($_SESSION['p_id'])){
	echo 'Sorry, go back again to enter.';
	echo '<br><a href="update.php">Back</a>';
}
else{

	$p_id =  $_SESSION["p_id"];
	echo 'Hello, '.$p_id;
	echo '<br>Would you like to leave? <a href="leave.php">Leave</a>';
}
	
?>

<?php include('./inc/footer.inc.php') ?>
	