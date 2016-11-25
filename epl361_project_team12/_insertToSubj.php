<?php 

	    $query = "INSERT INTO `subject2`(`FullName`, `Age`, `Sex`, `Phone`, `Status`)
                        VALUES ('".encrypt($fn, $key)."','$age','$sex','".encrypt($phn, $key)."','$sts')"; 
    
    $result = mysqli_query($conn,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo "Subject Created successfully!" ."<br>";
    }
    
    else{
        echo "Error: Subject was not created \n";
    }
?>