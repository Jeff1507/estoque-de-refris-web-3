<?php
    require 'Banco.php';
    require 'Refri.php';

    $Banco = new Banco();
    $db = $Banco->getConexao();

    $refri = new Refri($db);
    $stmt = $refri->read($db);
    $refris = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <title>Estoque de Refrigerantes</title>
</head>
<body>
    <section class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col gap-5">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold text-white">
                    Estoque de Refrigerantes
                </h3>
                <a 
                    href="form_cadastro.php"
                    class="group relative inline-flex items-center justify-center overflow-hidden rounded-md bg-purple-500 p-3 font-medium text-white duration-500"
                >
                    <div class="translate-x-0 opacity-100 transition group-hover:-translate-x-[150%] group-hover:opacity-0">
                        Novo Refrigerante
                    </div>
                    <div class="absolute translate-x-[150%] opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                            <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Marca
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sabor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qtd
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($refris as $refri){ ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $refri['id']; ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $refri['marca']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $refri['sabor']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $refri['quantidade']; ?>
                                </td>
                                <td class="px-6 py-4 text-right space-x-3">
                                    <a 
                                        href="form_atualizar.php?id=<?php echo $refri['id']; ?>"
                                        class="inline-flex h-8 items-center justify-center overflow-hidden rounded-md bg-blue-500 px-3 font-medium text-white"
                                    >
                                        Editar
                                    </a>
                                    <a 
                                        href="deletaRefri.php?id=<?php echo $refri['id']; ?>"
                                        class="inline-flex h-8 items-center justify-center overflow-hidden rounded-md bg-red-500 px-3 font-medium text-white"
                                    >
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
    
                </table>
            </div>
            
        </div>
    </section>
</body>
</html>