@extends('layouts.app')

@section('content')

<!-- Hero Section Packs -->
<x-banner :images="['img6.jpg']">
    <div class="max-w-6xl mx-auto">
        <div class="text-center">
            <!-- Badge Elite -->
            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-lg rounded-full px-8 py-4 border border-white/20 shadow-2xl shadow-blue-900/30 mb-8 animate-slideInUp">
                <div class="w-3 h-3 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full animate-pulse"></div>
                <span class="font-semibold text-white text-lg tracking-wider">INVESTISSEZ DANS VOTRE AVENIR</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight animate-slideInUp">
                Nos Packs 
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-blue-400 to-indigo-600">
                    de Souscription
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-12 animate-fadeIn">
                Choisissez le pack qui correspond à vos ambitions et préparez sereinement votre avenir 
                avec nos solutions d'épargne et d'investissement adaptées.
            </p>
        </div>
    </div>
</x-banner>

<!-- Packs de Souscription -->
<section class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-full px-6 py-3 mb-6 border border-indigo-100 shadow-lg">
                    <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full"></div>
                    <span class="font-bold text-indigo-700 tracking-wider">NOS DIFFÉRENTS PACKS DE SOUSCRIPTION</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                    Nos Packs 
                    <span class="relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Salaires</span>
                        <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full"></span>
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Des solutions d'épargne adaptées à tous les revenus, pour construire votre avenir sereinement
                </p>
            </div>

            <!-- Packs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                @php
                    $packs = [
                        [
                            'name' => 'Pack 00',
                            'category' => 'Privés, Commerçants, Diaspora',
                            'description' => 'Solution sur mesure pour entrepreneurs et investisseurs',
                            'features' => ['Épargne personnalisée', 'Rendement optimisé', 'Accompagnement VIP'],
                            'color' => 'from-indigo-500 to-purple-600',
                            'icon' => 'fa-user-tie',
                            'price' => 'Sur mesure'
                        ],
                        [
                            'name' => 'Pack 01 Classic',
                            'category' => 'SMIG - 100 000 CFA',
                            'description' => 'Parfait pour débuter votre épargne construction',
                            'features' => ['Épargne mensuelle', 'Accompagnement de base', 'Garantie sécurité'],
                            'color' => 'from-blue-500 to-blue-600',
                            'icon' => 'fa-home',
                            'price' => '100 000 CFA'
                        ],
                        [
                            'name' => 'Pack 02 Basique Simple',
                            'category' => '100 001 - 200 000 CFA',
                            'description' => 'Pour accélérer votre projet de construction',
                            'features' => ['Épargne intermédiaire', 'Conseils personnalisés', 'Bonus fidélité'],
                            'color' => 'from-blue-500 to-blue-600',
                            'icon' => 'fa-building',
                            'price' => '150 000 CFA'
                        ],
                        [
                            'name' => 'Pack 03 Basique Basique',
                            'category' => '200 001 - 500 000 CFA',
                            'description' => 'Épargne confortable pour projet ambitieux',
                            'features' => ['Épargne avancée', 'Rendement garanti', 'Support prioritaire'],
                            'color' => 'from-blue-500 to-blue-600',
                            'icon' => 'fa-hammer',
                            'price' => '350 000 CFA',
                            'popular' => true
                        ],
                        [
                            'name' => 'Pack 04 Basique Fort',
                            'category' => '500 001 - 999 999 CFA',
                            'description' => 'Pour les projets immobiliers d\'envergure',
                            'features' => ['Épargne premium', 'Rendement élevé', 'Accompagnement exclusif'],
                            'color' => 'from-blue-500 to-blue-600',
                            'icon' => 'fa-gem',
                            'price' => '800 000 CFA'
                        ],
                        [
                            'name' => 'Pack 05 VIP',
                            'category' => '1 000 000 CFA et plus',
                            'description' => 'Solution d\'épargne et d\'investissement premium',
                            'features' => ['Épargne exclusive', 'Rendement maximum', 'Conseiller dédié'],
                            'color' => 'from-blue-600 to-blue-700',
                            'icon' => 'fa-crown',
                            'price' => '1M+ CFA'
                        ]
                    ];
                @endphp

                @foreach($packs as $pack)
                <div class="group relative animate-slideInUp" style="animation-delay: {{ $loop->index * 100 }}ms">
                    @if($pack['popular'] ?? false)
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 z-20">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                            <i class="fas fa-star mr-1"></i> POPULAIRE
                        </div>
                    </div>
                    @endif
                    
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 group-hover:-translate-y-2 h-full">
                        <!-- Pack Header -->
                        <div class="relative h-40 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br {{ $pack['color'] }}"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas {{ $pack['icon'] }} text-white/30 text-8xl"></i>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/40 to-transparent p-6">
                                <h3 class="text-2xl font-bold text-white mb-1">{{ $pack['name'] }}</h3>
                                <p class="text-white/80 text-sm">{{ $pack['category'] }}</p>
                            </div>
                        </div>

                        <!-- Pack Content -->
                        <div class="p-6">
                            <!-- Description -->
                            <p class="text-gray-600 mb-6">{{ $pack['description'] }}</p>
                            
                            <!-- Features -->
                            <div class="mb-8">
                                <h4 class="text-sm font-semibold text-gray-500 mb-3 uppercase tracking-wider">INCLUS</h4>
                                <ul class="space-y-3">
                                    @foreach($pack['features'] as $feature)
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 rounded-full bg-gradient-to-r {{ $pack['color'] }} mr-3"></div>
                                        <span class="text-gray-700">{{ $feature }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Price & CTA -->
                            <div class="border-t border-gray-100 pt-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <div class="text-sm text-gray-500">À partir de</div>
                                        <div class="text-2xl font-bold text-gray-900">{{ $pack['price'] }}</div>
                                    </div>
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-r {{ $pack['color'] }} flex items-center justify-center">
                                        <i class="fas {{ $pack['icon'] }} text-white"></i>
                                    </div>
                                </div>
                                
                                <button onclick="openSubscription('{{ $pack['name'] }}')"
                                        class="w-full py-3 px-4 bg-gradient-to-r {{ $pack['color'] }} text-white font-bold rounded-xl hover:opacity-90 transition-all duration-300 flex items-center justify-center gap-2">
                                    <i class="fas fa-file-signature"></i>
                                    Souscrire
                                </button>
                            </div>
                        </div>
                        
                        <!-- Hover Effect -->
                        <div class="absolute inset-0 border-2 border-transparent group-hover:border-indigo-400 rounded-2xl transition-all duration-500 pointer-events-none"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<!-- PEUT SOUSCRIRE À NOS PACKS -->
<section class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-blue-50 rounded-full px-6 py-3 mb-6 border border-blue-100 shadow-lg">
                    <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full"></div>
                    <span class="font-bold text-blue-700 tracking-wider">ÉLIGIBILITÉ AUX PACKS</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                    Qui Peut
                    <span class="relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-600">Souscrire</span>
                        <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-blue-400 rounded-full"></span>
                    </span>
                </h2>
            </div>

            <!-- Eligibility Box -->
            <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden p-8 md:p-12">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent pointer-events-none"></div>
                <div class="relative z-10">
                    <p class="text-xl text-gray-700 leading-relaxed mb-8">
                        Peuvent souscrire à nos packs pour préparer son avenir et ses vieux jours de retraite :
                    </p>
                    
                    <div class="space-y-6">
                        <!-- Criterion 1 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-blue-100 flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600 text-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Toute personne physique</h3>
                                <p class="text-gray-600">Bien portante, exerçant une activité génératrice de revenu, qu'elle soit fonctionnaire ou non.</p>
                            </div>
                        </div>

                        <!-- Criterion 2 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-blue-100 flex items-center justify-center">
                                    <i class="fas fa-building text-blue-600 text-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Toute personne morale</h3>
                                <p class="text-gray-600">Légalement constituée, souhaitant investir dans des projets immobiliers ou préparer sa trésorerie.</p>
                            </div>
                        </div>

                        <!-- Criterion 3 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-blue-100 flex items-center justify-center">
                                    <i class="fas fa-globe text-blue-600 text-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Diaspora & Entrepreneurs</h3>
                                <p class="text-gray-600">Commerçants, entrepreneurs, privés et membres de la diaspora avec des solutions sur mesure.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Objective -->
                    <div class="mt-12 p-6 bg-gradient-to-r from-blue-50 to-blue-50 rounded-xl border border-blue-100">
                        <h4 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-target text-blue-600 mr-3"></i>
                            Objectif
                        </h4>
                        <p class="text-gray-700">
                            Nos packs sont conçus pour aider chacun à préparer sereinement son avenir, construire un patrimoine durable et sécuriser ses vieux jours de retraite grâce à une épargne intelligente et bien accompagnée.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Public Cible -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Illustration -->
                <div class="lg:w-1/2 relative animate-slideInLeft">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-3xl blur-3xl"></div>
                        <div class="relative bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl overflow-hidden border border-indigo-100 p-8">
                            <div class="aspect-video bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl relative overflow-hidden">
                                <!-- People Illustration -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="grid grid-cols-3 gap-4">
                                        @foreach(range(1, 3) as $i)
                                        <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                            <i class="fas fa-user text-white text-2xl"></i>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-900/70 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold">Tout le monde peut souscrire !</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:w-1/2 animate-slideInRight">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-full px-6 py-3 mb-6 border border-purple-100 shadow-lg">
                        <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full"></div>
                        <span class="font-bold text-purple-700 tracking-wider">QUI PEUT SOUSCRIRE ?</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                        Pour 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                            Qui ?
                        </span>
                    </h2>

                    <div class="space-y-8">
                        <!-- Point 1 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-green-100 to-emerald-100 flex items-center justify-center">
                                    <i class="fas fa-home text-green-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Préparer son avenir et sa retraite</h3>
                                <p class="text-gray-600">
                                    Pour ceux qui souhaitent construire un patrimoine durable et sécuriser 
                                    financièrement leurs vieux jours avec une épargne intelligente.
                                </p>
                            </div>
                        </div>

                        <!-- Point 2 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center">
                                    <i class="fas fa-user-check text-blue-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Toute personne physique</h3>
                                <p class="text-gray-600">
                                    Fonctionnaires ou non, bien portants, exerçant une activité génératrice 
                                    de revenus. Nous accueillons tous ceux qui souhaitent investir dans leur avenir.
                                </p>
                            </div>
                        </div>

                        <!-- Point 3 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-purple-100 to-indigo-100 flex items-center justify-center">
                                    <i class="fas fa-building text-purple-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Personnes morales</h3>
                                <p class="text-gray-600">
                                    Toutes les entreprises légalement constituées peuvent souscrire à nos packs 
                                    pour optimiser leur trésorerie et investir dans des projets immobiliers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="mt-12 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl border border-indigo-100">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Avantages supplémentaires
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach([
                                'Flexibilité des paiements',
                                'Accompagnement personnalisé',
                                'Garantie de sécurité',
                                'Rendements compétitifs'
                            ] as $benefit)
                            <div class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-700">{{ $benefit }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Souscription -->
<section class="py-20 bg-gradient-to-br from-indigo-900 via-purple-800 to-blue-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-br from-indigo-600/10 to-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Prêt à 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">
                    souscrire ?
                </span>
            </h2>
            
            <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                Rejoignez nos nombreux clients satisfaits et commencez dès aujourd'hui à construire 
                votre avenir financier en toute sérénité.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#contact" 
                   class="group relative px-10 py-5 bg-white text-indigo-700 rounded-2xl font-bold text-lg shadow-2xl shadow-indigo-900/30 hover:shadow-indigo-900/50 hover:-translate-y-1 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-comments"></i>
                    <span>Demander un conseil</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
                
                <button onclick="openSubscription('Conseil')"
                        class="group relative px-10 py-5 bg-transparent border-2 border-white/30 text-white rounded-2xl font-bold text-lg backdrop-blur-sm hover:bg-white/10 hover:border-white/50 hover:shadow-2xl hover:shadow-white/20 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-file-contract"></i>
                    <span>Souscrire en ligne</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </button>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-16 pt-8 border-t border-white/10">
                <div class="grid grid-cols-3 gap-8">
                    @foreach([
                        ['value' => '500+', 'label' => 'Clients Satisfaits'],
                        ['value' => '98%', 'label' => 'Taux de Satisfaction'],
                        ['value' => '24h', 'label' => 'Traitement Dossiers']
                    ] as $trust)
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white mb-2">{{ $trust['value'] }}</div>
                        <div class="text-sm text-blue-200">{{ $trust['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Souscription -->
<div id="subscriptionModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full animate-slideInUp">
        <!-- Modal Header -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900">Souscription</h3>
                    <p id="selectedPack" class="text-gray-600 text-sm mt-1"></p>
                </div>
                <button onclick="closeSubscription()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Modal Form -->
        <form id="subscriptionForm" method="POST" action="{{ route('offre.subscribe') }}" class="p-6 space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nom complet *</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300"
                       placeholder="Votre nom et prénom">
            </div>
            
            <div>
                <label class="block text-gray-700 font-medium mb-2">Téléphone *</label>
                <input type="tel" name="phone" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300"
                       placeholder="+288 90 10 88 03">
            </div>
            
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email *</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300"
                       placeholder="ens.btp@yahoo.com">
            </div>
            
            <div>
                <label class="block text-gray-700 font-medium mb-2">Revenu mensuel estimé</label>
                <select name="salary_range" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300">
                    <option value="">Moins de 100 000 CFA</option>
                    <option value="100-200k">100 000 - 200 000 CFA</option>
                    <option value="200-500k">200 000 - 500 000 CFA</option>
                    <option value="500k-1m">500 000 - 1 000 000 CFA</option>
                    <option value="1m+">Plus de 1 000 000 CFA</option>
                </select>
            </div>
            
            <div class="pt-4">
                <button type="submit" 
                        class="w-full py-4 px-6 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold rounded-xl hover:opacity-90 transition-all duration-300 flex items-center justify-center gap-3">
                    <i class="fas fa-paper-plane"></i>
                    <span>Envoyer la demande</span>
                </button>
                <p class="text-center text-gray-500 text-sm mt-4">
                    <i class="fas fa-lock text-indigo-500 mr-1"></i>
                    Soumission sécurisée
                </p>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    function openSubscription(packName) {
        const modal = document.getElementById('subscriptionModal');
        const selectedPack = document.getElementById('selectedPack');
        
        selectedPack.textContent = packName === 'Conseil' 
            ? 'Demande de conseil personnalisé' 
            : `Pack sélectionné : ${packName}`;
        
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        
        // Focus on first input
        setTimeout(() => {
            modal.querySelector('input[type="text"]')?.focus();
        }, 300);
    }
    
    function closeSubscription() {
        const modal = document.getElementById('subscriptionModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
    
    // Close modal on ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeSubscription();
    });
    
    // Close modal on background click
    document.getElementById('subscriptionModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('subscriptionModal')) {
            closeSubscription();
        }
    });
    
    // Form submission with AJAX
    document.getElementById('subscriptionForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        const form = this;
        
        // Show loading state
        submitBtn.innerHTML = `
            <i class="fas fa-spinner fa-spin"></i>
            <span>Traitement en cours...</span>
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
                    <span>Demande envoyée !</span>
                `;
                submitBtn.className = submitBtn.className.replace('from-indigo-600 to-purple-600', 'from-green-500 to-emerald-600');
                
                // Reset and close
                setTimeout(() => {
                    form.reset();
                    closeSubscription();
                    submitBtn.innerHTML = originalText;
                    submitBtn.className = submitBtn.className.replace('from-green-500 to-emerald-600', 'from-indigo-600 to-purple-600');
                    submitBtn.disabled = false;
                    
                    // Show success toast
                    alert('✅ Votre demande de souscription a été envoyée avec succès ! Notre équipe vous contactera sous 24h.');
                }, 1500);
            } else {
                alert('Erreur: ' + (data.message || 'Une erreur est survenue'));
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Erreur de connexion. Veuillez réessayer.');
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
    
    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out;
    }
    
    .animate-slideInRight {
        animation: slideInRight 0.8s ease-out;
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
    
    /* Custom animations */
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
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .text-7xl {
            font-size: 3rem !important;
        }
        
        .text-6xl {
            font-size: 2.5rem !important;
        }
        
        .grid-cols-3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 640px) {
        .text-7xl {
            font-size: 2.5rem !important;
        }
        
        .text-6xl {
            font-size: 2rem !important;
        }
        
        .grid-cols-3,
        .grid-cols-2 {
            grid-template-columns: 1fr;
        }
    }
    
    /* Modal Animation */
    #subscriptionModal {
        backdrop-filter: blur(4px);
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
        background: linear-gradient(to bottom, #6366f1, #8b5cf6);
        border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #4f46e5, #7c3aed);
    }
</style>
@endpush