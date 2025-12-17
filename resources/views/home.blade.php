@extends('layouts.app')

@section('content')

<!-- Hero Section as reusable banner -->
<x-banner :images="['img1.jpg','img2.jpg','img3.jpg','img4.jpg','img5.jpg']" :showControls="true">
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#services" class="flex flex-col items-center text-white/60 hover:text-white transition-colors duration-300">
            <span class="text-sm mb-2">Explorer</span>
            <i class="fas fa-chevron-down text-xl"></i>
        </a>
    </div>

    <!-- Content Section (appears on top of carousel) -->
    <div class="max-w-6xl mx-auto">
        <div class="text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2 space-y-8">
                <!-- Badge d'élite -->
                <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-lg rounded-full px-8 py-4 border border-white/20 shadow-2xl shadow-blue-900/30 animate-slideInLeft">
                    <div class="w-3 h-3 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full animate-ping"></div>
                    <span class="font-semibold text-white text-base md:text-lg tracking-wider">SOLUTIONS DE CONSTRUCTION EXPERTES</span>
                </div>

                <!-- Titre principal -->
                <h1 class="text-4xl md:text-6xl font-bold leading-tight animate-slideInUp">
                    <span class="block text-white mb-4">Construire</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-blue-600">
                        L'Avenir Ensemble
                    </span>
                </h1>

                <!-- Sous-titre -->
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed max-w-2xl animate-fadeIn">
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
                <div class="grid grid-cols-3 gap-4 pt-8 border-t border-white/10 text-sm">
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
</x-banner>

<!-- Services Premium Section -->
<section id="services" class="py-16 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50/30 to-white"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-100 to-blue-50 rounded-full px-6 py-3 mb-6 border border-blue-200 shadow-lg">
                <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                <span class="font-bold text-blue-700 tracking-wider">NOS DOMAINES D'EXPERTISE</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                Services 
                <span class="relative">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Premium</span>
                    <span class="absolute -bottom-2 left-0 w-full h-1 bg-blue-600 rounded-full"></span>
                </span>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                Des solutions complètes et innovantes pour tous vos projets de construction, 
                de la conception à la réalisation.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $serviceImages = [
                    ['title' => 'Bâtiment & Travaux Publics', 'desc' => 'Routes, assainissement, pavages, espaces verts et maintenance de maison', 'icon' => 'hard-hat', 'image' => 'img6.jpg'],
                    ['title' => 'Conseils & Conception', 'desc' => 'Construction, topographie, conception architecturale & structurale, études géothermiques, laboratoire', 'icon' => 'drafting-compass', 'image' => 'img7.jpg'],
                    ['title' => 'Suivi de Projets', 'desc' => 'Contrôle architecturale et structurale de vos projets en temps réel', 'icon' => 'tasks', 'image' => 'img8.jpg'],
                    ['title' => 'Réalisation', 'desc' => 'Réalisation de bâtiments privés et publics conformes aux normes', 'icon' => 'hammer', 'image' => 'img5.jpg'],
                ];
            @endphp
            @foreach($serviceImages as $service)
            <div class="group perspective-1000">
                <div class="relative transform preserve-3d group-hover:rotate-y-10 transition-all duration-700">
                    <div class="absolute -inset-4 bg-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500">
                        <!-- Service Header with Image -->
                        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-600 to-blue-500">
                            <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover opacity-80" />
                            <div class="absolute inset-0 bg-blue-600/40"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-{{ $service['icon'] }} text-white text-5xl transform group-hover:scale-110 transition-transform duration-700 drop-shadow-lg"></i>
                            </div>
                            <!-- Badge -->
                            <div class="absolute top-4 right-4 bg-blue-600 backdrop-blur-sm rounded-full px-4 py-2">
                                <span class="text-white text-sm font-semibold">Expert</span>
                            </div>
                        </div>

                        <!-- Service Content -->
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mr-3">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $service['title'] }}</h3>
                                    <div class="w-12 h-1 bg-blue-600 rounded-full mb-2"></div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                {{ $service['desc'] }}
                            </p>
                            
                            <!-- Features -->
                            <ul class="space-y-2 mb-6">
                                @foreach(['Solution sur mesure', 'Expertise certifiée', 'Support dédié'] as $feature)
                                <li class="flex items-center text-sm">
                                    <i class="fas fa-circle text-blue-600 text-xs mr-2"></i>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>

                            <!-- Action Button -->
                            <a href="#contact" 
                               class="group/btn relative inline-flex items-center justify-center w-full py-3 px-4 bg-blue-50 text-blue-700 font-bold text-sm rounded-xl hover:bg-blue-100 transition-all duration-300 border border-blue-200">
                                <span>Découvrir</span>
                                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform duration-300 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Réalisations récentes -->
<section id="realisations" class="py-20 bg-gradient-to-b from-blue-50/40 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 bg-blue-100 rounded-full px-6 py-3 mb-4 border border-blue-200">
                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                    <span class="font-bold text-blue-700 tracking-wider">NOS RÉALISATIONS RÉCENTES</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Découvrez Nos Projets</h2>
                <p class="text-xl text-gray-600">Un aperçu des chantiers réalisés par ENSBTP SARLU. Chaque projet reflète notre exigence de qualité et de durabilité.</p>
            </div>

            @if(isset($realisations) && $realisations->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
                @foreach($realisations as $real)
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative h-56 overflow-hidden">
                        @if(is_array($real->media) && count($real->media))
                            <img src="{{ $real->media[0] }}" alt="{{ $real->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @elseif($real->image)
                            <img src="{{ $real->image }}" alt="{{ $real->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                                <i class="fas fa-building text-white/60 text-5xl"></i>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/15 backdrop-blur-sm">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ optional($real->created_at)->format('d/m/Y') }}
                            </span>
                            @if(!empty($real->category))
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-600/80 text-xs font-semibold uppercase tracking-wide">
                                    {{ $real->category }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-700 transition-colors duration-300">
                            {{ $real->title }}
                        </h3>
                        @if($real->excerpt)
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $real->excerpt }}</p>
                        @endif

                        <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                            <a href="{{ route('realisations.show', $real->slug) }}" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-800">
                                <span>Voir les détails</span>
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('realisations.index') }}" class="inline-flex items-center px-8 py-3 rounded-full bg-blue-600 text-white font-semibold text-sm hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all duration-300">
                    <span>Voir plus de réalisations</span>
                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>
            @else
            <div class="text-center py-12">
                <p class="text-gray-500">Les réalisations seront bientôt disponibles.</p>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Packs Section avec design cartes premium -->
<section id="packs" class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-18">
            <div class="inline-flex items-center gap-2 bg-blue-100 rounded-full px-8 py-4 mb-8 shadow-xl border border-blue-200">
                <i class="fas fa-crown text-blue-600 text-lg"></i>
                <span class="font-bold text-blue-700 tracking-wider text-lg">CHOIX DE PACKS EXCLUSIFS</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Packs 
                <span class="relative">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Sur Mesure</span>
                    <span class="absolute -bottom-2 left-0 w-full h-1 bg-blue-600 rounded-full"></span>
                </span>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                Choisissez le pack qui correspond parfaitement à votre budget et à vos ambitions
            </p>
        </div>

        <!-- Packs Grid - 3 Columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $packs = [
                    ['name' => 'Pack 00', 'desc' => 'Privés, commerçants, diaspora', 'price' => 'Sur mesure', 'icon' => 'star', 'color' => 'blue-900', 'features' => ['Consultation personnalisée', 'Plan sur mesure', 'Suivi complet', 'Support premium']],
                    ['name' => 'Pack 01 Classic', 'desc' => 'SMIG jusqu\'à 100 000 CFA', 'price' => '100K CFA', 'icon' => 'home', 'color' => 'blue-500', 'features' => ['Consultation', 'Plan basique', 'Support standard']],
                    ['name' => 'Pack 02 Basique Simple', 'desc' => '100 001 - 200 000 CFA', 'price' => '200K CFA', 'icon' => 'building', 'color' => 'blue-600', 'features' => ['Consultation', 'Plan détaillé', 'Suivi de projet', 'Support']],
                    ['name' => 'Pack 03 Basique Basique', 'desc' => '200 001 - 500 000 CFA', 'price' => '500K CFA', 'icon' => 'hammer', 'color' => 'blue-700', 'features' => ['Consultation complète', 'Plan personnalisé', 'Suivi détaillé', 'Support 24/7'], 'popular' => true],
                    ['name' => 'Pack 04 Basique Fort', 'desc' => '500 001 - 999 999 CFA', 'price' => '850K CFA', 'icon' => 'gem', 'color' => 'blue-800', 'features' => ['Consultation experte', 'Plan premium', 'Gestion complète', 'Support VIP', 'Révisions']],
                    ['name' => 'Pack 05 VIP', 'desc' => '1 000 000 CFA et plus', 'price' => '1M+ CFA', 'icon' => 'crown', 'color' => 'blue-900', 'features' => ['Consultation exclusive', 'Plan ultra-personnalisé', 'Gestion VIP', 'Support 24/7/365', 'Révisions illimitées', 'Bonus inclus']],
                ];
            @endphp
            @foreach($packs as $pack)
            <div class="group relative">
                @if($pack['popular'] ?? false)
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 z-20">
                        <span class="bg-blue-600 text-white px-6 py-1 rounded-full text-sm font-bold shadow-lg">Populaire</span>
                    </div>
                @endif
                <div class="h-full bg-white rounded-2xl shadow-xl border {{ $pack['popular'] ?? false ? 'border-blue-400 ring-2 ring-blue-400' : 'border-gray-100' }} overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Header avec icône et couleur -->
                    <div class="h-32 bg-gradient-to-br from-{{ $pack['color'] }} to-{{ $pack['color'] }} opacity-90 flex items-center justify-center relative">
                        <i class="fas fa-{{ $pack['icon'] }} text-white text-5xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $pack['name'] }}</h3>
                        <p class="text-blue-600 text-sm font-semibold mb-4">{{ $pack['desc'] }}</p>
                        
                        <div class="my-6 border-t border-b border-gray-200 py-4">
                            <div class="text-4xl font-bold text-blue-600 mb-1">{{ $pack['price'] }}</div>
                            <p class="text-gray-500 text-sm">Adapté à votre projet</p>
                        </div>
                        
                        <!-- Features -->
                        <ul class="space-y-3 mb-8">
                            @foreach($pack['features'] as $feature)
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-blue-600 font-bold mr-3"></i>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <!-- CTA Button -->
                        <a href="#contact" 
                           class="block w-full py-3 px-6 bg-blue-600 text-white font-bold rounded-xl text-center hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all duration-300">
                            Choisir ce pack
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pack Personnalisé - Full Width -->
        <div class="mt-12 bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 text-center">
            <h3 class="text-3xl font-bold text-gray-900 mb-3">Pack Personnalisé</h3>
            <p class="text-gray-700 text-lg mb-6">Vous avez un projet unique ? Nous créons des solutions sur mesure adaptées à vos besoins spécifiques.</p>
            <a href="#contact" class="inline-block py-3 px-8 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg">
                Demander un devis personnalisé
            </a>
        </div>
    </div>
</section>

<!-- Section Demande de Devis Gratuit -->
<section id="devis" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl border border-gray-100 p-8 md:p-10">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-6 py-2 mb-4 border border-blue-100">
                    <i class="fas fa-file-invoice-dollar text-blue-600"></i>
                    <span class="font-semibold text-blue-700 text-sm uppercase tracking-wide">Demande de devis gratuit</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Obtenez une estimation pour votre projet</h2>
                <p class="text-base md:text-lg text-gray-600">Remplissez ce formulaire avec les informations principales de votre projet. Notre équipe vous recontactera rapidement avec une proposition adaptée.</p>
            </div>

            <form method="POST" action="{{ route('service.store') }}" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                        <input type="text" name="name" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Votre nom complet">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                        <input type="tel" name="phone"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Votre numéro de téléphone">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="vous@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type de projet</label>
                        <select name="service" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Sélectionnez un type de projet</option>
                            <option value="Construction résidentielle">Construction résidentielle</option>
                            <option value="Construction commerciale">Construction commerciale</option>
                            <option value="Rénovation">Rénovation</option>
                            <option value="Travaux publics">Travaux publics</option>
                            <option value="Études et conception">Études et conception</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Budget estimatif (facultatif)</label>
                        <input type="text" name="company"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Ex : 10 000 000 CFA">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Délai souhaité</label>
                        <input type="text" name="timeline"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Ex : 6 mois, 1 an...">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Détails du projet</label>
                    <textarea name="details" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-y"
                              placeholder="Décrivez brièvement votre projet, le terrain, la localisation, le type de bâtiment souhaité, etc."></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-4 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2"></i>
                        <span>Envoyer ma demande de devis</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Contact Section avec formulaire moderne -->
<section id="contact" class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0 opacity-10">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-blue-900 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-blue-900 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 bg-white/20 backdrop-blur-lg rounded-full px-8 py-4 mb-8 border border-white/30 shadow-2xl">
                    <i class="fas fa-comment-dots text-white text-xl"></i>
                    <span class="font-bold text-white text-base">PRÊT À COMMENCER ?</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Contactez-Nous
                    <span class="block text-blue-100 text-xl md:text-2xl">
                        Dès Maintenant
                    </span>
                </h2>
                <p class="text-lg text-blue-100 leading-relaxed max-w-2xl mx-auto">
                    Prenez contact avec notre équipe d'experts pour discuter de votre projet
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <!-- Info Card -->
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 p-6 hover:bg-white/20 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-phone-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white mb-1">Téléphone</h3>
                                <p class="text-blue-100 text-sm">Disponible 24/7 pour vos urgences</p>
                            </div>
                        </div>
                        <a href="tel:+28890108803" class="text-xl font-bold text-white hover:text-blue-200 transition-colors duration-300">
                            +288 90 10 88 03/ 90 0797 91
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 p-6 hover:bg-white/20 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-envelope text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white mb-1">Email</h3>
                                <p class="text-blue-100 text-sm">Réponse sous 24h maximum</p>
                            </div>
                        </div>
                        <a href="mailto:ens.btp@yahoo.com" class="text-lg font-bold text-white hover:text-blue-200 transition-colors duration-300">
                            ens.btp@yahoo.com
                        </a>
                    </div>

                    <!-- Adresse Card -->
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 p-6 hover:bg-white/20 transition-all duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white mb-1">Adresse</h3>
                                <p class="text-blue-100 text-sm">Rendez-vous sur site possible</p>
                            </div>
                        </div>
                        <p class="text-base text-white">
                            Lomé, Togo<br>
                            <span class="text-blue-100">Agoè Assiyéyé derrière Total MINAMADOU 2</span>
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 p-8">
                    <h3 class="text-2xl font-bold text-white mb-8">Envoyez-nous un message</h3>
                    
                    <form class="space-y-6" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        @if(session('success'))
                            <div class="p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                        @endif
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-100 mb-2 font-medium">Nom complet</label>
                                <input type="text" name="name"
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-white focus:ring-2 focus:ring-white/20 transition-all duration-300"
                                   placeholder="Votre nom" required>
                            </div>
                            <div>
                                <label class="block text-blue-100 mb-2 font-medium">Téléphone</label>
                                <input type="tel" name="phone"
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-white focus:ring-2 focus:ring-white/20 transition-all duration-300"
                                   placeholder="+288 90 10 88 03">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-blue-100 mb-2 font-medium">Email</label>
                            <input type="email" name="email"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-white focus:ring-2 focus:ring-white/20 transition-all duration-300"
                                   placeholder="ens.btp@yahoo.com" required>
                        </div>
                        
                        <div>
                            <label class="block text-blue-100 mb-2 font-medium">Pack intéressé</label>
                            <select name="pack" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white focus:outline-none focus:border-white focus:ring-2 focus:ring-white/20 transition-all duration-300">
                                <option class="bg-blue-600">Sélectionnez un pack</option>
                                @foreach(['Pack Classic', 'Pack Standard', 'Pack Premium', 'Pack Elite'] as $pack)
                                <option class="bg-blue-600" value="{{ $pack }}">{{ $pack }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-blue-100 mb-2 font-medium">Message</label>
                            <textarea rows="4" name="message"
                                      class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:border-white focus:ring-2 focus:ring-white/20 transition-all duration-300 resize-none"
                                      placeholder="Décrivez votre projet..."></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full py-4 px-6 bg-white text-blue-600 font-bold rounded-xl hover:bg-blue-50 transition-all duration-500 shadow-lg hover:shadow-xl flex items-center justify-center gap-3 group">
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