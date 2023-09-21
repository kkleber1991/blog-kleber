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

    <header class="bg-[#f5f5f5]">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-56 my-5 cursor-pointer" src="https://kedllon.solutions/assets/images/KS.png" alt="Logo Kedllon Solutions">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-[#f5f5f5] md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 z-40">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-white hover:bg-[#7c0fca] p-3 rounded-md " href="/">Início</a>
                    </li>
                    <li>
                        <a class="hover:text-white hover:bg-[#7c0fca] p-3 rounded-md" href="/sobre">Sobre</a>
                    </li>
                    <li>
                        <a class="hover:text-white hover:bg-[#7c0fca] p-3 rounded-md" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-white hover:bg-[#7c0fca] p-3 rounded-md" href="/contato">Contato</a>
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

    <main>
        @yield('main')
    </main>

    
<footer class="bg-white rounded-lg shadow ">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://kedllon.solutions/" class="flex items-center mb-4 sm:mb-0">
                <img src="https://kedllon.solutions/assets/images/KS.png" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Politicas</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Github</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://kedllon.solutions/" class="hover:underline">Kedllon™</a>. All Rights Reserved.</span>
    </div>
</footer>



    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

</body>

</html>