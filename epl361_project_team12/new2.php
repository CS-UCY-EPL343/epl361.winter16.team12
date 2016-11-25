<?php 
	include '_header.php';
?>
<!DOCTYPE html>

<body onLoad="MM_preloadImages('img1.png.jpg')">
	<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img1.png.jpg',1)"></a>
	
	<div class="container">
		
		<a href="index.php"><img src="mg3.png" class="img-responsive" alt="SmokeFreeBrain" style="width:704px;height:164px;"></a>
		
		<br><br>
		
		<div class="topcorner">
		<a href="index.php">
						<span class="glyphicon glyphicon-log-out"></span> Logout
				</a>
	</div> <!-- end logout -->

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form>
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				  <br><br>
				  <center><a href="index.php"> <font color="black">Go back</font></a></center>
				</form>
			</div>
		</div>
    </div> <!-- /container -->
</body>
</html>