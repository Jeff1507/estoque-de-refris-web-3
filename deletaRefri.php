<?php
    require 'Banco.php';
    require 'Refri.php';

    $database = new Banco();
    $db = $database->getConexao();
    $refri = new Refri($db);
    $refri->setId($_GET['id']);
    if ($refri->delete()) {
        echo "Refrigerante deletado com sucesso!";
        header("Refresh:3;url=listarRefris.php");
    } else {
        echo "Erro ao deletar o refrigerante.";
    }
?>