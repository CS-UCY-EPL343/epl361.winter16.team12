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
			<center><h2>Choose Questionnaire</h2></center>
		</div><br>
			
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			<center>
				<a class="btn btn-default" href="new6.php" role="button">Fagerstrom</a>
				<a class="btn btn-default" href="new7.php" role="button">Rosenberg</a>
				<a class="btn btn-default" href="new4.php" role="button">Go back</a>
			</center><br><br>			
			</div>
		</div>
    </div> <!-- /container -->
</body>
</html>