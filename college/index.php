<?php include('./inc/header.inc.php'); ?>


<title>PrattlePanel | bvulive.in</title>

<style>
.parallax {
    /* The image used */
    background-image: url("./img/apple.jpg");
    height:auto;
    /* Set a specific height */
    min-height: 700px;
    width: 100%;
    /* Create the parallax scrolling effect */
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.7;
}

.parallax1 {
    /* The image used */
    background-image: url("./img/texting.jpg");
    height:auto;
    /* Set a specific height */
    min-height: 700px;
    width: 100%;
    /* Create the parallax scrolling effect */
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.7;
}

.parallax2 {
    /* The image used */
    background-image: url("./img/phot.jpg");
    height:auto;
    /* Set a specific height */
    min-height: 700px;
    width: 100%;
    /* Create the parallax scrolling effect */
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.7;
}
  #section1 {
  	padding:50px 30px;
  	height:400px;
  	color: #fff; 
  	background-color: #ececec;
  	/*background: url(./img/photo.jpg);
  	background-size: cover;
    */
  }
  #section2 {padding:50px 30px;height:500px;color: #fff; background-color: #673ab7;
    /*background: url(./img/twitter-bird-with-pc.jpg);background-size: auto;*/
    ;
  }
  #section3 {padding:50px 30px ;height:400px;color: #fff; background-color: #f3c27a;
/*
  background: url(./img/icon-small.jpg);
  background-size: auto;
*/}
  #section41 {padding:50px 30px;height:500px;color: #fff; background-color: #00bcd4;
  background-size: auto;}
  #section42 {padding:50px 30px;height:500px;color: #fff; background-color: #009688;background: url(./img/3d-man.jpg);
  	background-size: auto;}
  #reg{
  	color: #ffffff;
  }
  #log{
  	color: #ffffff;
  }
.navbar.navbar-fixed-top .container-fluid .collapse.navbar-collapse{

	opacity = 0.5;
}
.parallax-container {
  height: 500px;
  width: 100%;
}

</style>
</head>
<body>

	<nav class="navbar navbar-fixed-top navbar-transparent"  >
		<div class="container-fluid" style="background-color:#494ca8;">
			<div class="navbar-header" style="padding-top: 25px;">
				<!-- Change here when changing the website root folder-->
				<a href="index.php" class="navbar-brand" style="color:#d1d6d6 ;font-size:1.4em;font-weight:700;">
				<span style="color:white;font-size:1.43em;font-weight:900;">Prattle</span>Panel</a>
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
     		 <!-- Change here before submitting to the server-->
     		 	<li>
     		 		<a href="#myModal" id="reg" data-toggle="modal" data-target="#myModal" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">
     		 			<span class="glyphicon glyphicon-user" ></span> Register
     		 		</a>
     		 	</li>
      		 
			
     		 <!-- Change here before submitting to the server-->
     		 	<li>
     		 		<a href="login.php" id="log">
     		 			<span class="glyphicon glyphicon-log-in" ></span> Login
     		 		</a>
     		 	</li>
      		 

      		 
    		 </ul>';
    		}else{
    			echo '
    			
    			<ul class="nav navbar-nav navbar-left" style="padding-top:30px;font-weight:700;"> 
					<!-- Change here before submitting to the server-->
						<li>
							<a href="addchatroom.php"><span class="glyphicon glyphicon-send"></span> Add Chatroom</a>
						</li>
					<!-- Change here before submitting to the server-->
						<li>
							<a href="joinchatroom.php"><span class="glyphicon glyphicon-transfer"></span> Join Chatroom</a>
						</li>
				</ul>

				<ul class="nav navbar-nav navbar-right" style="padding-top:30px;font-weight:700;">
     		
      		 		<!-- Change here before submitting to the server-->
      		 			<li>
      		 				<a href="leave.php"><span class="glyphicon glyphicon-log-out"></span> Leave</a>
      		 			</li>
      		 
      		 	</ul>
      		 ';
    		}
    		?>
		</div>
		
		</div>
</nav>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <!-- Modal Dialog !-->
            <div class="modal-dialog">
    
              <!-- Modal content-->
                <div class="modal-content">
                      <div class="modal-header" style="text-align:center;padding:1em;">

                        <button type="button" class="close" data-dismiss="modal" style="margin:0.5em"><span class="glyphicon glyphicon-remove-circle"></button>
                        <h4 class="modal-title" style="font-weight:bold; font-size: 3.5em"><strong><span class="glyphicon glyphicon-lock"></span>SIGNUP</strong></h4>
                      </div>

              <!-- Modal Body !-->
                <div class="modal-body"  style="padding:0em">
                
                  <!-- Form  !-->
                    <form role="form" href="register.php" style="padding:50px; background-color: #1F1F1F">
                      <div class="form-group">
                          <label  for="name">
                              <span style="color:#ffffff"><span class="glyphicon glyphicon-user">Name:</span>
                          </label>
                              <input type="text" class="form-control " id="name" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                              <div class="col-sm-offset-1 col-sm-4" style="padding: 0px 0px;padding-right:1px;">
                                Select Branch
                                <input type="hidden" id="pseudo_batch" class="" name="">
        
                              <select id="u_batch" placeholder="Batch" name="u_batch" class="selectized" required>
                              <option value="" selected="">Batch</option>
                              <option value="CSE - M">CSE - M</option>
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

                      <div class="col-sm-offset-1 col-sm-4"  style="padding: 0px 0px;padding-right:1px;">
                            <div class="form-group">
              
                                Select year        
                                <input type="hidden" id="pseudo_year" class="" name="">
        
                                <select id="u_year" placeholder="Year" name="u_year" class="selectized" required>
                                    <option value="" selected="">Year</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                
                                </select>
                            </div>
                      </div> 




                      <div class="form-group">
                          <label for="email">
                              <span style="color:#ffffff"><span class="glyphicon glyphicon-envelope"></span>Email:</span>
                          </label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label for="pwd">
                              <span style="color:#ffffff"><span class="glyphicon glyphicon-eye-open"></span>Password:</span>
                          </label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" >
                    
                      </div>
                      <div class="form-group">
                          <label for="mob">
                              <span style="color:#ffffff"><span class="glyphicon glyphicon-phone"></span>Mobile:</span> 
                          </label>
                              <input type="mobile" class="form-control" id="mob" placeholder="Enter Mobile Number">
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox">
                                <span style="color:#ffffff">Remember me</span>
                          </label>
                      </div>
                            <a href="login.html" class="btn btn-info" role="button" >Sign up!</a>
                            <a href="login.html" class="btn btn-info" role="submit" >Sign</a>
                            <button type="submit" class="btn btn-primary" href="login.html">Submit</button>

                      </form>
            
                </div>
                
              <!-- Modal Footer !--> 
                <div class="modal-footer">
                      <p>Already a member? <a href="#">Sign In</a></p>
                      <p>Forgot <a href="#">Password?</a></p>
                  
                </div>

              </div>

            </div>
  
        </div>

<div class="parallax" style="padding-top: 100px">
          
      
          <div class="col-sm-12 text-center" style="color:#ffffff;text-align:center;position:absolute;top:100px;right:35px;font-family: 'Galada', cursive; ">
        <strong>

          <h1 style="font-size: 4.5em;margin-top: 1.5em;opacity:1.0">
          <span class="glyphicon glyphicon-comment" style="color:#fff;position:relative;top:-45px;right:-250px;" ></span>
          Welcome to Prattle</h1>
            <!--
            <p style="font-size: 2.5em">
              The best platform to interact with other college students
            </p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            !-->
        </strong>
    </div>
 </div>


</div>
<div id="section1" class="container-fluid">

		<div class="col-sm-4">
 		<!--
		<img class="image-responsive img-rounded" src="./img/online-chatting.jpg" />
	!-->
 </div>
		<div class="col-sm-12 text-center" style="color:#000000">
  			<strong>
  				<h1 style="font-family: 'Galada', cursive;font-size:4em;padding-top:50px">CHAT ENDLESSLY!!</h1>
  					<p style="font-family: 'Droid Sans', sans-serif;font-size:2.5em"">Using Prattle you can connect with anyone in the college</p>
  					
  			</strong>
		</div>
 </div>

<div class="parallax1" style="padding-top: 100px">
        
    <div class="col-sm-12 text-center" style="color:#ffffff;text-align:center;position:absolute;top:100px;right:35px;font-family: 'Galada', cursive; ">
    <strong>
		  <h1 style="font-size: 4.5em;margin-top: 1.5em;opacity:1.0">A whole New way to connect with your friends!! </h1>
  			 <p style="font-size: 2.5em;font-family: 'Droid Sans', sans-serif;"> Prattle is the whole new way of connecting with your friends</p>

    </strong>
    </div>
  
</div>
<div id="section3" class="container-fluid">
  	<div class="col-sm-12 text-center" style="color: #000000;padding-top: 50px;">
	  	<h1 style="font-family: 'Shrikhand', cursive;font-size: 4em">Connect with your Alumni!!</h1>
  			<p style="font-family: 'Droid Sans', sans-serif;font-size: 2em">Its an easy way of connecting with your Alumnis' without any hustle-bustle</p>
  			
  	</div>		
</div>
<div class="parallax2" style="padding-top: 100px">
        
    <div class="col-sm-12 text-center" style="color:#000000;text-align:center;position:absolute;top:100px;right:35px;font-family: 'Galada', cursive; ">
    <strong>
      <h1 style="font-size: 4.5em;margin-top: 1.5em;opacity:1.0">Connect Now!! </h1>
         <p style="font-size: 2.5em;font-family: 'Droid Sans', sans-serif;"> It's absolutely Free!!</p>

    </strong>
    </div>

    <div class="buttons">
    <div class="col-sm-6">
      <div id="login">
        <div class="text-center">
          <a href="login.php" class="btn btn-primary" role="button">Login</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div id="register">
        <div class="text-center">
          <a href="register.php" class="btn btn-success" role="button">Register!</a>
        </div>
      </div>
    </div>
  </div>  
</div>



<script>
$(document).on('scroll', function (e) {
    $('.navbar').css('opacity', ($(document).scrollTop() / 500));
    $('.navbar').css('background-color = yellow');
});
</script>

<?php include('./inc/footer.inc.php');?>
