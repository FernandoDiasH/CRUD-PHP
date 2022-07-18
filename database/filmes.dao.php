<?php 

include 'conn.php';

//funçao para cadastrar filme
function cadastrar_filme($nome, $categoria, $tempo)
{
    $conn = conectar();

    $sql = "INSERT INTO filmes_tb (nome_filme, categoria_filme, tempo_filme) 
    VALUES ('$nome', '$categoria', $tempo)";

    $result = mysqli_query($conn, $sql);

    return $result;
}

//buscar um filme especifico

function buscar_filme($id_filme)
{
    $conn = conectar();

    $sql = "SELECT * FROM filmes_tb WHERE id = $id_filme";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) 
    {
        return $result;
    }
    else 
    {
        return null;
    }
}

//funçao para buscar todos os filmes
function buscar_todos()
{

    $conn = conectar();

    $sql = "SELECT * FROM filmes_tb";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return $result;
    }
    else if (mysqli_affected_rows($conn) == 0)
    {
        return false;
    }
    else
    {
        return null;
    }

}


//exibir filmes
function exbir_filmes()
{

    $result = buscar_todos();

    if($result === null)
    {
        return "<h3>Problema no SQL. Verifique sua conexao ou sua query </h3>";
    }
    else if (!$result)
    {
        return "<h3>Nao há Jogo cadastrado!";
    }
    else
    {
        $retorno = '';
        $retorno .= '<div class="col-6">';
        $retorno .= '<table class="table table-hover">';

        //tr - abre a linha da tabela
        $retorno .= '<tr>';
        $retorno .= '<th>ID #</th>'; // cada coluna do cabeçalho
        $retorno .= '<th>Nome</th>';
        $retorno .= '<th>Categoria</th>';
        $retorno .= '<th>Duraçao</th>';
        $retorno .= '<th>Deletar</th>';
        $retorno .= '<th>Editar</th>';
        $retorno .= '</tr>';



        while($filme = mysqli_fetch_assoc($result))
        {
            $retorno .= '<tr>';
            $retorno .= "<td>"  .$filme['id']               ."</td>";  
            $retorno .= "<td>"  .$filme['nome_filme']       ."</td>";
            $retorno .= "<td>"  .$filme['categoria_filme']  ."</td>";
            $retorno .= "<td>"  .$filme['tempo_filme']      ." mim</td>";
            $retorno .= "<td>"  .link_deletar($filme['id']) ."</td>";
            $retorno .= "<td>"  .link_editar($filme['id'])  ."</td>";
            $retorno .= "</tr>";

        }
        $retorno .= '</table>';
        $retorno .= '</div>';
        return $retorno;


    }
}


function link_deletar($id_filme)
{
    $link = '<a href="deletar.php?id_filme='.$id_filme.'" class="btn btn-outline-danger"
    onclick="return confirm(\'Tem certeza que deseja excluir este jogo?\')">Deletar</a>';
    return $link;
}

function link_editar($id_filme)
{
     $link = '<a href="editar.php?id_filme='.$id_filme.'" class="btn btn-outline-info">Editar</a>';
    return $link;

}


function deletar_filme($id_filme)
{
    $conn = conectar();

    $sql = "DELETE FROM filmes_tb WHERE id = $id_filme";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    
    return false;
}

function editar_filme($id, $nome, $categoria, $tempo)
{
    $conn = conectar();

    $sql = "UPDATE filmes_tb SET nome_filme = '$nome', categoria_filme = '$categoria', tempo_filme = $tempo WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
}


 ?>