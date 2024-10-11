<?php
    require 'Banco.php';
    require 'Refri.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $refri = new Refri($conexao);

    $refri->setId($_POST['id']);
    $refri->setMarca($_POST['marca']);
    $refri->setSabor($_POST['sabor']);
    $refri->setQuantidade($_POST['quantidade']);

    if($refri->update()){
        echo "Refrigerante atualizado com sucesso!";
        header("Refresh:3;url=listarRefris.php");
    }else{
        echo "Erro ao atualizar o refrigerante";
    }

?>