<?php include('./inc/header.inc.php'); ?>


<?php

//unsusbcribe mail script


$submit= @$_POST['submit'];
	//declaring variables to prevent errors.
	$email = "";
	$subscribed = "";


	$email = strip_tags(@$_POST['email']);
	// convert the string to all lowercase
	$email_lower = strtolower($email);

	if($submit){
		//Check if event already exists
		$m_check = mysql_query("SELECT email,subscribed FROM emails WHERE email ='$email'");
		//Count the amount of rows where e_id = $e_id
		$check = mysql_num_rows($m_check);
		if($check == 1){
			$row = mysql_fetch_array($m_check);
				$result['email'] = $row['email'];
				$result['subscribed'] = $row['subscribed'];
			
			if($result['subscribed'] == 1){
				
				
				//check all of the fields have been filled in
			if($email!=''){
				$query = mysql_query("UPDATE emails SET subscribed='0' WHERE email='$email' ");
				if($query){
					echo "<br>Updated in the database";
					die("<h2>Would you like to share what we lacked in giving you?</h2>");
				}else{
						echo "<br>Failed to update the database";
				}
			}else{
				echo 'Please provide us your email to unsubscribe';
			}
			}else{
				echo '<br>You have already unsubscribed';
				die("<h2>Would you like to share what we lacked in giving you?</h2>");
			}
			

		}else{
			echo 'Your email is not in our database. This means your email is already unsubscribed .';
		}
	}

?>

<div class="container">
	<div class="col-sm-12">
	<h2>Unsubscribe by entering your email</h2>
	</div>
	<div class="col-sm-12">
		<form role="form" action="unsubscribe.php" method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required/>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-default">
		</form>
	</div>
</div>
<?php include('./inc/footer.inc.php'); ?>