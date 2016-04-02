<?php include('./inc/header.inc.php'); ?>


<?php
if($id){
if(isset($_GET['u'])){
	$id = mysql_real_escape_string($_GET['u']);
		if(ctype_alnum($id)){


			$sql = mysql_query("DELETE FROM reviews WHERE r_id='$id'");
			if($sql){
				echo "<br>Successfully Deleted from the database";
			}else{
				echo "<br>Deletion Failed";
			}

		}
	}	
}
?>

<?php include('./inc/footer.inc.php'); ?>