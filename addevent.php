<?php 
	include('./inc/header.inc.php'); 
?>

<div class="container">
<div class="col-sm-12 text-center">
<div class="col-sm-6">
</div>
	<div class="col-sm-6">
	<form role="form" action="" method="">
	  	<div class="form-group">
	    	<label for="e_name">Event Name:</label>
	    	<input type="text" class="form-control" id="e_name">
	  	</div>
	  	<div class="form-group">
		    <label for="e_link">Event Link:</label>
		    <input type="text" class="form-control" id="e_link">
	  	</div>
	  	<div class="form-group">
		    <label for="contact">Contact No:</label>
		    <input type="text" class="form-control" id="contact">
	  	</div>
	  	<!-- Correct this -->
	  	<div class="form-group">
		    <label for="e_poster">Event Poster:</label>
		    <input type="text" class="form-control" id="e_poster">
	  	</div>
	  	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
			<div class="form-group">
				<label for="e_postedby">Posted By:</label>
				<input type="text" class="form-control" id="e_postedby">
			</div>
		</div>
		<div class="col-sm-6" style="padding: 0px 0px;padding-left:1px;">
			<div class="form-group">
				<label for="e_position">Position:</label>
				<input type="text" class="form-control" id="e_position">
			</div>
		</div>
	  	<div class="form-group">
		   <!--  Use Selectize.js   -->
		    <label for="e_date">Event Date:</label>
		    <input type="text" class="form-control" id="e_date">
	  	</div>
	  	<div class="form-group">
		    <label for="e_time">Event Time:</label>
		    <input type="text" class="form-control" id="e_time">
	  	</div>
	  	<div class="form-group">
		    <label for="e_description">Event Description:</label>
		    <textarea cols="6" class="form-control" id="e_description"></textarea>
	  	</div>
	  	<div class="checkbox">
		    <label><input type="checkbox"> Remember me</label>
		</div>
	  		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
</div>
</div>

















<?php include('./inc/footer.inc.php');?>