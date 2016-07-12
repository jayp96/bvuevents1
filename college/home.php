<?php include('./inc/header.inc.php'); ?>


<title>Prattle | Login </title>
</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid" style="background-color:#494ca8;">
			<div class="navbar-header" style="padding-top: 25px;">
				<!-- Change here when changing the website root folder--><a href="index.php" class="navbar-brand" style="color:#d1d6d6 ;font-size:1.4em;font-weight:700;"><span style="color:white;font-size:1.43em;font-weight:900;">Prattle</span>Panel</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar" style="background-color:#f2d535;"></span>
					<span class="icon-bar" style="background-color:#f2d535;"></span>
					<span class="icon-bar" style="background-color:#f2d535;"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<?php 
			if(!$u_id){


			echo '
			
			<ul class="nav navbar-nav navbar-right" style="padding-top:30px;font-weight:700;">
     		 <!-- Change here before submitting to the server--><li><a href="register.php"><span class="glyphicon glyphicon-sunglasses"></span> Register</a></li>
      		 
			
     		 <!-- Change here before submitting to the server--><li><a href="login.php"><span class="glyphicon glyphicon-sunglasses"></span> Login</a></li>
      		 

      		 
    		 </ul>';
    		}else{
    			echo '
    			
    			<ul class="nav navbar-nav navbar-left" style="padding-top:30px;font-weight:700;"> 
			<!-- Change here before submitting to the server--><li><a href="addchatroom.php"><span class="glyphicon glyphicon-send"></span> Add Chatroom</a>
			</li><!-- Change here before submitting to the server--><li><a href="joinchatroom.php"><span class="glyphicon glyphicon-transfer"></span> Join Chatroom</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right" style="padding-top:30px;font-weight:700;">
     		
      		 <!-- Change here before submitting to the server--><li><a href="leave.php"><span class="glyphicon glyphicon-log-out"></span> Leave</a></li>
      		 
      		 </ul>
      		 ';
    		}
    		?>
		</div>
		
		</div>
</nav>


<?php

if(!$u_id){
	 echo '<script> location.replace("login.php"); </script>';

        exit();
}else{

	$sql = mysql_query("SELECT * FROM chatusers WHERE u_id='$u_id'");
	while($row = mysql_fetch_array($sql)){ 
             $u_id = $row["u_id"];
             $u_key = $row["u_key"];
             $u_name = $row["u_name"];
             $u_pic = $row["u_pic"];
             $u_email = $row["u_email"];
             $u_password = $row["u_password"];
         }
    echo "<h2>Welcome ".$u_name."</h2>";
    
    $location_preset = "./userdata/profile_pics/";
    echo "<img src=".$location_preset."/".$u_name."/".$u_pic." width='200' height='300'></img>";





}


?>

<h2>Some text here...</h2>

<div class="buttons">
		<div class="col-sm-6">
			<div id="add">
				<div class="text-center">
					<a href="addchatroom.php" class="btn btn-primary" role="button">Add Chatrooms</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div id="join">
				<div class="text-center">
					<a href="joinchatroom.php" class="btn btn-success" role="button">Join Chatrooms</a>
				</div>
			</div>
		</div>
</div>



<?php include('./inc/footer.inc.php');?>