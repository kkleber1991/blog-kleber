@extends('master')

@section('main')

<section class="bg-[#f5f5f5] dark:bg-[#232323] mt-8">
    <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto text-center">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Veja as postagens</h2>
        <p class="text-gray-500 sm:text-xl dark:text-gray-400">Essas postagens foram os aprendizados que fui adquirindo até chegar aqui! Continuo evoluindo e postando.</p>
    </div>
    <div class="space-y-8 py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 bg-white dark:bg-[#181818] p-5 rounded-md mt-20 mb-5">
        <!-- ITEM DE CADA COLUNA EXIBIDA -->
        @forelse ($groupedPosts as $postRow)
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <!-- ITEM DE CADA LINHA EXIBIDA -->
            @forelse ($postRow as $post)
            <div class="bg-[#f5f5f5] dark:bg-[#232323] p-8 rounded-md">
                <div class="flex justify-center items-center mb-4 rounded-full bg-primary-100 dark:bg-primary-900">
                    <img class="rounded-md" src="{{ asset(str_replace('public/', '', $post->thumb)) }}" alt="{{$post->title}}">
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $post->title}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ Str::limit($post->content, '115', '...') }}</p>
                <a class="inline-flex items-center cursor-pointer md:mb-2 lg:mb-0 text-white bg-[#7c0fca] p-3 rounded-md hover:bg-[#9e34e3] mt-5" href="{{ route('post', $post->slug) }}">Leia mais
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
            @empty
            <h2>Não tem posting!</h2>
            @endforelse
        </div>
        @empty
        <h2>Não tem nada aqui para você!</h2>
        @endforelse
    </div>
</section>
<div class="flex justify-center mb-8 space-x-8">
    <!-- Previous Button -->
    <a href="#" class="inline-flex items-center cursor-pointer md:mb-2 lg:mb-0 text-white bg-[#7c0fca] p-3 rounded-md hover:bg-[#9e34e3] mt-5">
        <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
        </svg>
        Previous
    </a>
    <a href="#" class="inline-flex items-center cursor-pointer md:mb-2 lg:mb-0 text-white bg-[#7c0fca] p-3 rounded-md hover:bg-[#9e34e3] mt-5">
        Next
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </a>
</div>

@endsection