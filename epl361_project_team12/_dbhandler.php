<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';
$mysql_db = 'epl361_project';

// connect to mysql
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
