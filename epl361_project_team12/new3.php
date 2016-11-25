<?php 
	include '_header.php';
?>

<!DOCTYPE html>

<body onLoad="MM_preloadImages('img1.png.jpg')">
	<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img1.png.jpg',1)"></a>
		
	<div class="container">
		
		<a href="index.php"><img src="img2.jpg" class="img-responsive" alt="SmokeFreeBrain" style="width:704px;height:160px;"></a>
		
		<br>
		<div class="content">
			<center><h2>Create Subject</h2></center>
		</div><br>
		
		<div class="topcorner">
			<a href="index.php">
							<span class="glyphicon glyphicon-log-out"></span> Logout
					</a>
		</div> <!-- end logout -->
			
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form action="_createSubject.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Full Name</label>
					<input type="text" name="fullname" class="form-control" id="exampleInputEmail1" required placeholder="Full name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Age</label>
					<input type="number" name="age" class="form-control" id="exampleInputEmail1" required placeholder="Age" min="18" max="35">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Sex</label>
					<input type="text" name="sex" class="form-control" id="exampleInputPassword1" placeholder="Sex">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Phone</label>
					<input type="text" name="phone" class="form-control" id="exampleInputPassword1" required placeholder="Phone" min="95000000" max="99999999">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Status</label>
					<input type="number" name="status" class="form-control" id="exampleInputPassword1" required placeholder="Status" min="0" max="1">
				</div>
				  <button type="submit" name="Create" class="btn btn-default">Submit</button>
				  <br><br>
				  <center><a href="index.php"> <font color="black">Continue</font></a></center>
				</form>
			</div>
		</div>
    </div> <!-- /container -->
	
</body>
</html>
