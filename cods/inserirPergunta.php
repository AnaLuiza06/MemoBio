<?php 
	
	include ('conexao.php');

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

	//echo $nome."<br>";
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

    $consulta = mysqli_query($conn, "select pergunta from tb_pergunta where pergunta = '$pergunta'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    print_r($exibe);
	if (count($exibe) >= 1) {
		//echo "Pergunta já cadastrada";
		echo "<script>alert('Pergunta já existente no bd')</script>";
		//header("Location: ./pagNovaPerg.php");
	} else{
		//echo "Pergunta NÃO cadastrada";

		// selecionar o nome do assunto e ligar ao id
		$consulta = mysqli_query($conn, "select id_assuntos, nome from tb_assuntos where nome = '$assunto'");
    	$assuntoDb = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    	if (count($assuntoDb) >= 1) {
    		$id_assuntos = $assuntoDb[0]["id_assuntos"];
    		$incluir = $conn->query("insert into tb_pergunta(font, txt, pergunta, img, fontImg, alt1, alt2, alt3, alt4, alt5, altCerta, nome_assuntos)
			values('$fonte', '$txt', '$pergunta','$img','$fontImg', '$alt1', '$alt2', '$alt3', '$alt4', '$alt5', '$altCerta', '$id_assuntos')");
			echo "<script>alert('Questão enviada com sucesso!!')</script>";
    	} else {
    		echo "<script>alert('Esse assunto não existe')</script>";
    	}


		//
	}

?>