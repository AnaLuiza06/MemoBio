<?php
    $id = $_GET["id"];
    include_once 'conexao.php';

    $sql = "delete from tb_pergunta where id_pergunta = ".$id;

    if(mysqli_query($con, $sql)){
        $msg = "Deletado com sucesso!";
    }else{
        $msg = "Erro ao deletar!";
    }
    mysqli_close($con);
