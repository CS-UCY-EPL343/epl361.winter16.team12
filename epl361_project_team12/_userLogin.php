<?php
session_start();
include '_dbhandler.php';
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM researcher WHERE username='$uid' AND password='$pwd'";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect!";
}else{
	echo "You are logged in!\n\n";
	echo "Your username is: ";
	echo $_SESSION['id'] = $row['username'];

	
// to see message wrong username or password change 0 to 2
	header("Refresh: 3; url = new4.php");
}