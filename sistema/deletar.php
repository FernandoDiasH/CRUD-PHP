<?php 

	if(!isset($_GET['id_filme']))
	{
		header('location:index.php?msg=id_invalido');
	}
	else
	{
		include_once '../database/filmes.dao.php';

		$result = deletar_filme($_GET['id_filme']);

		if ($result) 
		{
			header('location:index.php?msg=filme_deletado');
		}
		else
		{
			header('location:index.php?msg=erro_deletar');
		}
	}

 ?>