<?php

	include ('conexao.php');

	$validaEmail = $_POST['email'];
	$validaSenha = $_POST['senha'];

	session_start();
	$consulta = mysqli_query($conn, "select * from tb_usuario where email = '$validaEmail' and senha = '$validaSenha'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	if(count($exibe) >= 1){

		$consulta = mysqli_query($conn, "select status from tb_usuario where email = '$validaEmail'");
    	$statusUser = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    	$status = $statusUser[0]["status"];

		if ($status == 0) {
			echo "<script>alert('Email e/ou senha validos!')</script>";
			header('location:pageAluno.php');
		}
		else{
			header('location:pagADM.php');
		}
	}
	else{
	}
		echo "<script>alert('Email e/ou senha invalidos!')</script>";

?>