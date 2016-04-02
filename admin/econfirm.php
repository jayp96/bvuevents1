<?php include('./inc/header.inc.php'); ?>

<?php
if($id){
if(isset($_GET['u'])){
	$id = mysql_real_escape_string($_GET['u']);
		if(ctype_alnum($id)){


			$sql = mysql_query("UPDATE events SET e_posted = '1' WHERE p_id='$id'");
			if($sql){
				echo "<br>Successfully Updated in the database";
			
				include('sendupdate.php');				}else{
				echo "<br>Update Failed";
			}

		}
	}	
}

?>

<?php include('./inc/footer.inc.php'); ?>