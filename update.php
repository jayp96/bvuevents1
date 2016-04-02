<?php 
	include('./inc/header.inc.php');  
?>
<?php

$u_submit = @$_POST['u_submit'];
//declaring variables to prevent errors.
$u_ekey = ""; //event keyword


$u_ekey = strip_tags(@$_POST['u_ekey']);
$md5_u_ekey = md5($u_ekey);//md5 encrypted keyword
if($u_submit){

$sql = mysql_query("SELECT * FROM events WHERE e_key='$md5_u_ekey' LIMIT 1"); // query the event
	//Check for their existence
	$count = mysql_num_rows($sql); //Count the number of rows returned
	if ($count == 1) {
		while($row = mysql_fetch_array($sql)){ 
             $p_id = $row["p_id"];
             $e_id = $row["e_id"];
             $e_name = $row["e_name"];
        }
		
		$_SESSION["p_id"] = $p_id;
		header('location: home.php');
        exit();
		} else {
		echo 'Wrong keyword entered.<br> Please try again.';
		exit();
	}


}


?>
<div class="container">

	<div class="col-sm-6 text-center">
	<h2>Enter Your keyword here:</h2>
	<br>
	<br>
	<br>
	<br>
	<form role="form" action="update.php" method="POST">
	
	
		<div class="form-group">
			<label for="u_ekey"><h4>Event Keyword:</h4></label>
			<input type="password" class="form-control" id="u_ekey" name="u_ekey">
		</div>
		<input type="submit" class="btn btn-default" name="u_submit" value="Submit!">
	</form>	
	</div>
	<div class="col-sm-6">



	</div>


</div>


<?php include('./inc/footer.inc.php');?>