<?php 	

if(!isset($_POST['cadastrar']) || empty($_POST['nome_filme']) || empty($_POST['tempo_filme']) || empty($_POST['categoria']))
{
	header('location:index.php?msg=campo_invalido');
}
else
{

include_once'../database/filmes.dao.php';


	$dados = $_POST;
	unset($dados['cadastrar']);

	//cadastrar o carro apos receber as infos

	$result = cadastrar_filme($dados['nome_filme'], $dados['categoria'], $dados['tempo_filme']);

	if($result)
	{
		header('location:index.php?msg=cadastro_sucesso');
	}
	else
	{
		header('location:index.php?msg=erro_cadastro');
	}



}








 ?>