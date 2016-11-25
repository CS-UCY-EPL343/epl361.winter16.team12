<?php 

	$temp;

	/**======= Get the last inserted primary key from subject table =======**/
	$sql = "SELECT subjectID FROM subject2 ORDER BY subjectID DESC LIMIT 1" ;
	$result = mysqli_query($conn, $sql);
	
	//echo $result;
	if(!$datarow = mysqli_fetch_assoc($result)){
		echo "No subject ID selected!";
	}else{
		echo "Subject ID is: ";
		//echo $_SESSION['id'] = $datarow['subjectID'];
		$temp = $datarow['subjectID'];
		echo $temp.'<br />';
	}
?>