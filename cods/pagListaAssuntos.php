<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="./styleUsua.css">
        <link rel="stylesheet" type="text/css" href="./stylePerguntas.css">
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
        <main class="pageUser">
            <?php 
            	include ('menuUsuario.php');
            ?>

            <section class="conteudoPergunta">
                <div class="btnAterior">
                   <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left btnAnt" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
					</svg>
                </div>
                <div class="headerListaPerguntas">

                <?php
                       include ('conexao.php');

                        $result = mysqli_query($conn, 'select * from tb_assuntos');
                        $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        $qtde 
                         //$consulta = $conn->query();
                    ?>
                    
                    <h2>Ecologia</h2>
                    <div>
                    	<p>N Assuntos</p>
                        <button><a href="pagNovaLista.php">Novo Assunto</a></button>
                    </div>
                </div>
             
				<div class="mainListaPerguntas">
					 
                    <?php foreach ($consulta as $ans): ?>
					<div class="containerLista">
						<div class="assuntText">

                            <h3><?php echo $ans['nome'];?></h3>
						</div>
	                	<div class="btnlg">
		                	<button><a href="">Alterar</a></button>
		                	<button><a href="deleteLista.php?cd=<?php echo $ans[idAssuntos];?>">Exluir</a></button>						
						</div>

						<div class="btnsm">
							<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
							  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></button>
						<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
							  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
							</svg></a></button>
						</div>
	                </div>
                    <?php endforeach; ?>

	                <div class="containerLista">
						<div class="assuntText">
							<h3>Fatores Habioticos</h3>
							<p>Texto ....</p>
						</div>
	                	<div class="btnlg">
		                	<button><a href="">Alterar</a></button>
		                	<button><a href="">Exluir</a></button>						
						</div>

						<div class="btnsm">
							<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
							  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></button>
						<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
							  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
							</svg></a></button>
						</div>
	                </div>

	                <div class="containerLista">
						<div class="assuntText">
							<h3>Fatores Habioticos</h3>
							<p>Texto ....</p>
						</div>
	                	<div class="btnlg">
		                	<button><a href="">Alterar</a></button>
		                	<button><a href="">Exluir</a></button>						
						</div>

						<div class="btnsm">
							<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
							  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
							</svg></a></button>
						<button><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
							  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
							</svg></a></button>
						</div>
	                </div>

				</div>
			</section>
		</main>
		<script src="jsPagUsua.js"></script>
	</body>
	</html>
