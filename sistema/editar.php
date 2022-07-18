<?php 
	include_once'lock.php'; 

	if(!isset($_GET['id_filme']))
	{
		header('location:index.php?msg=id_invalido');
	}
	else
	{
		include_once '../database/filmes.dao.php';

		$result = buscar_filme($_GET['id_filme']);

		$filme = mysqli_fetch_assoc($result);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid">
	<h1>Página de cadastros</h1>

	<div class="col-3">
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Nome do filme:</label><br>
				<input type="text" name="nome_filme" value="<?= $filme['nome_filme']; ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Categoria:</label><br>
				<select name="categoria" class="form-select">
					<option value="<?=$filme['categoria_filme']; ?>" selected><?=$filme['categoria_filme']; ?></option>
					<option disabled>---------------------------</option>
					<option value="Açao" >Açao</option>
					<option value="Comedia">Comedia</option>
					<option value="Romance">Romance</option>
					<option value="Aventura">Aventura</option>
					<option value="Terror">Terror</option>
					<option value="outros">outros</option>
				</select>
			</p>



			<p>
				<label class="form-label">Tempo de filme (mim): </label><br>
				<input type="number" name="tempo_filme" value="<?=$filme['tempo_filme']; ?>" class="form-control">
			</p>

			<input type="hidden" name="id" value="<?=$filme['id']; ?>">
			<p>

			<button type="submit" name="salvar" class="btn btn-success">Salvar Alteraçoes</button>
			</p>
			<p>
			<a href="index.php" class="btn btn-secondary">Cancelar Ediçao</a>

			</p>

		</form>
	</div>


</body>
</html>