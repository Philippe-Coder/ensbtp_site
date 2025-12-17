<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/png" href="{{ asset('images/logosite.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logosite.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans antialiased">
        <div class="flex min-h-screen bg-gray-50">
            <aside class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 text-white shadow-xl fixed left-0 top-0 bottom-0 z-50 transform transition-transform duration-300 md:translate-x-0 -translate-x-full" id="adminSidebar">
                <div class="p-6 border-b border-blue-700">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold">ENSBTP Admin</h1>
                            <p class="text-blue-200 text-xs">Administration</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-b border-blue-700">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
                            <i class="fas fa-user text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium truncate">{{ auth()->user()->name ?? 'Administrateur' }}</p>
                            <p class="text-blue-200 text-sm truncate">{{ auth()->user()->email ?? 'admin@ensbtp.ci' }}</p>
                        </div>
                    </div>
                </div>

                <nav class="p-4 space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group @if(request()->routeIs('admin.dashboard')) active bg-white/10 @endif" data-page="dashboard">
                        <i class="fas fa-tachometer-alt text-blue-300 w-5"></i>
                        <span>Tableau de bord</span>
                    </a>

                    <a href="{{ route('admin.realisations.index') }}" class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group @if(request()->is('admin/realisations*')) active bg-white/10 @endif" data-page="realisations">
                        <i class="fas fa-building text-blue-300 w-5"></i>
                        <span>Réalisations</span>
                    </a>

                    <a href="{{ route('admin.posts.index') }}" class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group @if(request()->is('admin/posts*')) active bg-white/10 @endif" data-page="posts">
                        <i class="fas fa-newspaper text-blue-300 w-5"></i>
                        <span>Articles</span>
                    </a>

                    <a href="{{ route('admin.messages') }}" class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group @if(request()->is('admin/messages*')) active bg-white/10 @endif" data-page="messages">
                        <i class="fas fa-comments text-blue-300 w-5"></i>
                        <span>Messages</span>
                    </a>

                    <div class="pt-4">
                        <p class="text-blue-300 text-xs uppercase tracking-wider px-3 mb-2">Configuration</p>
                        <a href="{{ route('admin.settings') }}" class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group">
                            <i class="fas fa-cog text-blue-300 w-5"></i>
                            <span>Paramètres</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="w-full flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-red-500/20 hover:text-red-200 group text-left">
                                <i class="fas fa-sign-out-alt text-blue-300 group-hover:text-red-300 w-5"></i>
                                <span>Déconnexion</span>
                            </button>
                        </form>
                    </div>
                </nav>

                <button onclick="toggleSidebar()" class="md:hidden absolute -right-3 top-1/2 transform -translate-y-1/2 bg-blue-800 text-white w-6 h-12 rounded-r-lg flex items-center justify-center">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </aside>

            <div class="flex-1 md:ml-64 transition-all duration-300" id="mainContent">
                <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between items-center py-4">
                            <button onclick="toggleSidebar()" class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none">
                                <i class="fas fa-bars text-xl"></i>
                            </button>

                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <span class="hidden md:inline">Tableau de bord</span>
                                <i class="fas fa-chevron-right hidden md:inline text-xs"></i>
                                <span id="currentPage" class="font-medium text-blue-600">@yield('title', 'Accueil')</span>
                            </div>

                            <div class="flex items-center space-x-4">
                                <button class="relative p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300">
                                    <i class="fas fa-bell text-lg"></i>
                                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                <main class="p-4 sm:p-6 lg:p-8">
                    @yield('admin-content')
                </main>
            </div>
        </div>

        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById('adminSidebar');
                sidebar.classList.toggle('-translate-x-full');
            }

            document.addEventListener('DOMContentLoaded', function() {
                function handleResize() {
                    if (window.innerWidth >= 768) {
                        document.getElementById('adminSidebar').classList.remove('-translate-x-full');
                    }
                }
                window.addEventListener('resize', handleResize);
                handleResize();
            });
        </script>
    </body>
</html>
