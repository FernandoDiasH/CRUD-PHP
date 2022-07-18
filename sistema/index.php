<?php include_once'lock.php' ?>
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

		<?php 

		if(isset($_GET['msg']))
		{
			include_once '../util.php';
			//echo '<div class="col-6>"';
			echo validar_msg($_GET['msg']);
			//echo '</div>';
		}

	 ?>

	<div class="col-3">
		<form action="cadastro.php" method="post" >
			
			<p>
				<label class="form-label">Nome do filme:</label><br>
				<input type="text" name="nome_filme" class="form-control">
			</p>

			<p>
				<label class="form-label">Categoria:</label><br>
				<select name="categoria" class="form-select">
					<option value="Ação" selected>Ação</option>
					<option value="Comédia">Comédia</option>
					<option value="Romance">Romance</option>
					<option value="Aventura">Aventura</option>
					<option value="Terror">Terror</option>
					<option value="outros">outros</option>
					<option value="suspense">Suspense</option>
				</select>
			</p>



			<p>
				<label class="form-label">Duração do filme (mim): </label><br>
				<input type="number" name="tempo_filme" class="form-control">
			</p>

			<button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>

		</form>
	</div>

<p>
	<?php 

		include_once '../database/filmes.dao.php';

		echo exbir_filmes();

	 ?>
</p>






<p>
	<a href="logout.php" class="btn btn-secondary">Sair do sistema</a>
</p>


</body>
</html>