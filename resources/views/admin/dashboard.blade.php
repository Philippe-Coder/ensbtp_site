@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('admin-content')
<div class="flex min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <aside class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 text-white shadow-xl fixed left-0 top-0 bottom-0 z-50 transform transition-transform duration-300 md:translate-x-0 -translate-x-full" id="adminSidebar">
        <!-- Logo -->
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

        <!-- User Info -->
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

        <!-- Navigation -->
        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" 
               class="dashboard-menu-item active flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 bg-white/10 hover:bg-white/20 group"
               data-page="dashboard">
                <i class="fas fa-tachometer-alt text-blue-300 w-5"></i>
                <span>Tableau de bord</span>
            </a>

            <a href="{{ route('admin.realisations.index') }}" 
               class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group"
               data-page="realisations">
                <i class="fas fa-building text-blue-300 w-5"></i>
                <span>Réalisations</span>
                <span class="ml-auto bg-white/20 px-2 py-1 rounded text-xs">{{ $counts['realisations'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.posts.index') }}" 
               class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group"
               data-page="posts">
                <i class="fas fa-newspaper text-blue-300 w-5"></i>
                <span>Articles</span>
                <span class="ml-auto bg-white/20 px-2 py-1 rounded text-xs">{{ $counts['posts'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.offre_subscriptions.index') }}" 
               class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group"
               data-page="subscriptions">
                <i class="fas fa-file-signature text-blue-300 w-5"></i>
                <span>Souscriptions</span>
                <span class="ml-auto bg-white/20 px-2 py-1 rounded text-xs">{{ $counts['offre_subscriptions'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.messages') }}" 
               class="dashboard-menu-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group"
               data-page="messages">
                <i class="fas fa-comments text-blue-300 w-5"></i>
                <span>Messages</span>
                <span class="ml-auto bg-white/20 px-2 py-1 rounded text-xs">{{ $counts['messages'] ?? 0 }}</span>
            </a>

            <!-- Separator -->
            <div class="pt-4">
                <p class="text-blue-300 text-xs uppercase tracking-wider px-3 mb-2">Actions rapides</p>
                
                <a href="{{ route('admin.realisations.create') }}" 
                   class="quick-action-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/10 group">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                        <i class="fas fa-plus text-white text-sm"></i>
                    </div>
                    <span class="text-sm">Nouvelle réalisation</span>
                </a>

                <a href="{{ route('admin.posts.create') }}" 
                   class="quick-action-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/10 group">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center">
                        <i class="fas fa-edit text-white text-sm"></i>
                    </div>
                    <span class="text-sm">Publier un article</span>
                </a>

                <a href="{{ route('admin.services.create') }}" 
                   class="quick-action-item flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/10 group">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-sm"></i>
                    </div>
                    <span class="text-sm">Ajouter un service</span>
                </a>
            </div>

            <!-- Separator -->
            <div class="pt-4">
                <p class="text-blue-300 text-xs uppercase tracking-wider px-3 mb-2">Configuration</p>
                
                <a href="{{ route('admin.settings') }}" 
                   class="flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-white/20 group">
                    <i class="fas fa-cog text-blue-300 w-5"></i>
                    <span>Paramètres</span>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" 
                            class="w-full flex items-center space-x-3 p-3 rounded-lg transition-all duration-300 hover:bg-red-500/20 hover:text-red-200 group text-left">
                        <i class="fas fa-sign-out-alt text-blue-300 group-hover:text-red-300 w-5"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </nav>

        <!-- Toggle Button for Mobile -->
        <button onclick="toggleSidebar()" 
                class="md:hidden absolute -right-3 top-1/2 transform -translate-y-1/2 bg-blue-800 text-white w-6 h-12 rounded-r-lg flex items-center justify-center">
            <i class="fas fa-chevron-right"></i>
        </button>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 md:ml-64 transition-all duration-300" id="mainContent">
        <!-- Top Bar -->
        <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Mobile Menu Button -->
                    <button onclick="toggleSidebar()" 
                            class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- Breadcrumb -->
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <span class="hidden md:inline">Tableau de bord</span>
                        <i class="fas fa-chevron-right hidden md:inline text-xs"></i>
                        <span id="currentPage" class="font-medium text-blue-600">Accueil</span>
                    </div>

                    <!-- User Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button class="relative p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300">
                            <i class="fas fa-bell text-lg"></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        
                        <!-- Search -->
                        <div class="relative hidden md:block">
                            <input type="text" 
                                   placeholder="Rechercher..." 
                                   class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dynamic Content Area -->
        <main class="p-4 sm:p-6 lg:p-8">
            <div id="contentContainer">
                <!-- Dashboard Stats -->
                <div class="mb-8">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Tableau de bord</h1>
                    <p class="text-gray-600">Bienvenue dans votre espace d'administration</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                <i class="fas fa-building text-white text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-gray-900">{{ $counts['realisations'] ?? 0 }}</div>
                                <div class="text-sm text-gray-500">Total</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Réalisations</h3>
                        <p class="text-gray-600 text-sm">Projets de construction réalisés</p>
                        <a href="{{ route('admin.realisations.index') }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 mt-4 text-sm font-medium">
                            <span>Voir tout</span>
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center">
                                <i class="fas fa-newspaper text-white text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-gray-900">{{ $counts['posts'] ?? 0 }}</div>
                                <div class="text-sm text-gray-500">Total</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Articles</h3>
                        <p class="text-gray-600 text-sm">Articles publiés sur le blog</p>
                        <a href="{{ route('admin.posts.index') }}" 
                           class="inline-flex items-center text-green-600 hover:text-green-800 mt-4 text-sm font-medium">
                            <span>Voir tout</span>
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                                <i class="fas fa-file-signature text-white text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-gray-900">{{ $counts['offre_subscriptions'] ?? 0 }}</div>
                                <div class="text-sm text-gray-500">Total</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Souscriptions</h3>
                        <p class="text-gray-600 text-sm">Demandes de souscription</p>
                        <a href="{{ route('admin.offre_subscriptions.index') }}" 
                           class="inline-flex items-center text-purple-600 hover:text-purple-800 mt-4 text-sm font-medium">
                            <span>Voir tout</span>
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center">
                                <i class="fas fa-comments text-white text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-gray-900">{{ $counts['messages'] ?? 0 }}</div>
                                <div class="text-sm text-gray-500">Non lus</div>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Messages</h3>
                        <p class="text-gray-600 text-sm">Demandes de contact</p>
                        <a href="{{ route('admin.messages') }}" 
                           class="inline-flex items-center text-amber-600 hover:text-amber-800 mt-4 text-sm font-medium">
                            <span>Voir tout</span>
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Actions rapides</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="{{ route('admin.realisations.create') }}" 
                           class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                            <div class="flex items-center justify-between mb-4">
                                <i class="fas fa-building text-white text-2xl"></i>
                                <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Nouvelle réalisation</h3>
                            <p class="text-blue-100 text-sm">Ajouter un projet réalisé</p>
                        </a>

                        <a href="{{ route('admin.posts.create') }}" 
                           class="bg-gradient-to-r from-green-500 to-emerald-500 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                            <div class="flex items-center justify-between mb-4">
                                <i class="fas fa-edit text-white text-2xl"></i>
                                <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Publier un article</h3>
                            <p class="text-emerald-100 text-sm">Créer un nouvel article</p>
                        </a>

                        <a href="{{ route('admin.messages') }}" 
                           class="bg-gradient-to-r from-gray-600 to-gray-700 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                            <div class="flex items-center justify-between mb-4">
                                <i class="fas fa-comments text-white text-2xl"></i>
                                <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Voir les demandes</h3>
                            <p class="text-gray-300 text-sm">Consulter les messages</p>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Activité récente</h2>
                    <div class="space-y-4">
                        @php
                            $recentActivities = [
                                ['icon' => 'fa-building', 'color' => 'text-blue-500', 'title' => 'Nouvelle réalisation ajoutée', 'time' => 'Il y a 2 heures', 'user' => 'Admin'],
                                ['icon' => 'fa-newspaper', 'color' => 'text-green-500', 'title' => 'Article publié', 'time' => 'Il y a 5 heures', 'user' => 'Admin'],
                                ['icon' => 'fa-file-signature', 'color' => 'text-purple-500', 'title' => 'Nouvelle souscription', 'time' => 'Il y a 1 jour', 'user' => 'Client'],
                                ['icon' => 'fa-comment', 'color' => 'text-amber-500', 'title' => 'Message reçu', 'time' => 'Il y a 2 jours', 'user' => 'Visiteur'],
                            ];
                        @endphp
                        
                        @foreach($recentActivities as $activity)
                        <div class="flex items-center p-4 rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors duration-300">
                            <div class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center mr-4">
                                <i class="fas {{ $activity['icon'] }} {{ $activity['color'] }}"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900">{{ $activity['title'] }}</h4>
                                <p class="text-sm text-gray-500">{{ $activity['user'] }} • {{ $activity['time'] }}</p>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Loading Overlay -->
<div id="loadingOverlay" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-2xl flex flex-col items-center">
        <div class="w-16 h-16 rounded-full border-4 border-blue-200 border-t-blue-600 animate-spin mb-4"></div>
        <p class="text-gray-700 font-medium">Chargement...</p>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Sidebar toggle for mobile
    function toggleSidebar() {
        const sidebar = document.getElementById('adminSidebar');
        const mainContent = document.getElementById('mainContent');
        
        sidebar.classList.toggle('-translate-x-full');
        mainContent.classList.toggle('md:ml-64');
        mainContent.classList.toggle('ml-0');
    }

    // AJAX Navigation
    document.querySelectorAll('.dashboard-menu-item, .quick-action-item').forEach(link => {
        link.addEventListener('click', async function(e) {
            // Only intercept internal links
            if (this.target === '_blank' || this.href.includes('#')) return;
            
            e.preventDefault();
            
            const url = this.href;
            const page = this.dataset.page || 'dashboard';
            
            // Update active state
            document.querySelectorAll('.dashboard-menu-item').forEach(item => {
                item.classList.remove('active', 'bg-white/10');
            });
            this.classList.add('active', 'bg-white/10');
            
            // Update breadcrumb
            document.getElementById('currentPage').textContent = this.textContent.trim();
            
            // Show loading
            document.getElementById('loadingOverlay').classList.remove('hidden');
            document.getElementById('loadingOverlay').classList.add('flex');
            
            try {
                // Fetch the page content
                const response = await fetch(url);
                const html = await response.text();
                
                // Parse the HTML to extract main content
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const content = doc.querySelector('#contentContainer') || doc.querySelector('.container') || doc.body;
                
                // Update content
                document.getElementById('contentContainer').innerHTML = content.innerHTML;
                
                // Update URL without reloading
                window.history.pushState({}, '', url);
                
                // Re-initialize any scripts
                initializePageScripts();
                
            } catch (error) {
                console.error('Error loading page:', error);
                // Fallback to normal navigation
                window.location.href = url;
                return;
            } finally {
                // Hide loading
                document.getElementById('loadingOverlay').classList.remove('flex');
                document.getElementById('loadingOverlay').classList.add('hidden');
            }
            
            // Close sidebar on mobile after navigation
            if (window.innerWidth < 768) {
                toggleSidebar();
            }
        });
    });

    // Handle browser back/forward buttons
    window.addEventListener('popstate', function() {
        // Reload the current page via AJAX
        const url = window.location.href;
        loadPage(url);
    });

    // Initialize page-specific scripts
    function initializePageScripts() {
        // Initialize any form validations, date pickers, etc.
        console.log('Page scripts initialized');
        
        // Re-attach event listeners to new buttons
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!this.checkValidity()) {
                    e.preventDefault();
                    // Add validation styles
                    this.classList.add('was-validated');
                }
            });
        });
        
        // Initialize tooltips
        const tooltips = document.querySelectorAll('[data-tooltip]');
        tooltips.forEach(tooltip => {
            tooltip.addEventListener('mouseenter', function() {
                const tooltipText = this.dataset.tooltip;
                // Create and show tooltip
            });
        });
    }

    // Generic page loader
    async function loadPage(url) {
        try {
            const response = await fetch(url);
            const html = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const content = doc.querySelector('#contentContainer') || doc.querySelector('.container');
            
            if (content) {
                document.getElementById('contentContainer').innerHTML = content.innerHTML;
                initializePageScripts();
            }
        } catch (error) {
            console.error('Error loading page:', error);
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        initializePageScripts();
        
        // Auto-hide notifications after 5 seconds
        setTimeout(() => {
            const notifications = document.querySelectorAll('.notification');
            notifications.forEach(notification => {
                notification.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                setTimeout(() => notification.remove(), 300);
            });
        }, 5000);
        
        // Responsive adjustments
        function handleResize() {
            if (window.innerWidth >= 768) {
                document.getElementById('adminSidebar').classList.remove('-translate-x-full');
                document.getElementById('mainContent').classList.add('md:ml-64');
            }
        }
        
        window.addEventListener('resize', handleResize);
        handleResize(); // Initial check
    });
</script>
@endpush

@push('styles')
<style>
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
    
    /* Sidebar specific scrollbar */
    aside::-webkit-scrollbar-track {
        background: #1e3a8a;
    }
    
    aside::-webkit-scrollbar-thumb {
        background: #3b82f6;
    }
    
    aside::-webkit-scrollbar-thumb:hover {
        background: #2563eb;
    }
    
    /* Smooth transitions */
    .transition-all {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Loading spinner animation */
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .animate-spin {
        animation: spin 1s linear infinite;
    }
    
    /* Active menu item */
    .dashboard-menu-item.active {
        background: rgba(255, 255, 255, 0.1);
        position: relative;
    }
    
    .dashboard-menu-item.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 60%;
        background: #3b82f6;
        border-radius: 0 4px 4px 0;
    }
    
    /* Card hover effects */
    .hover\:-translate-y-1 {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover\:-translate-y-1:hover {
        transform: translateY(-4px);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        #adminSidebar {
            width: 280px;
        }
        
        #mainContent {
            margin-left: 0 !important;
        }
        
        .grid-cols-4 {
            grid-template-columns: repeat(1, 1fr) !important;
        }
    }
    
    @media (min-width: 768px) and (max-width: 1024px) {
        .grid-cols-4 {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    /* Print styles */
    @media print {
        aside, header, .no-print {
            display: none !important;
        }
        
        #mainContent {
            margin-left: 0 !important;
            width: 100% !important;
        }
        
        .bg-white {
            background: white !important;
            box-shadow: none !important;
            border: 1px solid #e5e7eb !important;
        }
    }
    
    /* Dark mode support */
    @media (prefers-color-scheme: dark) {
        .bg-gray-50 {
            background-color: #111827 !important;
        }
        
        .bg-white {
            background-color: #1f2937 !important;
        }
        
        .text-gray-900 {
            color: #f9fafb !important;
        }
        
        .text-gray-600 {
            color: #d1d5db !important;
        }
        
        .border-gray-100 {
            border-color: #374151 !important;
        }
    }
</style>
@endpush