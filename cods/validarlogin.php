<?php

	include ('conexao.php');

	$validaEmail = $_POST['email'];
	$validaSenha = $_POST['senha'];

	$consulta = mysqli_query($conn, "SELECT * FROM tb_usuario WHERE email = '$validaEmail' AND senha = '$validaSenha'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    session_start();
	if(count($exibe) >= 1){
        
		$consulta = mysqli_query($conn, "SELECT * FROM tb_usuario WHERE email = '$validaEmail'");
    	$statusUser = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        $session = $statusUser[0]['id_usuario'];
        //print_r($session);
    	$status = $statusUser[0]["status"];

        $_SESSION['user'] = $statusUser[0];
		if ($status == 0) {
			//echo "<script>alert('Email e/ou senha validos!')</script>";
			header('location:pageAluno.php');
            // print_r($_SESSION['user']);
		}
		else{
			header('location:pagADM.php');
		}
	}
	else{
        echo "<script>alert('Email e/ou senha invalidos!')</script>";
	}

?>