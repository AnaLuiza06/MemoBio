<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Materias</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="./styleUsua.css">
        <link rel="stylesheet" type="text/css" href="./stylelista.css">
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
                

            <!--bloquinhos-->
            <section class="conteudo">
				<!--<div class="listasVistas">
					<h1>Listas já vistas</h1>
					<p>Nenhuma lista foi feita inda</p>
				</div>-->
				<div class="ecologia">

                    <?php
                        include ('conexao.php');
                        $cd = $_GET['cd'];
                        $result = mysqli_query($conn, "SELECT * FROM tb_assuntos WHERE assuntosMain = '$cd'");
                        $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        //$consulta = $conn->query();
                    ?>
					<h1 class="eco"><?= $cd ?></h1>

					<div class="bloquinhos"><!--fix-->
                    <?php foreach ($consulta as $ans): ?>
                        <a href="pagSelecionarPergunta.php?sp=<?php echo $ans['idAssuntos'];?>" class="bloquinhosMateria">
							<div class="sombrabla"></div>
							<div>
                                <?php echo $ans['icon'];?>
								<h2><?php echo $ans['nome'];?></h2>
								<p><?php echo $ans['txtDescritivo'];?></p>
								<div class="barraAcertos"></div>
							</div>
                        </a>
                        <?php endforeach; ?>
                    </div>
					</div>
				</div>
			</section>
		</div>
		<script src="jsPagUsua.js"></script>
    </body>
</html>