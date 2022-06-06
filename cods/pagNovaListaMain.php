<!DOCTYPE html>
<html>
    <head>
        <title>Lista</title>
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
                <h2 class="lista">Nova Lista</h2>
                    <form id="novaListaMain" name="formListaMain" method="post" action="inserirAssuntoMain.php">
                        <div class="dadoslista">
                            <div>
                                <label>Nome</label>
                                <input type="text" name="nome">
                            </div>

                            <div>
                                <label class="expo">Texto expositivo</label><textarea class="msg" cols="35" rows="8" name="txtExpo"></textarea>
                               
                            </div>
                    		<div>
                                <label>Icon</label>
                                <input type="text" name="icon">
                            </div>
                            <div class="botaobla">
                                <button class="btnadicionar" type="submit">Adicionar</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <script src="jsPagUsua.js"></script>
    </body>
</html>