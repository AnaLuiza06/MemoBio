<?php

	include ('conexao.php');

    $cd = $_GET['cd'];
    session_start();

    

	$id_pergunta = $_POST['cdAltera'];

	$assunto = $_POST['assunto'];
	$fonte = $_POST['fonte'];
	$txt = $_POST['txt'];
	$pergunta = $_POST['pergunta'];
	$alt1 = $_POST['alt1'];
	$alt2 = $_POST['alt2'];
	$alt3 = $_POST['alt3'];
	$alt4 = $_POST['alt4'];
	$alt5 = $_POST['alt5'];
	$altCerta = isset($_POST['altCerta']) ? $_POST['altCerta'] : "";
	$img = $_POST['img'];
	$fontImg = $_POST['fontImg'];


  $alterar = $cn->query("UPDATE tb_pergunta SET

    assunto = '$assunto',
    fonte = '$fonte',
    txt = '$txt',
    pergunta = '$pergunta',
    alt1 = '$alt1',
    alt2 = '$alt2',
    alt3 = '$alt3',
    alt4 = '$alt4',
    alt5 = '$alt5',
    altCerta = '$altCerta',
	img = '$img',
    fontImg = '	$fontImg'
    where idAluno = '$idAluno'
  ");
  
  header("location:pageListaPerguntas.php?id=$id_pergunta"); 

?>

