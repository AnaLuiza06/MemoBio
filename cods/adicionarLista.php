<?php 
	
	include ('conexao.php');
	
	$Assunto = isset($_POST['assunto']) ? $_POST['assunto'] : "";
	$TxtExpo = $_POST['txtExpo']; isset($_POST['txtExpo']) ? $_POST['txtExpo'] : "";
	$Icon = $_POST['icon']; isset($_POST['icon']) ? $_POST['icon'] : "";
    $Nome = $_POST['nome']; isset($_POST['nome']) ? $_POST['nome'] : "";

    $consulta = mysqli_query($conn, "select nome from tb_assuntos where nome = '$Nome'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	if (count($exibe) >= 1) {
		//echo "Pergunta já cadastrada";
		echo "<script>alert('Assunto já existente no bd')</script>";
	} else{
		//echo "Pergunta NÃO cadastrada";
    		$incluir = $conn->query("insert into tb_assuntos(nome, txtDescritivo, icon, assuntosMain)
			values('$Nome', '$TxtExpo', '$Icon', '$Assunto')");
			echo "<script>alert('Lista inserira com sucesso!!')</script>";
	} 
    //header("Location: ./pagNovaLista.php");

?>
