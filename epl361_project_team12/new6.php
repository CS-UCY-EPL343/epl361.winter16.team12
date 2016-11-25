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
			<center><h2>Fagerstrom</h2></center>
		</div>
			
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			<center>
				<form action="_fagerstrom.php" method="POST">
					 <strong>Question 1:</strong><br>
					 <td><input type="radio" name="answers1" value="A">A</td>
					 <td><input type="radio" name="answers1" value="B">B</td>
					 <td><input type="radio" name="answers1" value="C">C</td>
					 <td><input type="radio" name="answers1" value="D">D</td>
					 <br><br>
					 <strong>Question 2:</strong><br>
					 <td><input type="radio" name="answers2" value="A">A</td>
					 <td><input type="radio" name="answers2" value="B">B</td>
					 <td><input type="radio" name="answers2" value="C" disabled>C</td>
					 <td><input type="radio" name="answers2" value="D" disabled>D</td>
					 <br><br>
					 <strong>Question 3:</strong><br>
					 <td><input type="radio" name="answers3" value="A">A</td>
					 <td><input type="radio" name="answers3" value="B">B</td>
					 <td><input type="radio" name="answers3" value="C" disabled>C</td>
					 <td><input type="radio" name="answers3" value="D" disabled>D</td>
					 <br><br>
					 <strong>Question 4:</strong><br>
					 <td><input type="radio" name="answers4" value="A">A</td>
					 <td><input type="radio" name="answers4" value="B">B</td>
					 <td><input type="radio" name="answers4" value="C">C</td>
					 <td><input type="radio" name="answers4" value="D">D</td>
					 <br><br>
					 <strong>Question 5:</strong><br>
					 <td><input type="radio" name="answers5" value="A">A</td>
					 <td><input type="radio" name="answers5" value="B">B</td>
					 <td><input type="radio" name="answers5" value="C" disabled>C</td>
					 <td><input type="radio" name="answers5" value="D" disabled>D</td>
					 <br><br>
					 <strong>Question 6:</strong><br>
					 <td><input type="radio" name="answers6" value="A">A</td>
					 <td><input type="radio" name="answers6" value="B">B</td>
					 <td><input type="radio" name="answers6" value="C" disabled>C</td>
					 <td><input type="radio" name="answers6" value="D" disabled>D</td>
					 <br><br>
					<td><a href="new5.php">Back</a></td>
					<td><a href="new4.php">Cancel</a></td><br>
					<td><button type="submit" name="Submit" id="but" class="btn btn-default">Submit</button></td>
			  </form>
			</center><br><br>
			</div>
		</div>
    </div> <!-- /container -->
</body>
</html>
  