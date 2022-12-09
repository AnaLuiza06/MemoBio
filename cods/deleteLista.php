<?php
include "conexao.php";
include "pagNovaLista.php";

$idAssuntos = $_GET['idAssuntos'];

(new model())->deleteUser($assunto, $nome, $txtExpo, $icon);

include "pagListaAssuntos.php";
?>