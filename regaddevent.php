<?php 
	include('./inc/header.inc.php');  
?>
<?php

	$add = @$_POST['add'];
	//declaring variables to prevent errors.
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
	

	$e_name = strip_tags(@$_POST['e_name']);
	// convert the string to all lowercase
	$e_name_lower = strtolower($e_name);
	// Capitalise first letter of every word. 
	$e_name_firstword = ucwords($e_name_lower);
	// strip out all whitespace
	$e_name_wspace = preg_replace('/\s*/', '', $e_name);
	
	$e_key = strip_tags(@$_POST['e_key']);
	//md5 encrypted key
	$md5_e_key = md5($e_key);

	$e_link = strip_tags(@$_POST['e_link']);
	$e_fees = strip_tags(@$_POST['e_fees']);
	$contact = @$_POST['contact'];
	
	$email = strip_tags(@$_POST['email']);
	$e_poster = strip_tags(@$_FILES['e_poster']['name']);
	$e_postedby = strip_tags(@$_POST['e_postedby']);
	$e_designation = @$_POST['e_designation'];
	$d = date("Y-m-d"); // Year - Month - Date
	$e_datetime = @$_POST['e_datetime'];
	$e_description = @$_POST['e_description'];
	$e_id = md5($e_name_lower);
	
	if($add){
		//Check if event already exists
		$e_check = mysql_query("SELECT e_id FROM events WHERE e_id ='$e_id'");
		//Count the amount of rows where e_id = $e_id
		$check = mysql_num_rows($e_check);
		if($check == 0){
			//check all of the fields have been filled in
			if($e_name&&$e_key&&$e_link&&$e_fees&&$contact&&$email&&$e_poster&&$e_postedby&&$e_designation&&$e_datetime&&$e_description){
				//check the maximum length of username/first name/last name does not exceed 25 characters
					if(strlen($e_postedby)>25){
						echo "The maximum limit for the name of the respective person (entering this info) is 25 characters";
					}
					else if(strlen($contact)>10){
						echo "Contact Number cannot be have greater than 10 digits!";

					}else{
						
						//Image Upload Script
						
						//Check Image filetype
						if((@$_FILES['e_poster']['type'] == "image/jpeg") || (@$_FILES['e_poster']['type'] == "image/jpg") || (@$_FILES['e_poster']['type'] == "image/gif") || (@$_FILES['e_poster']['type'] == "image/png") ){

							//Check Image Size to be less than 2 MB 
							if((@$_FILES['e_poster']['size'] < (1048576*2))){
								//This is because by default the Apache umask is set to 0022 by default.
								//Since umask is to revoke permission.
								 umask(0000);
								 $dir_name = $e_name_firstword;
								 $dir_path = "userdata/profile_pics/$dir_name"; 
								 if(mkdir($dir_path , 0777 , true)){
								 	echo 'Folder Created!';
								 
									 if(file_exists("userdata/profile_pics/".$dir_name."/".@$_FILES['e_poster']['name'])){
									 	echo @$_FILES['e_poster']['name']."Already exists"; 
									 	}	else{	
										 		if(move_uploaded_file(@$_FILES['e_poster']['tmp_name'] , "userdata/profile_pics/$dir_name/".@$_FILES['e_poster']['name'])){

												 	echo '<br>Uploaded and stored';
												 	//Query runs
												 	$query = mysql_query("INSERT INTO events VALUES ( '' , '$e_id' , '$e_name_firstword' , '$md5_e_key' , '$e_link' , '$e_fees' ,'$contact' , '$email' , '$e_poster' , '$e_postedby' , '$e_designation' , '$d' , '$e_datetime' , '$e_description' , '0') ");
													if($query){
														echo "<br>Successfully stored in the database";
														die("<h2>Welcome to BVUevents</h2>Your event has been sent for confirmation to the admin and will get promoted very soooooooooooon...");
													}else{
														echo "<br>Failed to store in the database";
													}
											 	
											 	}else {
												 		echo 'NOT uploaded';
												 }
									 	
									 		}
								 }else{
									 	echo 'Folder not created';
									 }

							}else{
								echo 'Please Upload an image of file size less than 1 MB.For anything else you are most welcomed to send <a href="#">admin</a> an email!';
							}
						}else{
							echo 'Please Upload image in either jpeg, gif or png format. For more details you are more than welcomed to send <a href="#">admin</a> an email!';
						}

						
				
					}		


			}else{
				echo 'Please fill in all the fields!';

			}
		}else{
			echo 'This already exists!';
		}

	}

?>
<?php include('./inc/footer.inc.php');?>