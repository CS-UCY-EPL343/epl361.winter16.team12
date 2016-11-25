<?php
$key = md5('epl361');
$salt = md5('epl361');

//Encrypt algorithm
function encrypt($string, $key){
	$string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
	return $string;
}

function hashword($string, $salt){
	$string = crypt($string, '$1$' . $salt . '$');
	return $string;
}
?>