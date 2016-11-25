<?php
//session_start();
include '_dbhandler.php';
if(isset($_POST["Submit"])){
	if(!empty($_POST["answers1"] and $_POST["answers2"] and $_POST["answers3"] and $_POST["answers4"] and $_POST["answers5"] and $_POST["answers6"] and $_POST["answers7"] and $_POST["answers8"] and $_POST["answers9"] and $_POST["answers10"])){
		
		$Q1 = $_POST['answers1'];
		$Q2 = $_POST['answers2'];
		$Q3 = $_POST['answers3'];
		$Q4 = $_POST['answers4'];
		$Q5 = $_POST['answers5'];
		$Q6 = $_POST['answers6'];
		$Q7 = $_POST['answers7'];
		$Q8 = $_POST['answers8'];
		$Q9 = $_POST['answers9'];
		$Q10 = $_POST['answers10'];
		
		$sid = "";
		
		// Get subject id
		$sql = "SELECT * FROM tbltemp";
		
		$result = mysqli_query($conn, $sql);
		
		if(!$row = mysqli_fetch_assoc($result)){
			echo "Error: Try again!";
		}else{
			$sid = $row['tempID'];
			//echo "SubjectID = ".$sid;
			
			$sql = "TRUNCATE TABLE tbltemp";
			mysqli_query($conn, $sql);
		}

		// insert questionnaire answers with the subject
		$sql = "INSERT INTO rosenberg (Ans_1, Ans_2, Ans_3, Ans_4, Ans_5, Ans_6, Ans_7, Ans_8, Ans_9, Ans_10, subjectID) 
				VALUES ('$Q1', '$Q2', '$Q3', '$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$sid')";

		$result = mysqli_query($conn, $sql);
		
		echo '<br />';
		echo 'Data inserted successfully!';
	}else{
		echo "You have to select all answers to submit!";
	}

	//header("location: ../new6.php");
	header("Refresh: 3; url= new4.php");
}
?>

