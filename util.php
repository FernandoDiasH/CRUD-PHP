<?php 
function validar_msg($msg)
{
	switch ($msg) {
		case 'campo_em_branco':
			$retorno = '<h3 class="alert alert-warnig">Informe todos os campos para efetuar o login</h3>';
			break;
		
		case 'campo_invalido':
			$retorno =  '<h3 class="alert alert-danger">Dados informados inválido</h3>';
			break;

		case 'id_invalido':
			$retorno = '<h3 class="alert alert-danger">ID informado inválido</h3>';
			break;

		case 'edicao_sucesso':
			$retorno = '<h3 class="alert alert-success">Dados alterados com sucesso</h3>';
			break;

		case 'erro_editar':
			$retorno =  '<h3 class="alert alert-danger">Erro ao efetuar alteração</h3>';
			break;

		case 'filme_deletado':
			$retorno = '<h3 class="alert alert-success">Filme deletado com sucesso</h3>';
			break;

		case 'erro_deletar':
			$retorno = '<h3 class="alert alert-warnig">Erro ao deletar o filme</h3>';
			break;

		case 'cadastro_sucesso':
			$retorno = '<h3 class="alert alert-success">Filme cadastrado com sucesso</h3>';
			break;	
		case 'erro_cadastro':
			$retorno = '<h3 class="alert alert-warnig">Erro ao tentar cadastrar o filme</h3>';
			break;


		default:
			$retorno = '';
			break;
	}

	return $retorno;
}









 ?>