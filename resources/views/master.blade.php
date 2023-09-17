<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Kleber - 60 dias Laravel</title>

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[Lato] bg-[#F5F5F5] h-screen">

    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-56 my-5"src="https://kedllon.solutions/assets/images/KS.png" alt="Logo Kedllon Solutions">
            </div>
            <div class="">
                <ul class="flex items-center gap-[4vw]">
                    <li>
                        <a class="hover:text-gray-500" href="/">Início</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="/sobre">Sobre</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>

            <div>
                <button class="bg-[#7c0fca] text-white px-5 py-2 rounded-md hover:bg-[#9e34e3]"> Github </button>
            </div>

        </nav>
    </header>


    <div class="container">
        @yield('content')
    </div>
</body>
</html>