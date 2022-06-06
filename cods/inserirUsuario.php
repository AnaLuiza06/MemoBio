<?php 
	
	include ('conexao.php');

	$Nome = $_POST['nome'];
	$Email = $_POST['email'];
	$Senha = $_POST['senha'];

	//echo $nome."<br>";
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

	$consulta = mysqli_query($conn, "select email from tb_usuario where email = '$Email'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>alert('Usuário já existente.')</script>";
	} else{
		//echo "Usuário NÃO cadastrado";

		$incluir = $conn->query("insert into tb_usuario(nome, email, senha, status)
			values('$Nome', '$Email', '$Senha', 0)");
		echo "<script>alert('Usuário cadastrado!!.')</script>";
	}

?>