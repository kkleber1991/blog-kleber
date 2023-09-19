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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[Lato] bg-[#F5F5F5] h-screen">

    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-56 my-5 cursor-pointer" src="https://kedllon.solutions/assets/images/KS.png" alt="Logo Kedllon Solutions">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
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

            <div class="flex items-center gap-6">
                <button class="bg-[#7c0fca] text-white px-5 py-2 rounded-md hover:bg-[#9e34e3]">
                    <a href="https://github.com/kkleber1991/blog-kleber" target="_blank" rel="noopener noreferrer"> Github </a>
                </button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                <!-- <ion-icon onclick="onToggleMenu(this)" name="grid-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon> -->
            </div>

        </nav>
    </header>
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>