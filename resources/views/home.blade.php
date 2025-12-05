@extends('layouts.app')

@section('content')

<!-- Hero Section avec effet Parallax -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800">
    <!-- Effets de fond animés -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-700 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute top-1/3 right-1/3 w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        
        <!-- Background image carousel (translucent white overlay) -->
        <div class="absolute inset-0 z-0 hero-bg">
            <div class="hero-bg-overlay absolute inset-0 bg-white/10 backdrop-blur-sm"></div>
            <div class="absolute inset-0 heroBackgroundSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-[url('https://images.unsplash.com/photo-1505692794409-6c7b2a5f8a3b?q=80&w=1400&auto=format&fit=crop&s=1')] bg-cover bg-center"></div>
                    <div class="swiper-slide bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1400&auto=format&fit=crop&s=2')] bg-cover bg-center"></div>
                    <div class="swiper-slide bg-[url('https://images.unsplash.com/photo-1505842465776-3acbdb0ce0a8?q=80&w=1400&auto=format&fit=crop&s=3')] bg-cover bg-center"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation du Hero -->
    <div class="swiper heroSwiper relative z-10 w-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 - Principal -->
            <div class="swiper-slide">
                <div class="container mx-auto px-4 py-12">
                    <div class="max-w-6xl mx-auto">
                        <div class="text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-12">
                            <div class="md:w-1/2 space-y-8">
                                <!-- Badge d'élite -->
                                <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-lg rounded-full px-6 py-3 border border-white/20 shadow-2xl shadow-blue-900/30 animate-slideInLeft">
                                    <div class="w-3 h-3 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full animate-ping"></div>
                                    <span class="font-semibold text-white text-sm tracking-wider">SOLUTIONS DE CONSTRUCTION EXPERTES</span>
                                </div>

                                <!-- Titre principal -->
                                <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-slideInUp">
                                    <span class="block text-white mb-4">Construire</span>
                                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-blue-600">
                                        L'Avenir Ensemble
                                    </span>
                                </h1>

                                <!-- Sous-titre -->
                                <p class="text-xl text-blue-100 leading-relaxed max-w-2xl animate-fadeIn">
                                    ENSBTP SARLU transforme vos projets immobiliers en réalités durables avec un accompagnement technique et financier sur-mesure.
                                </p>

                                <!-- CTA Buttons -->
                                <div class="flex flex-col sm:flex-row gap-6 pt-8 animate-slideInUp delay-300">
                                    <a href="#contact" 
                                       class="group relative px-10 py-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-2xl font-bold text-lg shadow-2xl shadow-blue-500/30 hover:shadow-blue-500/50 transition-all duration-500 hover:-translate-y-1 flex items-center justify-center gap-3 overflow-hidden">
                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                        <i class="fas fa-comments relative z-10 text-xl"></i>
                                        <span class="relative z-10">Demander un Devis Gratuit</span>
                                        <i class="fas fa-arrow-right relative z-10 group-hover:translate-x-2 transition-transform duration-300"></i>
                                    </a>
                                    
                                    <a href="#packs" 
                                       class="group relative px-10 py-5 bg-transparent border-2 border-white/30 text-white rounded-2xl font-bold text-lg backdrop-blur-sm hover:bg-white/10 hover:border-white/50 hover:shadow-2xl hover:shadow-white/20 transition-all duration-500 flex items-center justify-center gap-3">
                                        <i class="fas fa-gem"></i>
                                        <span>Voir Nos Packs</span>
                                        <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform duration-300"></i>
                                    </a>
                                </div>

                                <!-- Stats en ligne -->
                                <div class="grid grid-cols-3 gap-4 pt-8 border-t border-white/10">
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-white mb-1">20%</div>
                                        <div class="text-sm text-blue-200">Prise en Charge</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-white mb-1">200+</div>
                                        <div class="text-sm text-blue-200">Projets Livrés</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-white mb-1">100%</div>
                                        <div class="text-sm text-blue-200">Satisfaction</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Illustration Hero -->
                            <div class="md:w-1/2 relative animate-slideInRight">
                                <div class="relative">
                                    <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-3xl blur-3xl"></div>
                                    <div class="relative bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-xl rounded-2xl border border-white/20 p-8 shadow-2xl">
                                        <div class="aspect-video rounded-xl bg-gradient-to-br from-cyan-500/20 to-blue-600/20 flex items-center justify-center">
                                            <div class="text-center p-8">
                                                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center">
                                                    <i class="fas fa-building text-white text-3xl"></i>
                                                </div>
                                                <h3 class="text-white text-2xl font-bold mb-3">Votre Projet,<br>Notre Expertise</h3>
                                                <p class="text-blue-200">Construction durable & accompagnement complet</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="flex flex-col items-center text-white/60 hover:text-white transition-colors duration-300">
                <span class="text-sm mb-2">Explorer</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </a>
        </div>
    </div>
</section>

<!-- Services Premium Section -->
<section id="services" class="py-16 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50/30 to-white"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full px-6 py-3 mb-6 border border-blue-100 shadow-lg">
                <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full"></div>
                <span class="font-bold text-blue-700 tracking-wider">NOS DOMAINES D'EXPERTISE</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                Services 
                <span class="relative">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Premium</span>
                    <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                </span>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                Des solutions complètes et innovantes pour tous vos projets de construction, 
                de la conception à la réalisation.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
            <div class="group perspective-1000">
                <div class="relative transform preserve-3d group-hover:rotate-y-10 transition-all duration-700">
                    <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden hover:shadow-3xl transition-all duration-500">
                        <!-- Service Header -->
                            <div class="relative h-48 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 opacity-40 backdrop-blur-sm"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-{{ $service->icon ?? 'cogs' }} text-black text-6xl transform group-hover:scale-110 transition-transform duration-700"></i>
                            </div>
                            <!-- Badge -->
                            <div class="absolute top-4 right-4 bg-white/30 backdrop-blur-sm rounded-full px-4 py-2">
                                <span class="text-black text-sm font-semibold">Expert</span>
                            </div>
                        </div>

                        <!-- Service Content -->
                        <div class="p-8">
                            <div class="flex items-start mb-6">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $service->title }}</h3>
                                    <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mb-4"></div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {{ $service->excerpt }}
                            </p>
                            
                            <!-- Features -->
                            <ul class="space-y-3 mb-8">
                                @foreach(['Solution sur mesure', 'Expertise certifiée', 'Support dédié'] as $feature)
                                <li class="flex items-center">
                                    <i class="fas fa-circle text-blue-400 text-xs mr-3"></i>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>

                            <!-- Action Button -->
                            <a href="/services/{{ $service->slug }}" 
                               class="group relative inline-flex items-center justify-center w-full py-4 px-6 bg-gradient-to-r from-blue-50 to-cyan-50 text-blue-700 font-bold rounded-xl hover:from-blue-100 hover:to-cyan-100 transition-all duration-300 border border-blue-100">
                                <span>Découvrir le service</span>
                                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Packs Section avec design cartes premium -->
<section id="packs" class="py-16 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-200 to-cyan-200 rounded-full px-8 py-4 mb-8 shadow-xl">
                <i class="fas fa-crown text-black text-lg"></i>
                <span class="font-bold text-black tracking-wider text-lg">CHOIX DE PACKS EXCLUSIFS</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Packs 
                <span class="relative">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Sur Mesure</span>
                    <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                </span>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                Choisissez le pack qui correspond parfaitement à votre budget et à vos ambitions
            </p>
        </div>

        <!-- Packs Container -->
        <div class="relative">
            <!-- Navigation Slider pour mobile -->
            <div class="lg:hidden swiper packsSwiper mb-6">
                <div class="swiper-wrapper">
                    @foreach([
                        ['name' => 'Pack00', 'desc' => 'Privés, commerçants, diaspora', 'price' => 'Sur mesure', 'features' => 6, 'color' => 'from-blue-600 to-cyan-600'],
                        ['name' => 'Pack1 Classic', 'desc' => 'SMIG — jusqu\'à 100 000 CFA', 'price' => '100K CFA', 'features' => 5, 'color' => 'from-blue-500 to-cyan-500'],
                        ['name' => 'Pack2 Basique', 'desc' => '100 001 — 200 000 CFA', 'price' => '200K CFA', 'features' => 6, 'color' => 'from-blue-600 to-cyan-600', 'popular' => true],
                        ['name' => 'Pack3 Premium', 'desc' => '200 001 — 500 001 CFA', 'price' => '500K CFA', 'features' => 7, 'color' => 'from-blue-700 to-cyan-700'],
                        ['name' => 'Pack4 Elite', 'desc' => '600 000 — 999 999 CFA', 'price' => '850K CFA', 'features' => 8, 'color' => 'from-blue-800 to-cyan-800'],
                        ['name' => 'Pack5 VIP', 'desc' => '1 000 000 CFA et plus', 'price' => '1M+ CFA', 'features' => 10, 'color' => 'from-blue-900 to-cyan-900']
                    ] as $pack)
                    <div class="swiper-slide">
                        @include('components.pack-card', ['pack' => $pack])
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination mt-8"></div>
            </div>

            <!-- Grid Desktop -->
            <div class="hidden lg:grid lg:grid-cols-3 gap-6">
                <!-- Pack 1-3 -->
                @foreach(array_slice([
                    ['name' => 'Pack1 Classic', 'desc' => 'SMIG — jusqu\'à 100 000 CFA', 'price' => '100K CFA', 'features' => 5, 'color' => 'from-blue-500 to-cyan-500'],
                    ['name' => 'Pack2 Basique', 'desc' => '100 001 — 200 000 CFA', 'price' => '200K CFA', 'features' => 6, 'color' => 'from-blue-600 to-cyan-600', 'popular' => true],
                    ['name' => 'Pack3 Premium', 'desc' => '200 001 — 500 001 CFA', 'price' => '500K CFA', 'features' => 7, 'color' => 'from-blue-700 to-cyan-700']
                ], 0, 3) as $pack)
                @include('components.pack-card', ['pack' => $pack])
                @endforeach
            </div>
            
            <!-- Pack 00 - Full Width -->
            <div class="mt-8 hidden lg:block">
                @include('components.pack-card', [
                    'pack' => [
                        'name' => 'Pack00', 
                        'desc' => 'Privés, commerçants, diaspora', 
                        'price' => 'Sur mesure', 
                        'features' => 6, 
                        'color' => 'from-blue-600 to-cyan-600',
                        'fullWidth' => true
                    ]
                ])
            </div>
            
            <!-- Packs 4-5 -->
            <div class="hidden lg:grid lg:grid-cols-2 gap-6 mt-6">
                @foreach(array_slice([
                    ['name' => 'Pack4 Elite', 'desc' => '600 000 — 999 999 CFA', 'price' => '850K CFA', 'features' => 8, 'color' => 'from-blue-800 to-cyan-800'],
                    ['name' => 'Pack5 VIP', 'desc' => '1 000 000 CFA et plus', 'price' => '1M+ CFA', 'features' => 10, 'color' => 'from-blue-900 to-cyan-900']
                ], 0, 2) as $pack)
                @include('components.pack-card', ['pack' => $pack])
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Contact Section avec formulaire moderne -->
<section id="contact" class="py-16 bg-gradient-to-br from-gray-900 via-blue-950 to-blue-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-gradient-to-br from-cyan-500/10 to-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-br from-blue-600/10 to-cyan-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-lg rounded-full px-8 py-4 mb-8 border border-white/20 shadow-2xl">
                    <i class="fas fa-comment-dots text-cyan-400 text-xl"></i>
                    <span class="font-bold text-white text-lg">PRÊT À COMMENCER ?</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    Contactez-Nous
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">
                        Dès Maintenant
                    </span>
                </h2>
                <p class="text-xl text-blue-200 leading-relaxed max-w-2xl mx-auto">
                    Prenez contact avec notre équipe d'experts pour discuter de votre projet
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <!-- Info Card -->
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6 hover:bg-white/10 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-cyan-500/20 to-blue-600/20 flex items-center justify-center">
                                <i class="fas fa-phone-alt text-cyan-400 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Téléphone</h3>
                                <p class="text-blue-200">Disponible 24/7 pour vos urgences</p>
                            </div>
                        </div>
                        <a href="tel:+22500000000" class="text-2xl font-bold text-white hover:text-cyan-400 transition-colors duration-300">
                            +225 00 00 00 00
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6 hover:bg-white/10 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-blue-500/20 to-cyan-600/20 flex items-center justify-center">
                                <i class="fas fa-envelope text-blue-400 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Email</h3>
                                <p class="text-blue-200">Réponse sous 24h maximum</p>
                            </div>
                        </div>
                        <a href="mailto:contact@ensbtp.ci" class="text-xl font-bold text-white hover:text-blue-400 transition-colors duration-300">
                            contact@ensbtp.ci
                        </a>
                    </div>

                    <!-- Adresse Card -->
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6 hover:bg-white/10 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-blue-600/20 to-cyan-500/20 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Adresse</h3>
                                <p class="text-blue-200">Rendez-vous sur site possible</p>
                            </div>
                        </div>
                        <p class="text-lg text-white">
                            Abidjan, Côte d'Ivoire<br>
                            <span class="text-blue-200">Plateau - Zone commerciale</span>
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6">
                    <h3 class="text-2xl font-bold text-white mb-6">Envoyez-nous un message</h3>
                    
                    <form class="space-y-6" method="POST" action="{{ route('offres.subscribe') }}">
                        @csrf
                        @if(session('success'))
                            <div class="p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                        @endif
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 mb-2 font-medium">Nom complet</label>
                                    <input type="text" 
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-black placeholder-blue-300 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all duration-300"
                                       placeholder="Votre nom">
                            </div>
                            <div>
                                <label class="block text-blue-200 mb-2 font-medium">Téléphone</label>
                                    <input type="tel" 
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-black placeholder-blue-300 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all duration-300"
                                       placeholder="+225 00 00 00 00">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 mb-2 font-medium">Email</label>
                            <input type="email" 
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-black placeholder-blue-300 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all duration-300"
                                   placeholder="votre@email.com">
                                name="email">
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 mb-2 font-medium">Pack intéressé</label>
                            <select name="pack" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-black focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all duration-300">
                                <option class="bg-gray-800">Sélectionnez un pack</option>
                                @foreach(['Pack00', 'Pack1 Classic', 'Pack2 Basique', 'Pack3 Premium', 'Pack4 Elite', 'Pack5 VIP'] as $pack)
                                <option class="bg-gray-800" value="{{ $pack }}">{{ $pack }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 mb-2 font-medium">Message</label>
                            <textarea rows="4" 
                                      class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-black placeholder-blue-300 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all duration-300 resize-none"
                                      placeholder="Décrivez votre projet..."></textarea>
                                      name="message"></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full py-4 px-6 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-xl hover:from-cyan-600 hover:to-blue-700 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-cyan-500/20 flex items-center justify-center gap-3 group">
                            <i class="fas fa-paper-plane"></i>
                            <span>Envoyer la demande</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero Swiper
        const heroSwiper = new Swiper('.heroSwiper', {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

        // Background hero image swiper (carousel)
        const bgSwiper = new Swiper('.heroBackgroundSwiper', {
            loop: true,
            speed: 1200,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            effect: 'slide'
        });
        
        // Packs Swiper (mobile)
        const packsSwiper = new Swiper('.packsSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 600,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' w-2 h-2 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></span>';
                },
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                }
            }
        });
        
        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observe all animated elements
        document.querySelectorAll('.group, .relative, [class*="animate-"]').forEach((el) => {
            observer.observe(el);
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
    
    // Custom cursor effect
    document.addEventListener('mousemove', function(e) {
        const cursor = document.querySelector('.cursor-follower');
        if(cursor) {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        }
    });
</script>
@endpush

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }
    
    /* Custom Animations */
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
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
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.4; }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out;
    }
    
    .animate-slideInRight {
        animation: slideInRight 0.8s ease-out;
    }
    
    .animate-slideInUp {
        animation: slideInUp 0.8s ease-out;
    }
    
    .animate-fadeIn {
        animation: fadeIn 1.2s ease-out;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .delay-300 {
        animation-delay: 300ms;
    }
    
    /* 3D Card Effects */
    .perspective-1000 {
        perspective: 1000px;
    }
    
    .preserve-3d {
        transform-style: preserve-3d;
    }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }
    
    ::-webkit-scrollbar-track {
        background: linear-gradient(to bottom, #f8fafc, #e2e8f0);
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #3b82f6, #06b6d4);
        border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #2563eb, #0891b2);
    }
    
    /* Selection Color */
    ::selection {
        background: rgba(6, 182, 212, 0.3);
        color: #fff;
    }
    
    /* Smooth transitions */
    * {
        transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .heroSwiper .text-7xl {
            font-size: 3.5rem;
        }
        
        .heroSwiper .text-5xl {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 640px) {
        .heroSwiper .text-7xl {
            font-size: 2.8rem;
        }
        
        .heroSwiper .text-5xl {
            font-size: 2rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
        }
    }

    /* Hero background carousel styles */
    .hero-bg .swiper-slide {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        filter: saturate(0.95) contrast(0.95);
    }

    .hero-bg-overlay {
        pointer-events: none;
    }
</style>
@endpush