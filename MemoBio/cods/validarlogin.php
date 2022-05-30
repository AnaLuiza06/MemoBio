<?php

	include ('conexao.php');

	$validaEmail = $_POST['Email'];
	$validaSenha = $_POST['Senha'];

	session_start();
	
	$consulta = $cn->query("select * from tb_cadastroUsuario where Email = '$validaEmail' and Senha = '$validaSenha'");

	if($consulta->rowCount() == 1){
		$exibeusuario = $consulta->fetch(PDO::FETCH_ASSOC);

		if ($exibeusuario['ADM'] == 0) {
			$_SESSION['ID'] = $exibeusuario['idtb_cadastroUsuario'];
			$_SESSION['status'] = 0;
			header('location:pageAluno.php');
		}
		else{
			$_SESSION['ID'] = $exibealuno['idtb_cadastroUsuario'];
			$_SESSION['status'] = 1;
			header('location:pagADM.php');
		}
	}
	else{
	}
		echo "<script>alert('Email e/ou senha invalidos!');window.location='pagLogin.php'</script>";

?>