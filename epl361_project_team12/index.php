<?php 
	session_start();
	include '_header.php';
?>

<!DOCTYPE html>

<body onLoad="MM_preloadImages('img1.png.jpg')">
	<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img1.png.jpg',1)"></a>
	
	<div class="container">
		<img src="mg3.png" class="img-responsive" alt="file:///C:/Users/konstantina/Desktop/epl361/1page.html" style="width:704px;height:164px;">
		
		<br><br>
		<div class="content">
			  <p>The LHBD will start recruiting subjects for the EU funded, SmokeFreeBrain (SFB) project to help
					young unemployed people give up smoking. About 100 people will be selected for the project
					from a larger number of applicants that will respond to the recruitment call and complete an initial
					questionnaire. The documentation of which data will be included and how they will be stored and
					used will be an integral part of the project and the actual selection of the most appropriate mode
					of organization will be one of the first milestones. It is desirable to include a web version of the application that could
					be used by collaborators to set up queries to find out what data are available, or better still to have
					control access of a web version of the application.
				</p>
		</div><br>
			
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form action="_userLogin.php" method="post">
				  <div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" name="uid"class="form-control" id="exampleInputEmail1" required placeholder="Username">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				  <br><br>
				  <center><a href="new2.php"> <font color="black">Forgot Password? </font></a></center>
				</form>
			</div>
		</div>
    </div> <!-- /container -->
	
</body>
</html>