@extends('master')

@section('main')

<div class="flex justify-between px-4 mx-auto max-w-screen-xl mt-20">
    <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        <header class="mb-4 lg:mb-6 not-format">
            <figure><img class="rounded-md" src="{{ asset(str_replace('public/', '', $post->thumb)) }}" alt="{{ $post->title }}">
                <figcaption class="text-center dark:text-gray-500">{{ $post->title }} {{ $post->created_at }}</figcaption>
            </figure>
            <address class="flex items-center mb-6 not-italic">
                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    <div>
                        <a rel="author" class="text-sm text-gray-900 dark:text-white">Por: {{ $post->user->firstName}}</a>
                    </div>
                </div>
            </address>
            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
        </header>
        <p class="lead dark:text-gray-400">{{ $post->content }}</p>

        </section>
    </article>
</div>
<aside aria-label="Related articles" class="py-20 my-20 bg-gray-50 dark:bg-[#181818]">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            @forelse($related as $post)
            <article class="max-w-xs">
                <a href="#">
                    <img src="{{ asset(str_replace('public/', '', $post->thumb)) }}" class="mb-5 rounded-lg" alt="{{$post->slug}}">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-700 dark:text-white">
                    <a href="#">{{ Str::limit($post->title, '28', '...') }}</a>
                </h2>
                <p class="mb-4 text-gray-700 dark:text-gray-300">{{ Str::limit($post->content, 105, '...') }}</p>
                <a class="inline-flex items-center cursor-pointer md:mb-2 lg:mb-0 text-white bg-[#7c0fca] p-3 rounded-md hover:bg-[#9e34e3] mt-5" href="{{ route('post', $post->slug) }}">Leia mais
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </article>
            @empty
            <h2>Nenhum Post Encontrado</h2>
            @endforelse
        </div>
    </div>
</aside>




<!--
<aside aria-label="Related articles" class="mt-20 py-8 lg:py-24 dark:bg-[#181818]">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Relacionados</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <article class="max-w-xs">
                <a href="#">
                    <img src="{{ asset(str_replace('public/', '', $post->thumb)) }}" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-700 dark:text-white">
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p class="mb-4 text-gray-700 dark:text-gray-300">{{ Str::limit($post->content, 105, '...') }}</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-gray-500 dark:text-gray-600 hover:no-underline">
                    Leia mais...
                </a>
            </article>
        </div>
    </div>
</aside>
-->

<section class="bg-white dark:bg-[#232323]">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Assine a nossa newsletter</h2>
            <p class="mx-auto mb-8 max-w-2xl  text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Mantenha-se atualizado com o andamento do roteiro, anúncios e descontos exclusivos, fique à vontade para se inscrever com seu e-mail.</p>
            <form action="#">
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço de e-mail</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your email" type="email" id="email" required="">
                    </div>
                    <div>
                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                    </div>
                </div>
                <div class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer dark:text-gray-300">Nós nos preocupamos com a proteção dos seus dados. <a href="#" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Leia nossa política de privacidade</a>.</div>
            </form>
        </div>
    </div>
</section>

@endsection