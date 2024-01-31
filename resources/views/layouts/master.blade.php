<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.png') }}" />
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title', 'Home')</title>
</head>
<body>
<nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="">
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
        <a href="{{ route('articles') }}" class="text-sm font-semibold leading-6 text-gray-900">Articles</a>
        <a href="{{ route('cars') }}" class="text-sm font-semibold leading-6 text-gray-900">Cars</a>
    </div>


    @auth
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white py-2 px-4 border border-red-500  rounded">
                    Log Out <span aria-hidden="true">&rarr;</span>
                </button>
            </form>
        </div>
    @endauth

    @guest
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="flex-none rounded-md bg-red-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    @endguest


</nav>

<main class="flex justify-center items-center">
    <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>
<script src="{{ asset('js/myvue.js') }}"></script>
</body>
</html>




