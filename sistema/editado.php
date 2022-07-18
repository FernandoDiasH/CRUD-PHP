<?php 


	if(!isset($_POST['salvar']) || empty($_POST['nome_filme']) || empty($_POST['categoria']) 
		|| empty($_POST['tempo_filme']))
		{
			header('location:index.php?msg=campo_invalido');
		}
	 else
	 {
	 	$filme = $_POST;

	 	include_once '../database/filmes.dao.php';

	 	$result = editar_filme($filme['id'],$filme['nome_filme'],$filme['categoria'],$filme['tempo_filme']);

	 	if($result)
	 	{
	 		header('location:index.php?msg=edicao_sucesso');
	 	}
	 	else
	 	{
	 		header('loation:index.php?msg=erro_editar');
	 	}
	 }
		





 ?>