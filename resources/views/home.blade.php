@extends('master')

@section('main')
<section class="px-2 py-8 bg-[#f5f5f5] lg:py-20 md:px-0 dark:bg-[#232323]">
    <div class="container items-center px-8 mx-auto max-w-7xl">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-4xl lg:text-5xl dark:text-white">
                        Praticando meus conhecimentos neste blog
                    </h1>
                    <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Estou praticando os estudos no Framework Laravel, farei um blog pessoal aqui para que vejam meu primeiro projeto funcionando perfeitamente, já hospedado na web :)</p>
                    <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                        <a href="https://github.com/kkleber1991/blog-kleber" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-[#7c0fca] rounded-md sm:mb-0 hover:bg-[#9e34e3] sm:w-auto">
                            Veja no Github
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden rounded-md border-solid border-2 border-[#7c0fca]">
                    <img src="images/familia.png">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container mx-auto bg-[#fff] dark:bg-[#181818] rounded-md text-center">
    <div class="grid gap-2 m-4">
        <div class="p-4">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-4xl lg:text-5xl dark:text-white">
                Meus artigos preferidos!
            </h1>
        </div>
    </div>
</section>



<section class="container mx-auto bg-white dark:bg-[#181818] rounded-md">
    <div class="grid gap-2 m-4 lg:grid-cols-3">
        @forelse ($posts as $post)
        <div class="p-4">
            <div class="rounded-lg dark:bg-[#232323]">
                <img class="object-cover object-center w-full lg:h-48 md:h-36 rounded-md" src="{{ asset(str_replace('public/', '', $post->thumb)) }}" alt="blog">
                <div class="p-6">
                    <span class="inline-block p-2 mb-2 text-xs font-medium tracking-widest text-green-800 bg-green-200 rounded">{{ $post->user->firstName }}
                    </span>
                    <h1 class="mb-2 text-lg font-medium text-gray-900 dark:text-gray-300">{{$post->title}}</h1>
                    <p class="mb-2 text-sm tracking-wide text-gray-500">{{ Str::limit($post->content, 105, '...') }}</p>
                    <div class="flex items-center ">
                        <a class="inline-flex items-center cursor-pointer md:mb-2 lg:mb-0 text-white bg-[#7c0fca] p-3 rounded-md hover:bg-[#9e34e3]" href="{{ route('post', $post->slug) }}">Leia mais
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h2>Nenhum Post Encontrado</h2>
        @endforelse
        
        @endsection
    </div>
</section>
