<?php 
include_once 'database/usuario.dao.php';

if(!isset($_POST['login']) || empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('location:index.php?msg=campo_em_branco');
}
else
{
	$login = $_POST;

	unset($login['login']);
	
	$result = buscar_usuario($login['usuario'], $login['senha']);

	if($result)
	{
		session_start();

		$_SESSION = $login;


		header('location:sistema/index.php?msg=login_sucesso');
	}
	else if($result === false)
	{
		header('location:index.php?msg=campo_invalido');
	}
	else
	{
		header('location:index.php?msg=problema_sql');
	}

}





 ?>