<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <title>Registro de Refrigerante</title>
</head>
<body>
    <section class="flex items-center justify-center min-h-screen">
        <div class="w-[400px] flex flex-col gap-8">
            <img src="refri.png" alt="" class="w-[200px] self-center">
            <h3 class="text-center text-2xl font-semibold">
                Adicionar Refrigerante
            </h3>
            <form method="POST" action="cadastroRefri.php" class="flex flex-col gap-5">
                <div class="relative">
                    <input 
                        type="text" 
                        name="marca" 
                        id="marca"
                        required
                        class="block rounded-md px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" 
                        placeholder=" "
                    />
                    <label 
                        for="marca" 
                        class="cursor-text absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"            >
                        Marca
                    </label>
                </div>
                <div class="relative">
                    <input 
                        type="text" 
                        name="sabor" 
                        id="sabor"
                        required
                        class="block rounded-md px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" 
                        placeholder=" "
                    />
                    <label 
                        for="sabor"
                        class="cursor-text absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >
                        Sabor
                    </label>
                </div>
                <div class="relative">
                    <input 
                        type="text" 
                        name="quantidade" 
                        id="quantidade"
                        required
                        class="block rounded-md px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" 
                        placeholder=" "
                    />
                    <label 
                        for="quantidade"
                        class="cursor-text absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >
                        Quantidade (em Litros)
                    </label>
                </div>
                <button 
                    type="submit"
                    class="group w-full self-end inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-purple-500 px-6 font-medium text-white transition hover:bg-purple-500/70 hover:text-white/70"
                >
                    Adicionar
                </button>
            </form>
        </div>
    </section>
</body>
</html>