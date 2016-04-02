<?php 
	include('./inc/header.inc.php'); 
?>

<div class="container">
<div class="col-sm-12 text-center">
<div class="col-sm-6 text-center">
Instructions:


<br>

</div>
	<div class="col-sm-6">
	<form role="form" action="regaddevent.php" method="POST" enctype="multipart/form-data">
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
		  	<div class="form-group" >
		    	<label for="e_name">Event Name:</label>
		    	<input type="text" class="form-control" id="e_name" name="e_name" required>
		  	</div>
	  	</div>
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
		  	<div class="form-group">
		    	<label for="e_key">Event KeyWord:</label>
		    	<input type="password" class="form-control" id="e_key" name="e_key" required>
		  	</div>
	  	</div>
	  	<div class="form-group">
		    <label for="e_link">Event Link:</label>
		    <input type="text" class="form-control" id="e_link" name="e_link" placeholder="in https://www.example.com format" required>
	  	</div>
	  	<div class="form-group">
		    <label for="e_fees">Event Fees:</label>
		    <input type="text" class="form-control" id="e_fees" name="e_fees" required>
	  	</div>
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
		  	<div class="form-group">
			    <label for="contact">Contact No:</label>
			    <input type="number" class="form-control" id="contact" name="contact"  required>
		  	</div>
		</div>
		<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
		  	<div class="form-group">
			    <label for="emailid">Email ID:</label>
			    <input type="email" class="form-control" id="emailid" name="email" required>
		  	</div>
		</div>
	  	<!-- Correct this -->
	  	<div class="form-group">
		    <label for="e_poster">Event Poster:</label>
		    <input type="file" class="form-control" style="height: 36px;-moz-padding:0px 0px;" id="e_poster" name="e_poster" required>
	  	</div>
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
			<div class="form-group" >
				<label for="e_postedby">Posted By:</label>
				<input type="text" class="form-control" style="height: 36px;" id="e_postedby" name="e_postedby" required>
				
			</div>
		</div>
		<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
			<div class="form-group">
				<label for="e_position">Position:</label>
				
				<input type="hidden" id="pseudo_position" class="" name="">
				
				<select id="e_position" placeholder="Designation" name="e_designation" class="selectized" required>
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
		    

		    
 
			<input type="text" class="form-control" name="e_datetime" id="e_datetime" placeholder="Event Date and Time" required/>
			 
			<script type="text/javascript">
			$(function() {
			    $('input[name="e_datetime"]').daterangepicker({
			        timePicker: true,
			        timePickerIncrement: 30,
			        locale: {
			            format: 'MM/DD/YYYY h:mm',
			            cancelLabel: 'Clear'
			        }
			    });
			});
			</script>
			
		</div>
	  	
	  	<div class="form-group">
		    <label for="e_description">Event Description:</label>
		    <textarea rows="8" class="form-control" id="e_description" name="e_description" required></textarea>
	  	</div>
	  	
	  		<input type="submit" class="btn btn-default" name="add" value="Add Event!">
	</form>
</div>
</div>
</div>













<!-- DateRangePicker JS -->

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<!--Selectize JS File-->
<script src="js/addeventselectize.js" type="text/javascript"></script>


<?php include('./inc/footer.inc.php');?>