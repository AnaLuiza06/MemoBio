<?php 
	
	include ('conexao.php');
	
	$nome = $_POST['nome'];
	$txtExpo = $_POST['txtExpo'];
	$icon = $_POST['icon'];

	//echo $nome."<br>";
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

    $consulta = mysqli_query($conn, "select nome from tb_assuntosmain where nome = '$nome'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    print_r($exibe);
	if (count($exibe) >= 1) {
		//echo "Pergunta já cadastrada";
		echo "<script>alert('Assunto Main já existente no bd')</script>";
		//header("Location: ./pagNovaPerg.php");
	} else{
		//echo "Pergunta NÃO cadastrada";

    		$incluir = $conn->query("insert into tb_assuntosmain(nome, txtDescritivo, icon)
			values('$nome', '$txtExpo', '$icon')");
			echo "<script>alert('Assuntos adicionado com sucesso!!')</script>";



		//
	}

?>