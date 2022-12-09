
<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio/PagAluno</title>
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
                include("conexao.php");

                $sp = $_GET['sp'];
                // Selecionar assunto da pergunta
                $selecionaAssunto = mysqli_query($conn, "SELECT * FROM tb_assuntos WHERE idAssuntos = '$sp'");
                $exibe = mysqli_fetch_all($selecionaAssunto, MYSQLI_ASSOC);  
                $id_assuntos = $exibe[0]["idAssuntos"];

                // if(count($exibe) < 1) {
                //     exit();
                // }
                $verificar = mysqli_query($conn, "SELECT * FROM tb_pergunta WHERE id_assuntos = '$id_assuntos'");
                $consulta = mysqli_fetch_all($verificar, MYSQLI_ASSOC);
                // if(count($exibe) >= 1) {
                    
                //     if (count($consulta) >= 1) {
                //     $id_pergunta = $consulta[0]['id_pergunta'];
                //     $dadosPergunta = mysqli_query($conn, "SELECT * FROM tb_pergunta WHERE id_pergunta = '$id_pergunta'");
                //     $consultaP = mysqli_fetch_all($dadosPergunta, MYSQLI_ASSOC);

                //     header("Location: ./pagPergunta.php");
                    
                //     } else{
                //     // echo "<script>alert('Ainda não há perguntas')</script>";
                //     // header("Location: ./pagNovaPerg.php");
                //     }
                // }
                
            ?>


            <section class="conteudoPergunta">
            
                <div class="btnAterior">
               
                   <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left btnAnt" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
					</svg>
                </div>
                 <div class="headerListaPerguntas">
                <?php foreach ($exibe as $ans): ?>        
                    <h2><?php echo $ans['nome'];?></h2>
                    <div>
                    	<p><?php echo count($consulta);?> Perguntas</p>
                        <button><a href="./validarResposta.php?ida=<?php echo $ans['idAssuntos'];?>">Começar Lista</a></button>
                    </div>
                    
                <?php endforeach; ?>
                </div>
                
                <?php foreach($consulta as $cons): ?>
                    <div class="containerLista">
                         <a href="./pagPerguta.php?idp=<?php echo $cons['id_pergunta'];?>">
                            <p><?php echo $cons['font'];?> <?php echo $cons['pergunta'];?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
			</section>
		</main>
		<script src="jsPagUsua.js"></script>
	</body>
	</html>