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
		
		<div class="content">
			<center><h2>Create Subject and Save An ID</h2></center>
		</div><br>
			
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form action="_subjectID.php" method="post">
				  <div class="form-group">
					<label for="exampleInputEmail1">Subject ID</label>
					<input type="text" name="sid" class="form-control" id="exampleInputEmail1" required placeholder="Subject ID">
				  </div>
				  <button type="submit" name="Submit" class="btn btn-default">SaveID</button>
				</form>
				
				<a class="btn btn-default" id="btn-exc" href="new3.php" role="button">Create New Subject</a><br /><br />
				<a class="btn btn-default" id="btn-exc" href="excelToPHP.php" role="button">Insert from excel</a>
			</div>
		</div><br /><br />
    </div> <!-- /container -->
</body>
</html>