<?php  
include_once 'confg.inc.php';

function conectar()
{
	return mysqli_connect(HOST,USERNAME, PASSWORD, DBNAME);
}

?>