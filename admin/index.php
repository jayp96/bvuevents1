<?php 
session_start();
include("./inc/connect.inc.php");
if(!isset($_SESSION['id'])){
	$id = '';
}
else{

	$id = $_SESSION['id'];
	
}
	
?>

<?php

$login = @$_POST['login'];
$username = '';
$password = '';

$username = @$_POST['username'];
$password = @$_POST['password'];

if($login){

	$check = mysql_query("SELECT id,name,username FROM adminlog WHERE username='$username' AND password='$password'");
	//Check for their existence
	$count = mysql_num_rows($check); //Count the number of rows returned
	if ($count == 1) {
		while($row = mysql_fetch_array($check)){ 
             $id = $row["id"];
             $name = $row["name"];
             $username = $row["username"];
        }
		
		$_SESSION["id"] = $id;
		header('location: main.php');
        exit();
		} else {
		echo 'Wrong Combination entered.<br> Please try again.';
		exit();
	}

}






?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
	 <meta charset="utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	 <title>Admin Panel | BVU Events</title>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	 </script>
	 <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
	 <style>
	 	
	 </style>
	 	
	 	
		 
		 <!-- Custom css -->
		 <link rel="stylesheet" type="text/css" href="css/style.css">
		
		 <!-- Custom JS File -->
		 <script src="js/main.js"></script> 

		 

		 
</head>
<body lang="en-US">

<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- Change here when changing the website root folder--><a href="index.php" class="navbar-brand">AdminPanel</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<?php 
			if(!$id){


			
    		}else{
    			echo '
    			
    			<ul class="nav navbar-nav navbar-left">
			<!-- Change here before submitting to the server--><li><a href="confirmevents.php"><span class="glyphicon glyphicon-user"></span> Confirm Events</a>
			</li><!-- Change here before submitting to the server--><li><a href="confirmreviews.php"><span class="glyphicon glyphicon-user"></span> Confirm Reviews</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
     		 
      		 <!-- Change here before submitting to the server--><li><a href="leave.php"><span class="glyphicon glyphicon-log-in"></span> Leave</a></li>

      		 
    		';
    		}
    		?>
		</div>
		
		</div>
</nav>
<div class="container">

<div class="col-sm-12 text-center">
	<div class="col-sm-6">
	<?php 
	if(!$id){
	echo '
	<form role="form" action="index.php" method="POST">
		<div class="form-group" >
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="username" name="username" required>
		</div>
		<div class="form-group" >
			<label for="pass">Password:</label>
			<input type="password" class="form-control" id="pass" name="password" required>
		</div>

		<input type="submit" class="btn btn-default" name="login" value="Login">
  	</form>
  	';}
  	else{

  		header('location: main.php');
  		}?>
  	</div>
</div>

</div>


<?php include('./inc/footer.inc.php'); ?>