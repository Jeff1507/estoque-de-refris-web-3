<?php

    require 'Banco.php';
    require 'Refri.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();
    $refri = new Refri($conexao);

    $refri->setId($_GET['id']);
    $stmt = $refri->consultar();
    $refriSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <title>Atualizar Refrigerante</title>
</head>
<body>
    <section>
        <div>
            
        </div>
    </section>
    <h3>Atualizar Refrigerante</h3>
    <form method="POST" action="atualizaRefri.php">
        <input type="hidden" name="id" value="<?php echo $refriSelecionado['id']; ?>">

        <label for="marca">Marca</label>
        <input type="text" name="marca" required value="<?php echo $refriSelecionado['marca']; ?>">

        <label for="sabor">Sabor</label>
        <input type="text" name="sabor" required value="<?php echo $refriSelecionado['sabor']; ?>">

        <label for="quantidade">Quantidade (em Litros)</label>
        <input type="text" name="quantidade" required value="<?php echo $refriSelecionado['quantidade']; ?>">

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>