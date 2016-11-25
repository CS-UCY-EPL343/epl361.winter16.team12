<?php
//session_start();
include '_dbhandler.php';

// Get fagerstrom results from FORM and insert to database
if(isset($_POST["Submit"])){
	if(!empty($_POST["answers1"] and $_POST["answers2"] and $_POST["answers3"] and $_POST["answers4"] and $_POST["answers5"] and $_POST["answers6"])){
		
		$Q1 = $_POST['answers1'];
		$Q2 = $_POST['answers2'];
		$Q3 = $_POST['answers3'];
		$Q4 = $_POST['answers4'];
		$Q5 = $_POST['answers5'];
		$Q6 = $_POST['answers6'];
		
		$sid = "";
		
		// Get subject id
		$sql = "SELECT * FROM tbltemp";
		
		$result = mysqli_query($conn, $sql);
		
		if(!$row = mysqli_fetch_assoc($result)){
			echo "Error: Try again!";
		}else{
			$sid = $row['tempID'];
			//echo "SubjectID = ".$sid;
		}

		// insert subject and fagerstrom results to database
		$sql = "INSERT INTO fagerstrom (Ans_1, Ans_2, Ans_3, Ans_4, Ans_5, Ans_6, subjectID) VALUES ('$Q1', '$Q2', '$Q3', '$Q4','$Q5','$Q6','$sid')";
		$result = mysqli_query($conn, $sql);
		
		echo '<br />';
		echo 'Data inserted successfully!';
	}else{
		echo "You have to select all answers to submit!";
	}

	header("Refresh: 3; url= new5.php");
}

?>

