<?php 
//funcao para buscar usuario

function buscar_usuario($nome, $senha)
{
    include_once 'conn.php';

    $conn = conectar();

    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";

    $result = mysqli_query($conn, $sql);

        //verificar se o comando retornou algo valido
    if(mysqli_affected_rows($conn) > 0){

        // comando foi bem executado entao simplesmente retorna os dados obtidos
        return true;
    }
    else if(mysqli_affected_rows($conn) == 0)
    {
        //o comando foi executado corretament, mas nao há dados na tabela
         return false;
    }
    else
    {
        // retornar nulo, caso o comando sql esteja errado, ou ha algum problema com a conexao com o BD
        return null;
    }   

}







 ?>