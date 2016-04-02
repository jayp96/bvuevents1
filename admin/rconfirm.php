<?php include('./inc/header.inc.php'); ?>

<?php
if($id){
	if(isset($_GET['u'])){
		$id = mysql_real_escape_string($_GET['u']);
		if(ctype_alnum($id)){
			$sql = mysql_query("UPDATE reviews SET r_posted = '1' WHERE r_id='$id'");
			if($sql){
				echo "<br>Successfully Updated in the database";
			}else{
				echo "<br>Update Failed";
			}

		}
	}


}