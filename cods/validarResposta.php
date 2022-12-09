<?php

	include ('conexao.php');
    $alternativa = $_POST['alt'];
    $id_pergunta = $_GET['idp'];

    if($alternativa != ""){
        $altEscolhida = $alternativa;
        
        $selecionarTB = mysqli_query($conn, "SELECT * FROM tb_pergunta WHERE id_pergunta = '$id_pergunta'");
        $consulta = mysqli_fetch_all($selecionarTB, MYSQLI_ASSOC);
        //print_r(count($consulta));
    }
    
    $respostaCerta = $consulta[0]['altCerta'];
    $id_assunto = $consulta[0]['id_assuntos'];
    $status = $respostaCerta === $altEscolhida;
    // id_acerto	id_usuario	id_pergunta	resposta_escolhida	resposta_certa	status
    
    // print_r(session_status());
    // echo '<br/>';
    // session_satart();
    $id_usuario = $_GET['idu'];
    $sqlInsert = "INSERT INTO tb_acertos (id_usuario, id_pergunta, resposta_escolhida, resposta_certa, status) values ('$id_usuario', '$id_pergunta', '$altEscolhida','$respostaCerta', '$status')";
    $conn->query($sqlInsert);
     header("Location: pagPerguta.php?acerto=".$status."&idp=".$id_pergunta."&ida=".$id_assunto);
?>