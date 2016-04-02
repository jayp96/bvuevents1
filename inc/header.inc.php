<?php 
session_start();
include("./inc/connect.inc.php");
if(!isset($_SESSION['p_id'])){
	$p_id = '';
}
else{

	$p_id = $_SESSION['p_id'];
	
}
	
?>



<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>

	 <meta charset="utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <title>BVU Events</title>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	 </script>
	 <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	 <style>
	 	
	 </style>
	 	
	 	 <!-- SELECTIZE files-->
	 	 <script src="js/standalone/selectize.min.js"></script>
	 	 <link rel="stylesheet" type="text/css" href="css/selectize.css">
		
		 <!-- OWL Carousel files -->
		 <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		 <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
		 <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
		 <link rel="stylesheet" type="text/css" href="css/style.css">
		
		 <!-- Custom JS File -->
		 <script src="js/main.js"></script> 

		 <!-- DateRangePicker CSS File-->
		 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

		 <!-- jQuery Bootstrap Star Rating plugin's CSS -->
		 <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>


	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- Change here when changing the website root folder--><a href="../events/" class="navbar-brand">BVU Events</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
	
      		
    		
    		<div class="collapse navbar-collapse" id="myNavbar">
			<?php 
			if(!$p_id){


			echo '
			<ul class="nav navbar-nav navbar-left">
			<!-- Change here before submitting to the server--><li><a href="display.php"><span class="glyphicon glyphicon-user"></span> Events</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
     		 <!-- Change here before submitting to the server--><li><a href="../events/addevent.php"><span class="glyphicon glyphicon-user"></span> Add Event</a></li>
      		 <!-- Change here before submitting to the server--><li><a href="../events/update.php"><span class="glyphicon glyphicon-log-in"></span> Update</a></li>
      		 <!-- Change here before submitting to the server--><li><a href="../events/postreview.php"><span class="glyphicon glyphicon-log-in"></span> Review</a></li>

      		 
    		 </ul>';
    		}else{
    			echo '
    			<ul class="nav navbar-nav navbar-left">
			<!-- Change here before submitting to the server--><li><a href="display.php"><span class="glyphicon glyphicon-user"></span> Events</a></li>
			</ul>
    			<ul class="nav navbar-nav navbar-right"> <!-- Change here before submitting to the server--><li><a href="'.$p_id.'"><span class="glyphicon glyphicon-log-in"></span> UpdateProfile</a></li>
    			<!--urce:localhost/events/fsdfdsfinternshipfairdasd Change here before submitting to the server--><li><a href="../events/leave.php"><span class="glyphicon glyphicon-log-in"></span> Leave</a></li>
      		 
    		 </ul>';
    		}
    		?>
		</div>
		

		</div>
		</nav>
	