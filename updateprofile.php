<?php include("./inc/header.inc.php"); ?>
<?php


if($p_id){


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


}else{


//if no user logged in then display the details about a single page
	header('location: update.php');



}
?>

<div class="container">
<?php $path = "userdata/profile_pics/".$e_name."/".$e_poster;?>
<div class="col-sm-4" style="padding: 0px 0px;padding-right:1px;">

<img src="<?php echo "".$path."";?>" width="400">
<form role="form" action="updatescript.php" method="POST" enctype="multipart/form-data">

	<div class="form-group" >
    	<label for="ue_poster">Event Poster:</label>
    	<input type="file" class="form-control" id="ue_poster" name="ue_poster" >
  	</div>
  	<input type="submit" class="btn btn-default" name="changepic" value="Change!"> 

</form>


</div>
<form role="form" action="updatescript.php" method="POST"> 
<div class="col-sm-8">
<!-- Text details here -->
	<div class="col-sm-12 text-center">
	<h2>Enter New details here::</h2>
	</div>
	<div class="col-sm-12 text-left">
	
	
	<div class="form-group" >
		    	<label for="p_id">Post ID:</label>
		    	<input type="number" class="form-control" id="p_id" name="up_id" <?php echo"value='".$p_id."'";?> readonly>
		  	</div>
	
	
	
	
	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
		  	<div class="form-group" >
		    	<label for="e_name">Event Name:</label>
		    	<input type="text" class="form-control" id="e_name" name="ue_name"<?php echo"value='".$e_name."'";?> readonly>
		  	</div>
	  	</div>
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
		  	<div class="form-group">
		    	<label for="e_key">Event KeyWord:</label>
		    	<input type="password" class="form-control" id="e_key" name="ue_key" <?php echo"value='".$e_key."'";?> readonly>
		  	</div>
	  	</div>
	
	
		<div class="form-group">
		    <label for="e_link">Event Link:</label>
		    <input type="text" class="form-control" id="e_link" name="ue_link" <?php echo"value='".$e_link."'";?>required>
	  	</div>
	
	
	<div class="form-group">
		    <label for="e_fees">Event Fees:</label>
		    <input type="text" class="form-control" id="e_fees" name="ue_fees" <?php echo"value='".$e_fees."'";?>required>
	  	</div>
	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
	<div class="form-group">
			    <label for="contact">Contact No:</label>
			    <input type="number" class="form-control" id="contact" name="ucontact" <?php echo"value='".$contact."'";?>required>
		  	</div>
	
	</div>
	<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
	
	<div class="form-group">
			    <label for="emailid">Email ID:</label>
			    <input type="email" class="form-control" id="emailid" name="uemail" <?php echo"value='".$email."'";?>required>
		  	</div>
	</div>
		<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
		<div class="form-group" >
				<label for="e_postedby">Posted By:</label>
				<input type="text" class="form-control" style="height: 36px;" id="e_postedby" <?php echo"value='".$e_postedby."'";?> name="ue_postedby" required>
				
			
	
	</div>
	</div>
	<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
	<div class="form-group">
				<label for="e_position">Position:</label>
				
				<input type="hidden" id="pseudo_position" <?php echo"value='".$e_designation."'";?> class="" name="">
				
				<select id="e_position" placeholder="Designation" name="ue_designation" class="selectized" >

				    	<option value="" selected="">Designation</option>
				    	<option value="Event Manager">Event Manager</option>
				    	<option value="Event Coordinator">Event Coordinator</option>
				    	
				    	<option value="Other">Other</option>
				</select>

			</div>

	
	</div>
	<div class="form-group">
		   <!--  Use Selectize.js   -->
		    <label for="e_date">Event Date and Time:</label>
		    

		    
 
			<input type="text" class="form-control" name="ue_datetime" id="e_datetime" placeholder="Event Date and Time"<?php echo"value='".$e_datetime."'";?>required/>
			 
			<script type="text/javascript">
			$(function() {
			    $('input[name="ue_datetime"]').daterangepicker({
			        timePicker: true,
			        timePickerIncrement: 30,
			        locale: {
			            format: 'MM/DD/YYYY h:mm A',
			            cancelLabel: 'Clear'
			        }
			    });
			});
			</script>
			
		</div>

	
	
	<div class="form-group">
		    <label for="e_description">Event Description:</label>
		    <textarea rows="8" class="form-control" id="e_description" name="ue_description" required><?php echo "$e_description"; ?></textarea>
	  	</div>
	</div>
	<div class="text-center">
	<input type="submit" class="btn btn-default" name="update" value="Update!">
	</div>
</div>
</form>

</div>



<!-- DateRangePicker JS -->

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<!--Selectize JS File-->
<script src="js/upselectize.js"></script>

<?php include("./inc/footer.inc.php"); ?>