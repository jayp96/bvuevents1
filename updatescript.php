<?php 
	include('./inc/header.inc.php');  
?>

<?php

	
	
	$update = @$_POST['update'];
	//declaring variables to prevent errors.
	$p_id = "";
	$e_id = "";
	$e_name = "";
	$e_key = ""; //Will be used  to login.
	$e_link = "";
	$e_fees = "";
	$contact = "";
	$email = "";
	$e_poster = "";
	$e_postedby = "";
	$e_designation = "";
	$e_datetime = "";
	$e_description = "";
	$e_check = "";

	
	if($update){
		$p_id = $_POST['up_id'];
		$e_name = strip_tags(@$_POST['ue_name']);
		// convert the string to all lowercase
		$e_name_lower = strtolower($e_name);
		// Capitalise first letter of every word. 
		$e_name_firstword = ucwords($e_name_lower);
		// strip out all whitespace
		$e_name_wspace = preg_replace('/\s*/', '', $e_name);
		
		$e_key = strip_tags(@$_POST['ue_key']);
		//md5 encrypted key
		$md5_e_key = md5($e_key);

		$e_link = strip_tags(@$_POST['ue_link']);
		$e_fees = strip_tags(@$_POST['ue_fees']);
		$contact = @$_POST['ucontact'];
		
		$email = strip_tags(@$_POST['uemail']);
		
		$e_postedby = strip_tags(@$_POST['ue_postedby']);
		$e_designation = @$_POST['ue_designation'];
		$d = date("Y-m-d"); // Year - Month - Date
		$e_datetime = @$_POST['ue_datetime'];
		$e_description = @$_POST['ue_description'];
		$e_id = md5($e_name_lower);


		echo "123232424323243244<br>$p_id";
		
		//Check if event already exists
		$e_check = mysql_query("SELECT e_id FROM events WHERE p_id ='$p_id'");
		//Count the amount of rows where e_id = $e_id
		$check = mysql_num_rows($e_check);
		if($check == 1){
			//then update
			//check all of the fields have been filled in
			if($e_name&&$e_key&&$e_link&&$e_fees&&$contact&&$email&&$e_postedby&&$e_designation&&$e_datetime&&$e_description){
				//check the maximum length of username/first name/last name does not exceed 25 characters
					if(strlen($e_postedby)>25){
						echo "The maximum limit for the name of the respective person (entering this info) is 25 characters";
					}
					else if(strlen($contact)>10){
						echo "Contact Number cannot be have greater than 10 digits!";

					}else{

					//Query runs
						$sql = "UPDATE events SET e_key = '$md5_e_key', e_link =  '$e_link' ,e_fees = '$e_fees' ,contact = '$contact' ,email =  '$email' , e_postedby = '$e_postedby' ,e_designation =  '$e_designation' , d = '$d' , e_datetime = '$e_datetime' , e_description = '$e_description' , e_posted =  '0' WHERE p_id = '$p_id' ";
				 	$query = mysql_query($sql);
					if($query){
						echo "<br>Successfully Updated in the database";
						die("<h2>Welcome to BVUevents</h2>Your event has been sent for confirmation to the admin and will get promoted very soooooooooooon...");
		 			}else{
						echo "<br>Failed to store in the database";
					}
					
					
						
				
					}		


			}else{
				echo 'Please fill in all the fields!';

			}
		}else{
				//don't update
				//no event exists with this name
				echo 'No event exists with this name.';
		}

	}

	$changepic = @$_POST['changepic'];
	if($changepic){
		$e_poster = @$_FILES['ue_poster']['name'];
		$p_id = $_SESSION["p_id"];
		//Scope of php variables
		$query = mysql_query("SELECT e_name FROM events WHERE p_id = '$p_id'");
		if($query){
			echo "<br><br><br>Successfully got the event name from the database";
			while($row = mysql_fetch_assoc($query)){
				$dir_name = $row['e_name'];
			}

			//Image Upload Script
						
							//Check Image filetype
							if((@$_FILES['ue_poster']['type'] = "image/jpeg") || (@$_FILES['ue_poster']['type'] = "image/jpg") || (@$_FILES['ue_poster']['type'] = "image/gif") || (@$_FILES['ue_poster']['type'] = "image/png") ){

								//Check Image Size to be less than 2 MB 
								if((@$_FILES['ue_poster']['size'] < (1048576*2))){
									//This is because by default the Apache umask is set to 0022 by default.
								//Since umask is to revoke permission.
								 
								 $dir_path = "userdata/profile_pics/$dir_name";
								 if(file_exists("userdata/profile_pics/".$dir_name."/".@$_FILES['ue_poster']['name'])){
									 	echo @$_FILES['ue_poster']['name']."Already exists"; 
									 	}	else{	
										 		if(move_uploaded_file(@$_FILES['ue_poster']['tmp_name'] , "userdata/profile_pics/$dir_name/".@$_FILES['ue_poster']['name'])){
										 			echo $p_id;
													//Query runs
												 	$query = mysql_query("UPDATE events SET e_poster ='$e_poster' WHERE p_id = '$p_id'");
													if($query){
														echo "<br>Successfully Updated in the database";
										 			}else{
														echo "<br>Failed to store in the database";
													}
												 	echo '<br>Uploaded and stored';
												 	
											 	
											 	}else{
												 		echo "Not uploaded because of error #".$_FILES["ue_poster"]["error"];
												 }
									 	
									 		}
									 		}else{
								echo 'Please Upload an image of file size less than 2 MB.For anything else you are most welcomed to send <a href="#">admin</a> an email!';
							}
						}else{
							echo 'Please Upload image in either jpeg, gif or png format. For more details you are more than welcomed to send <a href="#">admin</a> an email!';
						}
		} else{

			echo "<br><br><br> Failed to get the event name from the database";
		}
		

	}


?>	



<?php include('./inc/footer.inc.php');?>