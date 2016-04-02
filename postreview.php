<?php include('./inc/header.inc.php');  ?>
 <div class="container"> 
	 <div class="col-sm-12 text-center"> 
	 	<div class="col-sm-6">
	 	<br>
	 	<br>
	 	<br>
	 	<br>
	 	<br>
	 	<br>

	 	<br>
	 	<br>
	 	<br>
	 	<br>
	 	<h1>Reviews are our NUMBER - 1 priority.</h1>
	 	</div>
	 	<div class="col-sm-6">
		 	<form role="form" action="regreview.php" method="POST">
			  	<div class="form-group">
			    	<label for="u_name">Your Name:</label>
			    	<input type="text" class="form-control" id="u_name" name="r_uname">
			  	</div>
			  
		    	<div class="form-group">
			    	<label for="er_name">Event Name:</label>
			    	
			    	<input type="hidden" id="pseudo_er_name" class="" name="">
			
					<select id="er_name" placeholder="Event Name" name="r_ename" class="selectized" required>
				    	<option value="" selected="">Event Name</option>
				    	<?php
				    	$result = mysql_query("SELECT e_name FROM events WHERE e_posted = '0'");//change here to 1
				    	while($row = mysql_fetch_assoc($result)){

				    		echo "<option value='".$row['e_name']."'>".$row['e_name']."</option>";
				    		
				    	
				    	}


				    	?>
					</select>
			  	</div>
			  	
			  	<div class="col-sm-6" style="padding: 0px 0px;padding-right:1px;">
				  	<div class="form-group">
				    	<label for="u_batch">Batch:</label>
				    	
				    	<input type="hidden" id="pseudo_batch" class="" name="">
				
						<select id="u_batch" placeholder="Batch" name="r_batch" class="selectized" required>
					    	<option value="" selected="">Batch</option>
					    	<option value="CSE - M<">CSE - M</option>
					    	<option value="CSE - E">CSE - E</option>
					    	<option value="ECE(1) - M">ECE(1) - M</option>
					    	<option value="ECE(2) - M">ECE(2) - M</option>
					    	<option value="ECE - E">ECE - E</option>
					    	<option value="IT - M">IT - M</option>
					    	<option value="IT - E">IT - E</option>
					    	<option value="EEE">EEE</option>
					    	<option value="ICE">ICE</option>
						</select>
				  	</div>
			  	</div>
			  	<div class="col-sm-6"  style="padding: 0px 0px;padding-right:1px;">
			  		<div class="form-group">
				    	<label for="u_year">Year:</label>
				    	
				    	<input type="hidden" id="pseudo_year" class="" name="">
				
						<select id="u_year" placeholder="Year" name="r_year" class="selectized" required>
					    	<option value="" selected="">Year</option>
					    	<option value="1st Year<">1st Year</option>
					    	<option value="2nd Year">2nd Year</option>
					    	<option value="3rd Year">3rd Year</option>
					    	<option value="4th Year">4th Year</option>
					    	
						</select>
				  	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="u_review">Review:</label>
			    	<textarea class="form-control" id="u_review" name="r_review" rows="8" required></textarea>
			  	</div>
			  	<div class="form-group">
			    	<label for="rating-system">Rating:</label>
			    	<input id="rating-system" type="number" class="rating" name="r_rating" min="1" max="5" step="1" required>
			  	</div>
			  	<input type="submit" class="btn btn-default" name="r_submit" value="Submit!">
		  	</form>
	 	</div>


	 </div>
</div>
<!-- Rating JS -->
<script src="js/star-rating.js" type="text/javascript"></script>
<script src="js/reviewselectize.js" type="text/javascript"></script>
<?php include('./inc/footer.inc.php');?>