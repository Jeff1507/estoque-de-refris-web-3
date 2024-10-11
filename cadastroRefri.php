<?php
    require 'Banco.php';
    require 'Refri.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $refri = new Refri($conexao);
    $refri->setMarca($_POST['marca']);
    $refri->setSabor($_POST['sabor']);
    $refri->setQuantidade($_POST['quantidade']);

    if ($refri->create()) {
        echo "Refrigerante cadastrado com sucesso!";
        header("Refresh:3;url=listarRefris.php");
    } 
    else {
        echo "Erro ao cadastrar o refrigerante.";
    }
?>
