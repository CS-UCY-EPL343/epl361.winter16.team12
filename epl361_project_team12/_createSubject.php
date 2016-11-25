
<?php
// php code to Insert data into mysql database from input text
session_start();
include '_dbhandler.php';
include '_enc_hash_func.php';

if(isset($_POST['Create']))
{
    
    // get values form input text and number
    $fn = $_POST['fullname'];;
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $phn = $_POST['phone'];
    $sts = $_POST['status'];

    // Hash password
    //$fn = hashword($fn, $salt);

    
    // connect to mysql database using mysqli
   // $connect = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
    
    // mysql query to insert Subject data
    include '_insertToSubj.php';
    
	// get the most inserted subject id
    include '_getSubjID.php';
	
    //mysqli_free_result($result);
    mysqli_close($conn);

    header("Refresh:3; url=new4.php");
}
