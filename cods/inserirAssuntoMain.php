<?php 
	
	include ('conexao.php');
	
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$txtExpo = isset($_POST['txtExpo']) ? $_POST['txtExpo'] : "";
	$icon = isset($_POST['icon']) ? $_POST['icon'] : "";

	//echo $nome."<br>";
	//echo $txtExpo."<br>";
	//echo $telefone."<br>";

    $consulta = mysqli_query($conn, "select nome from tb_assuntosMain where nome = '$nome'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    
	if (count($exibe) >= 1) {
		//echo "Pergunta já cadastrada";
		echo "<script>alert('Assunto Main já existente no bd')</script>";
        //header("Location: ./pagNovaListaMain.php");
		//header("Location: ./pagNovaPerg.php");
	} else{
		//echo "Pergunta NÃO cadastrada";

    		$incluir = $conn->query("insert into tb_assuntosMain(nome, txtDescritivo, icon)
			values('$nome', '$txtExpo', '$icon')");
			echo "<script>alert('Assuntos adicionado com sucesso!!')</script>";
            //header("Location: ./pagNovaListaMain.php");



		//
	}

?>