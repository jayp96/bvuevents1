<?php include('./inc/header.inc.php'); ?>

<?php
$reviews = mysql_query("SELECT * FROM reviews WHERE r_posted='0'");
	if(mysql_num_rows($reviews)>=1){	
	$i = 0;
	while($review = mysql_fetch_assoc($reviews)){
	$result[$i]['r_id'] = $review['r_id'];
	$result[$i]['r_uname'] = $review['r_uname'];
	$result[$i]['r_ename'] = $review['r_ename'];
	$result[$i]['r_batch'] = $review['r_batch'];
	$result[$i]['r_year'] = $review['r_year'];
	$result[$i]['r_review'] = $review['r_review'];
	$result[$i]['r_rating'] = $review['r_rating'];
	$i++;
	}


	}else{
		echo 'No reviews to display';
	}	


?>
<div class="container">
<?php 
	$j = 0;
 for($j=0;$j<$i;$j++){ //check here about $j<=$i or $j<$i

 	echo '
 	<div class="col-sm-12 text-center">
			<div class="col-sm-12 text-left">
				<div>
				<div class="infotitle">Review ID</div>
				<div class="infocontent">
					'.$result[$j]["r_id"].'
				</div>
				</div>

				<div>
					<div class="infotitle">Name</div>
					<div class="infocontent">
					'.$result[$j]["r_uname"].'
					</div>
				</div>
				<div>
					<div class="infotitle">Event Name</div>
					<div class="infocontent">
					'.$result[$j]["r_ename"].'
					</div>
				</div>

				<div>
					<div class="infotitle">Batch</div>
					<div class="infocontent">
					'.$result[$j]["r_batch"].'
					</div>
				</div>	
				<div>
					<div class="infotitle">Year</div>
					<div class="infocontent">
					'.$result[$j]["r_year"].'
					</div>
				</div>

				<div>
					<div class="infotitle">Event Review</div>
					<div class="infocontent">
					'.$result[$j]["r_review"].'
					</div>
				</div>
				<div>
					<div class="infotitle">Event Rating</div>
					<div class="infocontent">
					'.$result[$j]["r_rating"].'
					</div>
				</div>


				

				

			</div>
		</div>

<div class="col-sm-12">
<div class="col-sm-6">
<a href="rconfirm/'.$result[$j]["r_id"].'">Confirm</a>

<a href="rdelete/'.$result[$j]["r_id"].'">Delete</a>

</div>
</div>

 	';


 }
?>
</div>
<?php include('./inc/footer.inc.php'); ?>