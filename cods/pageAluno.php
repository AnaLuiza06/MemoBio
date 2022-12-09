<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="./styleUsua.css">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Prompt:wght@100;200&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div class="pageUser">
			<?php 
                include ('menuUsuario.php');
            ?>
			<section class="conteudoUsua">
				<div class="row containers">
					<div class="col-md-12 col-lg-5">
						<h2>Olá <?php echo $_SESSION['user']['nome']; ?>! Que bom ver você por aqui</h2>
						<h1>Vamos  continuar nossa aventura!!</h1>
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						<div class="Ncadastrados">
                		<h1>N</h1>
                		<h3>Minhas Facilidades</h3>
                	</div>
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						<div class="Ncadastrados">
                		<h1>N</h1>
                		<h3>Minhas Dificuldades</h3>
                	</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-lg-3 col-sm-12">
						<div class="Ncadastrados">
                		<h1>N</h1>
                		<h4>Perguntas Respondidadas</h3>
                	</div>
                	<div class="col-md-12 col-lg-7 col-sm-12"></div>

					</div>
				</div>

				<div class="aproveitamento">
					<div class="row container">
						<div class="col-md-4 col-lg-3 col-sm-12">
                			<h1>N</h1>
                			<h3>Perguntas Respondidadas</h3>
                		</div>
                		<div class="col-md-8 col-lg-9 col-sm-12"></div>
                			<p>Gráfico</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<script src="jsPagUsua.js"></script>
	</body>
</html>
