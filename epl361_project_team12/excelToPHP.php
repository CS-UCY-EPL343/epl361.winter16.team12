<?php 
	session_start();
	include '_dbhandler.php';
	include '_enc_hash_func.php';
	include ("PHPExcel/IOFactory.php");

	$objPHPExcelF = PHPExcel_IOFactory::load('fagerstrom.xlsx');
	$objPHPExcelR = PHPExcel_IOFactory::load('Rosenberg.xlsx');
	$html = "<table border = '1'>";
	$flag = TRUE;
	$tmpID = 0;

	/**============= Get values from excelFagerstrom.xlsx =================**/
	foreach ($objPHPExcelF->getWorksheetIterator() as $worksheet) {
		$higestRow = $worksheet->getHighestRow();
		for ($row=2; $row<=$higestRow; $row++){
			$html .= "<tr>";
			
			//excelFagerstrom.inc.php read all line of an subject 1
			include 'includes/excelFagerstrom.inc.php';

			//mysql query to insert Subject data
    		include '_insertToSubj.php';

			$html .= '<td>'.$Q1.'</td>';
			$html .= '<td>'.$Q2.'</td>';
			$html .= '<td>'.$Q3.'</td>';
			$html .= '<td>'.$Q4.'</td>';
			$html .= '<td>'.$Q5.'</td>';
			$html .= '<td>'.$Q6.'</td>';
			$html .= '<td>'.$fn.'</td>';
			$html .= '<td>'.$age.'</td>';
			$html .= '<td>'.$sex.'</td>';
			$html .= '<td>'.$phn.'</td>';
			$html .= '<td>'.$sts.'</td>';
			$html .= "</tr>";


    		// get the most inserted subject id
    		include '_getSubjID.php';

			// insert subject and fagerstrom results to database
			$sql = "INSERT INTO fagerstrom (Ans_1, Ans_2, Ans_3, Ans_4, Ans_5, Ans_6, subjectID) VALUES ('$Q1', '$Q2', '$Q3', '$Q4','$Q5','$Q6','$temp')";
			$result = mysqli_query($conn, $sql);

			//echo $temp;
			echo '<br />';
			if($flag){
				$tmpID = $temp; //temp comes from _getSubjectID.php
				$flag = FALSE;
			} 
		}// end forloop
	}// end foreach loop

	$html .= '</table>';
	echo $html;
	echo 'Data inserted into fagerstrom<br /><br /> ';

	/**===================================================================**/

	/**============= Get values from excelRosenberg.xlsx =================**/
	$html = "<table border = '1'>";
	foreach ($objPHPExcelR->getWorksheetIterator() as $worksheet) {
		$higestRow = $worksheet->getHighestRow();
		for ($row=2; $row<=$higestRow; $row++){
			$html .= "<tr>";
			
			//excelRosenberg.inc.php
			include 'includes/excelRosenberg.inc.php';

			// insert subject and rosenberg results to database
			$sql = "INSERT INTO rosenberg (Ans_1, Ans_2, Ans_3, Ans_4, Ans_5, Ans_6, Ans_7, Ans_8, Ans_9, Ans_10, subjectID) 
								VALUES ('$Q1', '$Q2', '$Q3', '$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$tmpID')";

								$tmpID++;

		$result = mysqli_query($conn, $sql);
			$html .= '<td>'.$Q1.'</td>';
			$html .= '<td>'.$Q2.'</td>';
			$html .= '<td>'.$Q3.'</td>';
			$html .= '<td>'.$Q4.'</td>';
			$html .= '<td>'.$Q5.'</td>';
			$html .= '<td>'.$Q6.'</td>';
			$html .= '<td>'.$Q7.'</td>';
			$html .= '<td>'.$Q8.'</td>';
			$html .= '<td>'.$Q9.'</td>';
			$html .= '<td>'.$Q10.'</td>';
			$html .= '<td>'.$fn.'</td>';
			$html .= '<td>'.$age.'</td>';
			$html .= '<td>'.$sex.'</td>';
			$html .= '<td>'.$phn.'</td>';
			$html .= '<td>'.$sts.'</td>';
			$html .= "</tr>";
		}
	}

	$html .= '</table>';
	echo $html;
	echo ' Data inserted <br />'; 
	
	header("Refresh: 10; url= new4.php");
?>