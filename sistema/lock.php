<?php 
session_start();

	if(empty($_SESSION))
	{
		header('location: ../index.php?msg=sessao_vazia');
	}

 ?>