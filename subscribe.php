<?php include('./inc/header.inc.php'); ?>

<?php

//susbcribe mail script

	$submit= @$_POST['submit'];
	//declaring variables to prevent errors.
	$email = "";
	$subscribed = "";


	$email = strip_tags(@$_POST['email']);
	// convert the string to all lowercase
	$email_lower = strtolower($email);

	if($submit){
		//Check if event already exists
		$m_check = mysql_query("SELECT email FROM emails WHERE email ='$email'");
		//Count the amount of rows where e_id = $e_id
		$check = mysql_num_rows($m_check);
		if($check == 0){
			//check all of the fields have been filled in
			if($email!=''){
				$query = mysql_query("INSERT INTO emails VALUES ( '' , '$email' , '1') ");
				if($query){
					echo "<br>Successfully stored in the database";
					die("<h2>Welcome to BVUevents</h2>You have been subscibed to events updates.You will get notified as soon as some new events comes...");
				}else{
						echo "<br>Failed to store in the database";
				}
			}

		}else{
			echo 'Email already subscribed to event updates!';
		}
	}


?>


<?php include('./inc/footer.inc.php'); ?>