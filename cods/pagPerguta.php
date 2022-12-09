<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio</title>
        <meta charset="UTF-8">
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
                <?php
                       include ('conexao.php');

                       $idPergunta = $_GET['idp'];

                        $result = mysqli_query($conn, "SELECT * FROM tb_pergunta WHERE id_pergunta = '$idPergunta'");
                        $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
                         //$consulta = $conn->query();
                ?>
                <div class="tituloPergunta">
                    <h2></h2>
                </div>
                <div class="containerPergunta">
                <?php foreach ($consulta as $ans): ?>
                    <section class="textoPergunta">
                        <p><?php echo $ans['font'];?> </p>
                        <p><?php echo $ans['txt'];?> </p>
                    </section>
                    <section class="imgPergunta">
                        <?php if( $ans['img']):?>
                            <img src="<?= $ans['img'] ?>" alt1='img'>
                            <p><sub>Fonte: <?php echo $ans['fontImg'];?></sub></p>
                        <?php endif; ?>
                    </section>
                    <section class="conclusaoPergunta">
                        <p><?php echo $ans['pergunta'];?></p>
                    </section>
                    <form id="respostas" name="respostaSelecionada" method="post" action="./validarResposta.php?idu=<?= $_SESSION['user']['id_usuario']?>&idp=<?= $ans['id_pergunta']?>">
	                    <section class="alternativasPergunta">
	                            <div class="alternativaA">
	                                <input type="radio" class="alt1" name="alt" id="flexRadioDefault1" value="<?php echo $ans['alt1'];?>">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    <?php echo $ans['alt1'];?>
	                                </label>
	                            </div>
	                            <div class="alternativaB">
	                                <input type="radio" class="alt2" name="alt" id="flexRadioDefault2" value="<?php echo $ans['alt2'];?>">
	                                <label class="form-check-label" for="flexRadioDefault2">
	                                    <?php echo $ans['alt2'];?>
	                                </label>
	                            </div>
	                            <div class="alternativaC">
	                                <input type="radio" class="alt3" name="alt" id="flexRadioDefault3" value="<?php echo $ans['alt3'];?>">
	                                <label class="form-check-label" for="flexRadioDefault3">
	                                    <?php echo $ans['alt3'];?>
	                                </label>
	                            </div>
	                            <div class="alternativaD">
	                                <input type="radio" class="alt4" name="alt" id="flexRadioDefault4" value="<?php echo $ans['alt4'];?>">
	                                <label class="form-check-label" for="flexRadioDefault4">
                                        <?php echo $ans['alt4'];?>
	                                </label>
	                            </div>
	                            <div class="alternativaE">
	                                <input type="radio" class="alt5" name="alt" id="flexRadioDefault5" value="<?php echo $ans['alt5'];?>">
	                                <label class="form-check-label" for="flexRadioDefault5">
	                                    <?php echo $ans['alt5'];?>
	                                </label>
	                            </div>
	                        
	                    </section>
	                    <section class="btnsAP">
                                <button class="btnAterior" type="submit">Enviar</button>
	                    </section>
                    </form>
                    <?php
                        $acertou = $_GET['acerto'];
                        if ($acertou) :
                    ?>
                        <div class="modal-certo active">
                            <div class="container-modal">
                            <h1>Parabéns!! Você Acertou</h1>
                            <h2>Agora parta para seu próximo desafio.</h2>
                            <button><a href="pagSelecionarPergunta.php?sp=<?php echo $ans['id_assuntos']; ?>">Vamo lá!</a></button>
                            </div>
                        </div>
                    <?php elseif(isset($acertou)): ?>
                        <div class="modal-errado active">
                            <div class="container-modal">
                            <h1>Que Pena!! Você Errou</h1>
                            <h2>Tente novamente ou parta para um próximo desafio.</h2>
                            <button><a href="pagSelecionarPergunta.php?sp=<?php echo $ans['id_assuntos']; ?>">Vamo lá!</a></button>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach; ?>
                </div>
            </section>
        </main>
        <script src="jsPagUsua.js"></script>
    </body>
</html>