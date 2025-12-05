@extends('layouts.app')

@section('content')

<!-- Hero Section Réalisations -->
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-700 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-600 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        
        <!-- Geometric Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23f59e0b" fill-opacity="0.4"%3E%3Cpath d="M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10S10 15.523 10 10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zM20 20c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10zm20 20c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10-10-4.477-10-10z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight animate-slideInUp">
                    Nos 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-orange-400 to-blue-600">
                        Réalisations
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-12 animate-fadeIn">
                    Découvrez notre portfolio de projets accomplis. Chaque réalisation témoigne 
                    de notre expertise, notre savoir-faire et notre engagement envers l'excellence.
                </p>

               
            </div>
        </div>
    </div>
</section>

<!-- Filter Navigation -->
<section class="py-12 bg-white border-b border-gray-100 sticky top-0 z-30 backdrop-blur-sm bg-white/95">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <!-- Filter Title -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-amber-50 rounded-full px-6 py-3 border border-blue-100 shadow-sm">
                        <div class="w-2 h-2 bg-gradient-to-r from-amber-500 to-blue-600 rounded-full"></div>
                        <span class="font-bold text-blue-700 tracking-wider">CATÉGORIES DE PROJETS</span>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-3 justify-center">
                    <button class="filter-btn active px-6 py-3 bg-gradient-to-r from-blue-600 to-amber-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all duration-300" data-filter="all">
                        <i class="fas fa-th-large mr-2"></i>
                        Tous
                    </button>
                    <button class="filter-btn px-6 py-3 bg-white border-2 border-blue-100 text-blue-700 font-semibold rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-300" data-filter="construction">
                        <i class="fas fa-hard-hat mr-2"></i>
                        Construction
                    </button>
                    <button class="filter-btn px-6 py-3 bg-white border-2 border-blue-100 text-blue-700 font-semibold rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-300" data-filter="renovation">
                        <i class="fas fa-hammer mr-2"></i>
                        Rénovation
                    </button>
                    <button class="filter-btn px-6 py-3 bg-white border-2 border-blue-100 text-blue-700 font-semibold rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-300" data-filter="architecture">
                        <i class="fas fa-drafting-compass mr-2"></i>
                        Architecture
                    </button>
                    <button class="filter-btn px-6 py-3 bg-white border-2 border-blue-100 text-blue-700 font-semibold rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-300" data-filter="travaux-publics">
                        <i class="fas fa-road mr-2"></i>
                        Travaux Publics
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Réalisations Gallery -->
<section class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            @if($realisations->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                @foreach($realisations as $real)
                <div class="project-card group animate-slideInUp" 
                     style="animation-delay: {{ $loop->index * 100 }}ms"
                     data-category="{{ $real->category ?? 'construction' }}">
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 group-hover:-translate-y-2 h-full">
                        <!-- Project Image -->
                        <div class="relative h-64 overflow-hidden">
                            @if(is_array($real->media) && count($real->media))
                            <img src="{{ $real->media[0] }}" 
                                 alt="{{ $real->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-amber-600 flex items-center justify-center">
                                <i class="fas fa-building text-white/30 text-8xl"></i>
                            </div>
                            @endif
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                @php
                                    $category = $real->category ?? 'construction';
                                    $categoryColors = [
                                        'construction' => 'from-blue-500 to-blue-600',
                                        'renovation' => 'from-amber-500 to-orange-600',
                                        'architecture' => 'from-purple-500 to-indigo-600',
                                        'travaux-publics' => 'from-green-500 to-emerald-600'
                                    ];
                                    $color = $categoryColors[$category] ?? 'from-blue-500 to-blue-600';
                                @endphp
                                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-bold bg-gradient-to-r {{ $color }} text-white shadow-lg">
                                    <i class="fas fa-{{ $category === 'construction' ? 'hard-hat' : ($category === 'renovation' ? 'hammer' : ($category === 'architecture' ? 'drafting-compass' : 'road')) }} mr-1"></i>
                                    {{ ucfirst($category) }}
                                </span>
                            </div>
                            
                            <!-- View Button -->
                            <div class="absolute bottom-4 right-4 transform translate-y-full opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="{{ route('realisations.show', $real->slug) }}" 
                                   class="inline-flex items-center gap-2 bg-white text-blue-700 px-4 py-2 rounded-xl font-semibold hover:bg-blue-50 transition-all duration-300 shadow-lg">
                                    <i class="fas fa-eye"></i>
                                    <span>Voir</span>
                                </a>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-700 transition-colors duration-300">
                                {{ $real->title }}
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">
                                {{ $real->excerpt }}
                            </p>

                            <!-- Project Details -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-4">
                                    <!-- Date -->
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                                        <span class="text-sm text-gray-600">
                                            {{ $real->created_at->format('M Y') }}
                                        </span>
                                    </div>
                                    
                                    <!-- Location -->
                                    @if($real->location)
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                                        <span class="text-sm text-gray-600">{{ $real->location }}</span>
                                    </div>
                                    @endif
                                </div>
                                
                                <!-- Quick View -->
                                <button onclick="openProjectModal('{{ $real->slug }}')"
                                        class="text-blue-600 hover:text-blue-800 font-medium group/view">
                                    <i class="fas fa-expand-alt group-hover/view:scale-110 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Hover Effect -->
                        <div class="absolute inset-0 border-2 border-transparent group-hover:border-blue-400 rounded-2xl transition-all duration-500 pointer-events-none"></div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Empty State for Filter -->
            <div id="no-projects" class="hidden text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-100 to-amber-100 flex items-center justify-center">
                    <i class="fas fa-search text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Aucun projet trouvé</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">
                    Aucun projet ne correspond à cette catégorie. Essayez une autre catégorie ou consultez tous nos projets.
                </p>
                <button class="filter-btn active px-6 py-3 bg-gradient-to-r from-blue-600 to-amber-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all duration-300" data-filter="all">
                    <i class="fas fa-th-large mr-2"></i>
                    Voir tous les projets
                </button>
            </div>
            
            @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-100 to-amber-100 flex items-center justify-center">
                    <i class="fas fa-building text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Aucune réalisation pour le moment</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">
                    Nous préparons la présentation de nos projets. Revenez bientôt pour découvrir nos réalisations !
                </p>
                <a href="{{ route('services.index') }}" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-amber-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-amber-700 transition-all duration-300">
                    <i class="fas fa-cogs"></i>
                    <span>Découvrir nos services</span>
                </a>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Project Modal -->
<div id="projectModal" class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden animate-slideInUp">
        <!-- Modal Header -->
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <div>
                <h3 id="modalTitle" class="text-2xl font-bold text-gray-900">Titre du projet</h3>
                <p id="modalCategory" class="text-gray-600 text-sm mt-1">Catégorie</p>
            </div>
            <button onclick="closeProjectModal()" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <!-- Modal Content -->
        <div class="p-6 overflow-y-auto max-h-[60vh]">
            <!-- Gallery -->
            <div class="swiper modalSwiper mb-6 rounded-xl overflow-hidden">
                <div class="swiper-wrapper" id="modalGallery">
                    <!-- Images will be inserted here -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
            <!-- Details -->
            <div class="space-y-6">
                <div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">Description</h4>
                    <p id="modalDescription" class="text-gray-600 leading-relaxed"></p>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Informations</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-calendar-alt text-blue-500 mr-3"></i>
                                <span class="text-gray-700" id="modalDate">Date</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-map-marker-alt text-blue-500 mr-3"></i>
                                <span class="text-gray-700" id="modalLocation">Localisation</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-clock text-blue-500 mr-3"></i>
                                <span class="text-gray-700" id="modalDuration">Durée</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Caractéristiques</h4>
                        <ul class="space-y-2" id="modalFeatures">
                            <!-- Features will be inserted here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Footer -->
        <div class="p-6 border-t border-gray-200 bg-gray-50">
            <div class="flex items-center justify-between">
                <div class="text-gray-600 text-sm">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                    Projet réalisé par ENSBTP SARLU
                </div>
                <a href="#" id="modalLink"
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-amber-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-amber-700 transition-all duration-300">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Voir les détails complets</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- CTA Contact -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-amber-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-gradient-to-br from-blue-500/10 to-amber-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-br from-amber-600/10 to-blue-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-full px-8 py-4 mb-8 border border-white/20 shadow-2xl">
                <i class="fas fa-handshake text-amber-300 text-xl"></i>
                <span class="font-bold text-white text-lg">VOTRE PROJET SUIVANT ?</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Inspiré par nos 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-blue-400">
                    réalisations ?
                </span>
            </h2>
            
            <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                Discutons de votre prochain projet de construction, rénovation ou aménagement. 
                Notre équipe d'experts est prête à transformer vos idées en réalité.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('contact') }}" 
                   class="group relative px-10 py-5 bg-white text-blue-700 rounded-2xl font-bold text-lg shadow-2xl shadow-blue-900/30 hover:shadow-blue-900/50 hover:-translate-y-1 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-comments"></i>
                    <span>Discuter de mon projet</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
                
                <a href="{{ route('services.index') }}" 
                   class="group relative px-10 py-5 bg-transparent border-2 border-white/30 text-white rounded-2xl font-bold text-lg backdrop-blur-sm hover:bg-white/10 hover:border-white/50 hover:shadow-2xl hover:shadow-white/20 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-cogs"></i>
                    <span>Nos services</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    let modalSwiper = null;
    
    // Filter functionality
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-600', 'to-amber-600', 'text-white');
                btn.classList.add('bg-white', 'border-2', 'border-blue-100', 'text-blue-700');
            });
            
            this.classList.remove('bg-white', 'border-2', 'border-blue-100', 'text-blue-700');
            this.classList.add('active', 'bg-gradient-to-r', 'from-blue-600', 'to-amber-600', 'text-white');
            
            // Filter projects
            const projects = document.querySelectorAll('.project-card');
            let visibleCount = 0;
            
            projects.forEach(project => {
                if (filter === 'all' || project.dataset.category === filter) {
                    project.style.display = 'block';
                    visibleCount++;
                    project.classList.add('animate-slideInUp');
                } else {
                    project.style.display = 'none';
                }
            });
            
            // Show/hide no projects message
            const noProjects = document.getElementById('no-projects');
            if (visibleCount === 0 && filter !== 'all') {
                noProjects.classList.remove('hidden');
                noProjects.classList.add('block');
            } else {
                noProjects.classList.remove('block');
                noProjects.classList.add('hidden');
            }
        });
    });
    
    // Modal functions
    function openProjectModal(slug) {
        // Fetch project data (simulated)
        const project = {
            title: 'Projet de Construction Premium',
            category: 'Construction',
            description: 'Un projet de construction moderne avec des matériaux de haute qualité et une architecture innovante. Réalisation complète incluant la conception, la construction et l\'aménagement.',
            date: 'Mars 2023',
            location: 'Abidjan, Plateau',
            duration: '6 mois',
            features: ['Architecture moderne', 'Matériaux écologiques', 'Équipements high-tech', 'Design intérieur sur mesure'],
            images: [
                'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1513584684374-8bab748fbf90?w-800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1487956382158-bb926046304a?w=800&auto=format&fit=crop'
            ],
            link: `/realisations/${slug}`
        };
        
        // Populate modal
        document.getElementById('modalTitle').textContent = project.title;
        document.getElementById('modalCategory').textContent = project.category;
        document.getElementById('modalDescription').textContent = project.description;
        document.getElementById('modalDate').textContent = project.date;
        document.getElementById('modalLocation').textContent = project.location;
        document.getElementById('modalDuration').textContent = project.duration;
        document.getElementById('modalLink').href = project.link;
        
        // Populate features
        const featuresList = document.getElementById('modalFeatures');
        featuresList.innerHTML = '';
        project.features.forEach(feature => {
            const li = document.createElement('li');
            li.className = 'flex items-center';
            li.innerHTML = `
                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                <span class="text-gray-700">${feature}</span>
            `;
            featuresList.appendChild(li);
        });
        
        // Populate gallery
        const gallery = document.getElementById('modalGallery');
        gallery.innerHTML = '';
        project.images.forEach(image => {
            gallery.innerHTML += `
                <div class="swiper-slide">
                    <img src="${image}" alt="${project.title}" class="w-full h-96 object-cover">
                </div>
            `;
        });
        
        // Show modal
        const modal = document.getElementById('projectModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        
        // Initialize swiper
        if (modalSwiper) {
            modalSwiper.destroy();
        }
        
        setTimeout(() => {
            modalSwiper = new Swiper('.modalSwiper', {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }, 100);
    }
    
    function closeProjectModal() {
        const modal = document.getElementById('projectModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        
        if (modalSwiper) {
            modalSwiper.destroy();
            modalSwiper = null;
        }
    }
    
    // Close modal on ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeProjectModal();
    });
    
    // Close modal on background click
    document.getElementById('projectModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('projectModal')) {
            closeProjectModal();
        }
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
    
    /* Swiper styles */
    .swiper {
        width: 100%;
        height: 100%;
    }
    
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .swiper-button-next, .swiper-button-prev {
        color: white;
        background: rgba(0,0,0,0.5);
        width: 44px;
        height: 44px;
        border-radius: 50%;
    }
    
    .swiper-button-next:after, .swiper-button-prev:after {
        font-size: 20px;
    }
    
    .swiper-pagination-bullet {
        background: white;
        opacity: 0.5;
    }
    
    .swiper-pagination-bullet-active {
        opacity: 1;
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
        
        .sticky {
            position: static;
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
        
        .filter-btn {
            padding: 0.75rem 1rem !important;
            font-size: 0.875rem !important;
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
        background: linear-gradient(to bottom, #3b82f6, #f59e0b);
        border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #2563eb, #d97706);
    }
</style>
@endpush