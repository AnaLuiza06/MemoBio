<?php 
	
	include ('conexao.php');

	$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : "";
	$fonte = isset($_POST['fonte']) ? $_POST['fonte'] : "";
	$txt = isset($_POST['txt']) ? $_POST['txt'] : "";
	$pergunta = isset($_POST['pergunta']) ? $_POST['pergunta'] : "";
	$alt1 = isset($_POST['alt1']) ? $_POST['alt1'] : "";
	$alt2 = isset($_POST['alt2']) ? $_POST['alt2'] : "";
	$alt3 = isset($_POST['alt3']) ? $_POST['alt3'] : "";
	$alt4 = isset($_POST['alt4']) ? $_POST['alt4'] : "";
	$alt5 = isset($_POST['alt5']) ? $_POST['alt5'] : "";
	$altCerta = isset($_POST['altCerta']) ? $_POST['altCerta'] : "";
	$img = isset($_POST['img']) ? $_POST['img'] : "";
	$fontImg = isset($_POST['fontImg']) ? $_POST['fontImg'] : "";

    $consulta = mysqli_query($conn, "select pergunta from tb_pergunta where pergunta = '$pergunta'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	if (count($exibe) >= 1) {
		//echo "Pergunta já cadastrada";
		echo "<script>alert('Pergunta já existente no bd')</script>";
		//header("Location: ./pagNovaPerg.php");
	} else{
		//echo "Pergunta NÃO cadastrada";
		// selecionar o nome do assunto e ligar ao id
		$consulta = mysqli_query($conn, "SELECT idAssuntos FROM tb_assuntos where nome = '$assunto'");
        //print_r($consulta);    
    	$assuntoDb = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    	if (count($assuntoDb) >= 1) {
    		$id_assuntos = $assuntoDb[0]["idAssuntos"];
            //print_r($id_assuntos);       
    		$incluir = $conn->query("insert into tb_pergunta(font, txt, pergunta, img, fontImg, alt1, alt2, alt3, alt4, alt5, altCerta, id_assuntos)
			values('$fonte', '$txt', '$pergunta','$img','$fontImg', '$alt1', '$alt2', '$alt3', '$alt4', '$alt5', '$altCerta', '$id_assuntos')");
			echo "<script>alert('Questão enviada com sucesso!!')</script>";
    	}


	}

?>