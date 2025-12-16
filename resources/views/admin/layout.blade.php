<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin - {{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/png" href="{{ asset('images/logosite.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logosite.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans antialiased">
        <div class="min-h-screen">
            <div class="flex">
                <!-- Sidebar -->
                <aside class="w-64 bg-white border-r hidden md:block">
                    <div class="p-6 border-b">
                        <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-blue-700">Admin Dashboard</a>
                    </div>
                    <nav class="p-6">
                        <ul class="space-y-2">
                            <li><a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-50">Tableau de bord</a></li>
                            <li><a href="{{ route('admin.realisations.index') }}" class="block px-4 py-2 rounded hover:bg-blue-50">Réalisation - Publier</a></li>
                            <li><a href="{{ route('admin.posts.index') }}" class="block px-4 py-2 rounded hover:bg-blue-50">Blog - Articles</a></li>
                            <li><a href="{{ route('admin.messages') }}" class="block px-4 py-2 rounded hover:bg-blue-50">Demandes & Souscriptions</a></li>
                        </ul>
                    </nav>
                </aside>

                <!-- Main content -->
                <div class="flex-1 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">@yield('title', 'Tableau de bord')</h1>
                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-600">{{ Auth::user()->name ?? 'Admin' }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-sm text-red-600">Se déconnecter</button>
                            </form>
                        </div>
                    </div>

                    <div>
                        @if(session('success'))
                            <div class="mb-4 px-4 py-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                        @endif

                        @yield('admin-content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
