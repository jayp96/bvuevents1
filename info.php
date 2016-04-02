<?php include("./inc/header.inc.php"); ?>
<?php
if(isset($_GET['u'])){

		$p_id = mysql_real_escape_string($_GET['u']);
		if(ctype_alnum($p_id)){
		//check event exists
			$check = mysql_query("SELECT * FROM events WHERE p_id='$p_id'");
			if(mysql_num_rows($check)===1){
				$get = mysql_fetch_assoc($check);
				$p_id = $get['p_id'];
				$e_id = $get['e_id'];
				$e_name = $get['e_name'];
				$e_key = $get['e_key'];

				$e_link = $get['e_link']; 
				$e_fees = $get['e_fees'];
				$contact = $get['contact'];
				$email = $get['email'];
				$e_poster = $get['e_poster'];
				$e_postedby = $get['e_postedby'];
				$e_designation = $get['e_designation'];
				//$date ->> This has to be changed too
				$e_datetime = $get['e_datetime'];
				$e_description = $get['e_description'];
				

			}
			else{
			echo "<meta http-equiv=\"refresh\" content=\"0;url=http://localhost/events/index.php\">"; //Change here while changing the website or porting the website.
			exit();
			}
		}
	}

?>

<div class="container">
	<?php $path = "userdata/profile_pics/".$e_name."/".$e_poster;?>

	<div class="col-sm-4" style="padding: 0px 0px;padding-right:1px;">
		<div class="infotitle">Event Poster:</div>
		<img src="<?php echo "".$path."";?>" width="400" class="img-thumbnail img-responsive">

	</div>
	<div class="col-sm-8">
		<div class="col-sm-12 text-center">
			<div class="col-sm-12 text-left">
				<div>
				<div class="infotitle">ID</div>
				<div class="infocontent">
					<?php echo"".$p_id."";?>
				</div>
				</div>

				<div>
					<div class="infotitle">Event Name</div>
					<div class="infocontent">
					<?php echo"".$e_name."";?>
					</div>
				</div>

				<div>
					<div class="infotitle">Event Link</div>
					<div class="infocontent">
					<?php echo"".$e_link."";?>
					</div>
				</div>	
				<div>
					<div class="infotitle">Event Fees</div>
					<div class="infocontent">
					<?php echo"".$e_fees."";?>
					</div>
				</div>

				<div>
					<div class="infotitle">Contact Number</div>
					<div class="infocontent">
					<?php echo"".$contact."";?>
					</div>
				</div>
				<div>
					<div class="infotitle">Email Id</div>
					<div class="infocontent">
					<?php echo"".$email."";?>
					</div>
				</div>


				<div>
					<div class="infotitle">Posted By</div>
					<div class="infocontent">
					<?php echo"".$e_postedby."";?>
					</div>
				
				</div>


				<div>
					<div class="infotitle">Date and Time</div>
					<div class="infocontent">
					<?php echo"".$e_datetime."";?>
					</div>
				</div>


				<div>
					<div class="infotitle">Event Description</div>
					<div class="infocontent">
					<?php echo "$e_description"; ?>
					</div>
				</div>

				

			</div>
		</div>
	</div>
</div>



<!-- WRITE HTML CONTENT HERE TOMORROW -->
<?php include("./inc/footer.inc.php"); ?>