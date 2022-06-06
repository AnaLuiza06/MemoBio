<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MemoBio/Login</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Prompt:wght@100;200&display=swap"
			rel="stylesheet"
		/>
	</head>

	<body>

		<div class="login">
			<img src="../imgs/Astronaut suit-amico.svg">

			<form method="post" action="validalogin.php">
				<h1>Login</h1>

				<label>E-mail</label>
				<input type="text" name="email">
				
				<label>Senha</label>
				<input type="password" name="senha">

				<div>
					<a href="#" class="link">Ainda não sou cadastrado</a>
					<a href="#" class="link">Esqueci minha senha</a>
				</div>

				<div>
					<button type="submit"><a href="#">Entrar</a></button>
				</div>
			</form>
		</div>
		
	</body>
</html>