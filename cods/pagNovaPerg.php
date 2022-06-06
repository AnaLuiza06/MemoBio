<!DOCTYPE html>
<html>
    <head>
        <title>Pergunta</title>
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
            <div class="conteudobla">
            <div class="listabla">
                <h2 class="lista">Nova Pergunta</h2>
                    <form id="novaPergunta" name="formPergunta" method="post" action="inserirPergunta.php">
                        <div class="dadoslista">
                            <div>
                                <label>Assunto</label>
                                <select name="assunto" id="assunto">
                                	<?php
							            include ('conexao.php');

							            $result = mysqli_query($conn, 'select * from tb_assuntosMain');
							            $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
							            //$consulta = $conn->query();
							          ?>
							          <?php foreach ($consulta as $ans): ?>
							          	<option><?php echo $ans['nome'];  ?></option>
							          <?php endforeach; ?>
							    </select>
                            </div>
                            <div>
                                <label>Fonte</label>
                                <input type="text" name="fonte" id="fonte">
                            </div>
                            <div>
                                <label class="expo">Texto</label>
								<textarea class="msg" cols="35" rows="8" name="txt"></textarea>
                               
                            </div>

                            <div>
                                <label>Pergunta</label>
                                <input type="text" name="pergunta">
                            </div>

                            <div>
                                <label>Imagem</label>
                                <input type="text" name="img">
                            </div>

                            <div>
                                <label>Fonte Imagem</label>
                                <input type="text" name="fontImg">
                            </div>
                            
                            <div class="alternativas">
                                <label>Alternativas</label>
                                <input type="text" name="alt1" placeholder="A">
                                <input type="text" name="alt2" placeholder="B">
                                <input type="text" name="alt3" placeholder="C">
                                <input type="text" name="alt4" placeholder="D">
                                <input type="text" name="alt5" placeholder="E">
                            </div>
                            <div class="botaobla">
                                <button class="btnadicionar" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <script src="jsPagUsua.js"></script>
    </body>
</html>