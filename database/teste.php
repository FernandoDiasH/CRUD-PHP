<?php 	
include_once 'filmes.dao.php';

$result = cadastrar_filme('Aladim', 'aventura', 125);

if($result){
    echo "cadastrado";


}
else
{
    echo'falha';
}
 ?>
