<?php 
	include('./inc/header.inc.php');  
?>

<?php

	$r_submit = @$_POST['r_submit'];
	//declaring variables to prevent errors.
	$r_uname = "";
	$r_ename = "";
	$r_batch = "";
	$r_year = "";
	$r_review = "";
	$r_rating = "";
	


	$r_uname = strip_tags(@$_POST['r_uname']);
	// convert the string to all lowercase
	$r_uname_lower = strtolower($r_uname);
	// Capitalise first letter of every word. 
	$r_uname_firstword = ucwords($r_uname_lower);
	// strip out all whitespace
	$r_uname_wspace = preg_replace('/\s*/', '', $r_uname);
	
	
	$r_ename = strip_tags(@$_POST['r_ename']);
	// convert the string to all lowercase
	$r_ename_lower = strtolower($r_ename);
	// Capitalise first letter of every word. 
	$r_ename_firstword = ucwords($r_ename_lower);
	// strip out all whitespace
	$r_ename_wspace = preg_replace('/\s*/', '', $r_ename);


	$r_batch = @$_POST['r_batch'];
	$r_year = @$_POST['r_year'];
	$r_review = strip_tags(@$_POST['r_review']);
	$r_rating = strip_tags(@$_POST['r_rating']);


	if($r_submit){

		if($r_uname&&$r_ename&&$r_batch&&$r_year&&$r_review&&$r_rating){
			$query = mysql_query("INSERT INTO reviews VALUES ( '' , '$r_uname_firstword' , '$r_ename_firstword' , '$r_batch' , '$r_year' , '$r_review' , '$r_rating' , '0') ");
			if($query){
				echo "Successs!!!";
			}else{
				echo 'Failure';
			}
		}


	}
?>


<?php include('./inc/footer.inc.php');?>