<?php
include '_dbhandler.php';

if(isset($_POST['Submit'])){
	$sid = $_POST['sid'];

	$sql = "INSERT INTO tbltemp (tempID) VALUES ('$sid')";

	$result = mysqli_query($conn, $sql);

	if($result)
    {
        echo "ID saved successfully!" ."<br>";
		
		// to see message wrong username or password change 0 to 2
		header("Refresh: 3; url = new5.php");
    }
    else{
        echo "Error: Subject was not created \n";
    }

}