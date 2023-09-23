<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} Blog Kleber - Desafio Laravel</title>

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-[Lato] bg-[#F5F5F5] h-screen dark:bg-[#232323]">

    <header class="bg-white dark:bg-[#181818]">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-56 my-5 cursor-pointer" src="{{ asset('images/logo-ks.png') }}" alt="Logo Kedllon Solutions">
            </div>
            <div class="nav-links duration-500 md:static absolute dark:bg-[#181818] md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 z-40">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="text-[#181818] hover:text-white hover:bg-[#7c0fca] p-3 rounded-md dark:text-[#f5f5f5] " href="/">Início</a>
                    </li>
                    <li>
                        <a class="text-[#181818] hover:text-white hover:bg-[#7c0fca] p-3 rounded-md dark:text-[#f5f5f5]" href="/sobre">Sobre</a>
                    </li>
                    <li>
                        <a class="text-[#181818] hover:text-white hover:bg-[#7c0fca] p-3 rounded-md dark:text-[#f5f5f5]" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="text-[#181818] hover:text-white hover:bg-[#7c0fca] p-3 rounded-md dark:text-[#f5f5f5]" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-0">
                <!--    
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                 -->
                <button class="bg-[#7c0fca] text-white px-5 py-2 rounded-md hover:bg-[#9e34e3]">
                    <a href="https://github.com/kkleber1991/blog-kleber" target="_blank" rel="noopener noreferrer"> Github </a>
                </button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>


    <footer class="dark:bg-[#181818] rounded-lg shadow border-solid border-2 border-[#7c0fca] hover:border-dotted">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center">
                    <a href="https://kedllon.solutions/" class="flex items-center mb-4 sm:mb-0">
                        <img src="{{ asset('images/logo-ks.png') }}" class="h-8 mr-3" alt="Flowbite Logo" />
                    </a>
                </div>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">

                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Politicas</a>
                    </li>
                    <li>
                        <a href="https://github.com/kkleber1991/blog-kleber" class="mr-4 hover:underline md:mr-6 ">Github</a>
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
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });

        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

</body>

</html>