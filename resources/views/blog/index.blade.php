@extends('layouts.app')

@section('content')

<!-- Hero Section Blog -->
<section class="relative flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800" style="min-height:680px;">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-700 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-600 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/img7.jpg') }}');"></div>
        <div class="absolute inset-0 bg-blue-200/30 backdrop-blur-sm pointer-events-none"></div>
        
        <!-- Geometric Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%230ea5e9" fill-opacity="0.4"%3E%3Cpath d="M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10S10 15.523 10 10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zM20 20c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zm20 20c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight animate-slideInUp">
                    Notre 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-blue-400 to-cyan-600">
                        Blog
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-12 animate-fadeIn">
                    Découvrez nos articles, conseils experts et actualités pour réussir vos projets 
                    de construction et d'investissement immobilier.
                </p>

                <!-- Search & Filter -->
                <div class="max-w-2xl mx-auto animate-slideInUp delay-300">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="flex-1 relative">
                            <input type="text" 
                                   placeholder="Rechercher un article..." 
                                   class="w-full px-6 py-4 bg-white/10 backdrop-blur-sm border border-white/30 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/30 transition-all duration-300">
                            <i class="fas fa-search absolute right-6 top-1/2 transform -translate-y-1/2 text-blue-300"></i>
                        </div>
                        <select class="px-6 py-4 bg-white/10 backdrop-blur-sm border border-white/30 rounded-2xl text-white focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/30 transition-all duration-300">
                            <option class="bg-blue-900" value="">Toutes les catégories</option>
                            <option class="bg-blue-900" value="construction">Construction</option>
                            <option class="bg-blue-900" value="financement">Financement</option>
                            <option class="bg-blue-900" value="conseils">Conseils</option>
                            <option class="bg-blue-900" value="actualites">Actualités</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Article -->
@if($posts->count() > 0)
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Featured Header -->
            <div class="flex items-center justify-between mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-emerald-50 rounded-full px-6 py-3 mb-4 border border-blue-100 shadow-lg">
                        <div class="w-2 h-2 bg-gradient-to-r from-emerald-500 to-blue-600 rounded-full"></div>
                        <span class="font-bold text-blue-700 tracking-wider">ARTICLE EN VEDETTE</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                        Découvrez notre 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-600">
                            Sélection
                        </span>
                    </h2>
                </div>
                <a href="#all-articles" 
                   class="hidden md:flex items-center gap-2 text-blue-600 hover:text-blue-800 font-semibold">
                    <span>Voir tous les articles</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Featured Article Card -->
            @php $featured = $posts->first(); @endphp
            <div class="group relative bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-2xl overflow-hidden border border-blue-100 hover:shadow-3xl transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Image Section -->
                    <div class="relative h-64 lg:h-auto overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-emerald-600"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-newspaper text-white/30 text-8xl group-hover:scale-110 transition-transform duration-700"></i>
                        </div>
                        <div class="absolute top-6 left-6">
                            <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                <i class="fas fa-star text-yellow-400 mr-2"></i>
                                <span class="text-white font-semibold">En vedette</span>
                            </div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="inline-flex items-center text-white/80">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <span>{{ $featured->created_at->format('d M Y') }}</span>
                                <span class="mx-3">•</span>
                                <i class="far fa-clock mr-2"></i>
                                <span>5 min read</span>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="p-8 lg:p-12">
                        <!-- Categories -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                <i class="fas fa-tag mr-1"></i>
                                Construction
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800">
                                <i class="fas fa-lightbulb mr-1"></i>
                                Conseils
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-3xl font-bold text-gray-900 mb-6 group-hover:text-blue-700 transition-colors duration-300">
                            {{ $featured->title }}
                        </h3>

                        <!-- Excerpt -->
                        <p class="text-gray-600 leading-relaxed mb-8">
                            {{ Str::limit(strip_tags($featured->content), 200) }}
                        </p>

                        <!-- Author & CTA -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-emerald-500 flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Équipe ENSBTP</div>
                                    <div class="text-sm text-gray-500">Expert construction</div>
                                </div>
                            </div>
                            
                            <a href="{{ route('blog.show', $featured->slug) }}" 
                               class="group inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-emerald-700 transition-all duration-300">
                                <span>Lire l'article</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- All Articles -->
<section id="all-articles" class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-emerald-600 rounded-full px-8 py-4 mb-8 shadow-xl shadow-blue-500/30">
                    <i class="fas fa-newspaper text-white text-lg"></i>
                    <span class="font-bold text-white tracking-wider text-lg">TOUS LES ARTICLES</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Nos Derniers
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-600">
                        Articles
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Explorez notre collection d'articles pour rester informé et inspiré
                </p>
            </div>

            @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                @foreach($posts->skip(1) as $post)
                <article class="group animate-slideInUp" style="animation-delay: {{ $loop->index * 100 }}ms">
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 group-hover:-translate-y-2 h-full flex flex-col">
                        <!-- Article Header -->
                        <div class="relative aspect-[4/3] overflow-hidden">

                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-emerald-600"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-file-alt text-white/30 text-8xl group-hover:scale-110 transition-transform duration-700"></i>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 backdrop-blur-sm text-white">
                                    <i class="fas fa-book-open mr-1"></i>
                                    Article
                                </span>
                            </div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <div class="text-white/80 text-sm flex items-center">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    {{ $post->created_at->format('d M Y') }}
                                </div>
                            </div>
                        </div>

                        <!-- Article Content -->
                        <div class="p-4 md:p-5 flex-1 flex flex-col">

                            <!-- Categories -->
                            <div class="flex flex-wrap gap-2 mb-3">

                                @php
                                    $categories = ['Construction', 'Financement', 'Conseils'];
                                    $category = $categories[array_rand($categories)];
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $category }}
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-700 transition-colors duration-300">

                                {{ $post->title }}
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-4 line-clamp-3 leading-relaxed">

                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>

                            <!-- Footer -->
                            <div class="mt-auto flex items-center justify-between pt-3 border-t border-gray-100">

                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-blue-600 text-sm"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">ENSBTP</span>
                                </div>
                                
                                <a href="{{ route('blog.show', $post->slug) }}" 
                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group/read">
                                    <span>Lire</span>
                                    <i class="fas fa-arrow-right ml-2 group-hover/read:translate-x-1 transition-transform duration-300"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Hover Effect -->
                        <div class="absolute inset-0 border-2 border-transparent group-hover:border-blue-400 rounded-2xl transition-all duration-500 pointer-events-none"></div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($posts->hasPages())
            <div class="mt-16 pt-8 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-gray-600">
                        Page {{ $posts->currentPage() }} sur {{ $posts->lastPage() }}
                    </div>
                    
                    <nav class="flex items-center space-x-2">
                        <!-- Previous Page Link -->
                        @if($posts->onFirstPage())
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-xl cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        @else
                        <a href="{{ $posts->previousPageUrl() }}" 
                           class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-xl hover:bg-blue-50 hover:border-blue-300 transition-all duration-300">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        @endif

                        <!-- Page Numbers -->
                        @foreach(range(1, min(5, $posts->lastPage())) as $i)
                        <a href="{{ $posts->url($i) }}" 
                           class="px-4 py-2 rounded-xl font-medium transition-all duration-300 {{ $posts->currentPage() == $i ? 'bg-gradient-to-r from-blue-600 to-emerald-600 text-white shadow-lg' : 'bg-white border border-gray-300 text-gray-700 hover:bg-blue-50 hover:border-blue-300' }}">
                            {{ $i }}
                        </a>
                        @endforeach

                        <!-- Next Page Link -->
                        @if($posts->hasMorePages())
                        <a href="{{ $posts->nextPageUrl() }}" 
                           class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-xl hover:bg-blue-50 hover:border-blue-300 transition-all duration-300">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @else
                        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-xl cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                        @endif
                    </nav>
                </div>
            </div>
            @endif
            
            @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-100 to-emerald-100 flex items-center justify-center">
                    <i class="fas fa-newspaper text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Aucun article pour le moment</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">
                    Nous préparons du contenu de qualité pour vous. Revenez bientôt pour découvrir nos articles !
                </p>
                <a href="{{ url('/') }}" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-emerald-700 transition-all duration-300">
                    <i class="fas fa-home"></i>
                    <span>Retour à l'accueil</span>
                </a>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-gradient-to-br from-blue-500/20 to-blue-700/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-br from-blue-700/20 to-blue-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-full px-8 py-4 mb-8 border border-white/20 shadow-2xl">
                <i class="fas fa-envelope-open-text text-blue-300 text-xl"></i>
                <span class="font-bold text-white text-lg">NEWSLETTER</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Ne manquez pas nos 
                <span class="text-blue-300">
                    prochains articles
                </span>
            </h2>
            
            <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                Inscrivez-vous à notre newsletter pour recevoir nos meilleurs conseils, 
                actualités et offres exclusives directement dans votre boîte mail.
            </p>
            
            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="max-w-lg mx-auto">
                @csrf
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <input type="email" 
                           name="email"
                           placeholder="Votre adresse email" 
                           required
                           class="w-full max-w-xs sm:max-w-[14rem] px-6 py-4 bg-white/10 backdrop-blur-sm border border-white/30 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/30 transition-all duration-300">
                    
                    <button type="submit" 
                            class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-3">
                        <i class="fas fa-paper-plane"></i>
                        <span>S'abonner</span>
                    </button>
                </div>
                <p class="text-blue-200 text-sm mt-4">
                    <i class="fas fa-lock mr-1"></i>
                    Vos données sont sécurisées. Désabonnement à tout moment.
                </p>
            </form>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Search functionality
    document.querySelector('input[placeholder="Rechercher un article..."]').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const articles = document.querySelectorAll('#all-articles article');
        
        articles.forEach(article => {
            const title = article.querySelector('h3').textContent.toLowerCase();
            const excerpt = article.querySelector('p').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                article.style.display = 'block';
                article.classList.add('animate-slideInUp');
            } else {
                article.style.display = 'none';
            }
        });
    });
    
    // Category filter
    document.querySelector('select').addEventListener('change', function(e) {
        const category = e.target.value;
        const articles = document.querySelectorAll('#all-articles article');
        
        articles.forEach(article => {
            if (!category || article.querySelector('span').textContent.includes(category)) {
                article.style.display = 'block';
                article.classList.add('animate-slideInUp');
            } else {
                article.style.display = 'none';
            }
        });
    });
    
    // Newsletter form with AJAX
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const emailInput = form.querySelector('input[type="email"]');
        const submitBtn = form.querySelector('button[type="submit"]');
        
        if (!emailInput.value) {
            emailInput.focus();
            return;
        }
        
        // Show loading state
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = `
            <i class="fas fa-spinner fa-spin"></i>
            <span>Inscription...</span>
        `;
        submitBtn.disabled = true;
        
        // Send form data via AJAX
        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success
                submitBtn.innerHTML = `
                    <i class="fas fa-check"></i>
                    <span>Inscrit !</span>
                `;
                submitBtn.className = submitBtn.className.replace('from-emerald-500 to-blue-600', 'from-green-500 to-emerald-600');
                
                // Reset form
                setTimeout(() => {
                    form.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.className = submitBtn.className.replace('from-green-500 to-emerald-600', 'from-emerald-500 to-blue-600');
                    submitBtn.disabled = false;
                    
                    // Show success message
                    alert('✅ Vous êtes maintenant inscrit à notre newsletter ! Merci.');
                }, 2000);
            } else {
                alert('Erreur: ' + (data.message || 'Une erreur est survenue'));
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Check if it's a unique constraint violation
            if (error.message.includes('422')) {
                alert('Cet email est déjà inscrit à notre newsletter.');
            } else {
                alert('Erreur de connexion. Veuillez réessayer.');
            }
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });
</script>
@endpush

@push('styles')
<style>
    /* Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.4; }
    }
    
    .animate-slideInUp {
        animation: slideInUp 0.8s ease-out;
    }
    
    .animate-fadeIn {
        animation: fadeIn 1.2s ease-out;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
    
    /* Line clamp for text */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Custom scrollbar */
    select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%230ea5e9'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1.5em;
        padding-right: 3rem;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .text-7xl {
            font-size: 3rem !important;
        }
        
        .text-6xl {
            font-size: 2.5rem !important;
        }
        
        .text-5xl {
            font-size: 2rem !important;
        }
        
        .grid-cols-3 {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .flex-col {
            flex-direction: column !important;
        }
    }
    
    @media (max-width: 640px) {
        .text-7xl {
            font-size: 2.5rem !important;
        }
        
        .text-6xl {
            font-size: 2rem !important;
        }
        
        .grid-cols-2,
        .grid-cols-3 {
            grid-template-columns: 1fr;
        }
    }
    
    /* Smooth transitions */
    .transition-all {
        transition: all 0.3s ease;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #3b82f6, #10b981);
        border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #2563eb, #059669);
    }
</style>
@endpush