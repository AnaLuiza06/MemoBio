<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<section class="menuUsuario">
        <div class="iconResposive">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" id="btnMenu">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>

        <div class="usuario">
            <img
                src="https://amoraospets.com/wp-content/uploads/elementor/thumbs/oiee-pdgaiexmtz4v0kvgwfz9b8tgbiea4fmns0avp02u14.jpg"
            />
            <?php 
                session_start();
            ?>
            <h2><?= $_SESSION['user']['nome'] ?></h2>
        </div>

        <div class="barraPesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            <input type="text" class="pesquisa" placeholder="Buscar"/>
        </div>

        <div class="menu">
            <ul>
                <li><a href="./pageAluno.php">Minha Área</a></li>
                <li id="btnMateriais"><a href="#materiais">Materiais</a></li>
                    <ul id="materiais" class="">
                        <?php
                            require("./conexao.php");
                            $result = mysqli_query($conn, 'select * from tb_assuntosMain');
                            $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        ?>
                        <?php foreach ($consulta as $ans): ?>
                            <li><a href="./pagMateria.php?cd=<?php echo $ans['nome']; ?>">
                                <?php echo $ans['icon'];?>
                                <?php echo $ans['nome'];?>
                            </a></li>
                        <?php endforeach; ?>
                    </ul>
                <li><a href="#">Artigos</a></li>
                <li><a href="./pageAltUsuario.php">Meus Dados</a></li>
                <li><a href="pageBtnSair.php">Sair</a></li>
            </ul>
        </div>
    </section>

	<script src="jsPagUsua.js"></script>
</body>
</html>