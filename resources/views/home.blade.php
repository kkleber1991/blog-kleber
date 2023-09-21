@extends('master')

@section('main')
<section class="px-2 py-8 bg-white lg:py-20 md:px-0">
    <div class="container items-center px-8 mx-auto max-w-7xl">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl">
                        The Wat to Lose Weight and Belly Fat
                    </h1>
                    <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It is a long established fact that a reader will be distracted by the readable content of a page when looking at.</p>
                    <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                        <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-purple-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden rounded-md">
                    <img src="https://cdn.pixabay.com/photo/2015/11/12/17/20/tea-1040653__340.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

@forelse ($posts as $post)


<section class="container mx-auto bg-white">
    <div class="grid gap-2 m-4 lg:grid-cols-3">
        <div class="p-4">
            <div class="border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36" src="{{ asset($post->thumb) }}" alt="blog">
                <div class="p-6">
                    <span class="inline-block p-2 mb-2 text-xs font-medium tracking-widest text-green-800 bg-green-200 rounded">{{$post->user->firstName}}
                    </span>
                    <h1 class="mb-2 text-lg font-medium text-gray-900">{{$post->title}}</h1>
                    <p class="mb-2 text-sm tracking-wide text-gray-700">{{ Str::limit($post->content, 150, '')}}</p>
                    <div class="flex items-center ">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 lg:mb-0">Leia mais
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@empty
<h2>Nenhum Post Encontrado</h2>
@endforelse

@endsection