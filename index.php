<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página de login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="container-fluid">

	<h1 class="cabecalho">Filmes em Cartaz - adminitrador</h1>

	<?php 

		if(isset($_GET['msg']))
		{
			include_once 'util.php';
			//echo '<div class="col-6>"';
			echo validar_msg($_GET['msg']);
			//echo '</div>';
		}

	 ?>

	<div class="col-3">

		<h2>Login</h2>

		<h3>Entre com seu usuário e senha.</h3>

	<form action="validar_login.php" method="post">

		<p>
			<label class="form-label">Usuário:</label><br>
			<input type="text" name="usuario" class="form-control">
		</p>

		<p>
			<label class="form-label">Senha:</label><br>
			<input type="password" name="senha" class="form-control">
		</p>

		<p>
		<button type="submit" name="login" class="btn btn-primary">login</button>
		</p>
	</div>



	</form>


</body>
</html>