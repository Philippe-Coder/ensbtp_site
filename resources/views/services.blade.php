@extends('layouts.app')

@section('content')

<!-- Hero Section Services -->
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-700 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-600 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        
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
                    Nos Services
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-blue-600">
                        d'Excellence
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-12 animate-fadeIn">
                    Découvrez notre gamme complète de services professionnels en construction, 
                    ingénierie et accompagnement de projets. Chaque solution est pensée pour 
                    répondre à vos besoins spécifiques.
                </p>

                <!-- CTA Button -->
                <div class="animate-slideInUp delay-300">
                    <a href="#demande" 
                       class="group relative inline-flex items-center gap-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-2xl shadow-blue-500/30 hover:shadow-blue-500/50 hover:-translate-y-1 transition-all duration-500">
                        <i class="fas fa-clipboard-list text-xl"></i>
                        <span>Demander un service</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50/20 to-white"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                    Expertise 
                    <span class="relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Multidisciplinaire</span>
                        <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Des solutions complètes pour tous vos projets, de la conception à la réalisation
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Bâtiment & Travaux Publics -->
                <div class="group relative perspective-1000 animate-slideInUp">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <!-- Service Header -->
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-hard-hat text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-building text-white mr-2"></i>
                                        <span class="text-white font-semibold">Expert</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Service Content -->
                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Bâtiment & Travaux Publics</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Routes & Assainissements', 'Pavages professionnels', 'Infrastructures urbaines', 'Travaux de génie civil'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-blue-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <!-- Action Button -->
                                <button onclick="openServiceRequest('Bâtiment & Travaux Publics')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-blue-50 to-cyan-50 text-blue-700 font-bold rounded-xl hover:from-blue-100 hover:to-cyan-100 transition-all duration-300 border border-blue-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Espaces Verts & Maintenance -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 100ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-green-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-green-600 to-emerald-700"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-tree text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-emerald-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-leaf text-white mr-2"></i>
                                        <span class="text-white font-semibold">Durabilité</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-green-100 to-emerald-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-green-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Espaces Verts & Maintenance</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Aménagement paysager', 'Entretien espaces verts', 'Maintenance préventive', 'Autres travaux spécialisés'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <button onclick="openServiceRequest('Espaces Verts & Maintenance')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-green-50 to-emerald-50 text-green-700 font-bold rounded-xl hover:from-green-100 hover:to-emerald-100 transition-all duration-300 border border-green-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Conseil & Topographie -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 200ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-purple-500/20 to-indigo-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-purple-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-indigo-700"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-map-marked-alt text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-indigo-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-compass text-white mr-2"></i>
                                        <span class="text-white font-semibold">Précision</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-purple-100 to-indigo-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Conseil & Topographie</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Conseils en construction', 'Études topographiques', 'Nivellement professionnel', 'Cartographie précise'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-purple-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <button onclick="openServiceRequest('Conseil & Topographie')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-purple-50 to-indigo-50 text-purple-700 font-bold rounded-xl hover:from-purple-100 hover:to-indigo-100 transition-all duration-300 border border-purple-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Architecture & Structure -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 300ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-amber-500/20 to-orange-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-amber-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-amber-600 to-orange-700"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-drafting-compass text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-orange-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-pencil-ruler text-white mr-2"></i>
                                        <span class="text-white font-semibold">Design</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-amber-100 to-orange-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-amber-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Architecture & Structure</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-amber-400 to-orange-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Conception architecturale', 'Design structural', 'Plans techniques', 'Bureau d\'études intégré'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-amber-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <button onclick="openServiceRequest('Architecture & Structure')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-amber-50 to-orange-50 text-amber-700 font-bold rounded-xl hover:from-amber-100 hover:to-orange-100 transition-all duration-300 border border-amber-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Études Géotechniques & Laboratoire -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 400ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-rose-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-rose-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-rose-600 to-pink-700"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-flask text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-pink-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-microscope text-white mr-2"></i>
                                        <span class="text-white font-semibold">Scientifique</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-rose-100 to-pink-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-rose-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Études & Laboratoire</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-rose-400 to-pink-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Études géotechniques', 'Analyses laboratoire', 'Contrôles qualité', 'Essais matériaux'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-rose-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <button onclick="openServiceRequest('Études & Laboratoire')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-rose-50 to-pink-50 text-rose-700 font-bold rounded-xl hover:from-rose-100 hover:to-pink-100 transition-all duration-300 border border-rose-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Suivi & Contrôle de Projets -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 500ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-teal-500/20 to-cyan-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-teal-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-teal-600 to-cyan-700"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-white text-8xl opacity-30 group-hover:scale-110 transition-transform duration-700"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-cyan-900/70 to-transparent p-6">
                                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                                        <i class="fas fa-clipboard-check text-white mr-2"></i>
                                        <span class="text-white font-semibold">Gestion</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-r from-teal-100 to-cyan-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-teal-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Suivi & Contrôle</h3>
                                        <div class="w-16 h-1 bg-gradient-to-r from-teal-400 to-cyan-400 rounded-full mb-4"></div>
                                    </div>
                                </div>
                                
                                <ul class="space-y-3 mb-8">
                                    @foreach(['Suivi de projets', 'Contrôle architectural', 'Gestion planning', 'Supervision travaux'] as $item)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-teal-400 text-xs mr-3"></i>
                                        <span class="text-gray-700">{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>

                                <button onclick="openServiceRequest('Suivi & Contrôle')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-gradient-to-r from-teal-50 to-cyan-50 text-teal-700 font-bold rounded-xl hover:from-teal-100 hover:to-cyan-100 transition-all duration-300 border border-teal-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Section for Service Request -->
<section id="demande" class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-full px-8 py-4 mb-8 shadow-xl shadow-blue-500/30">
                    <i class="fas fa-paper-plane text-white text-lg"></i>
                    <span class="font-bold text-white tracking-wider text-lg">DEMANDE DE SERVICE</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Demandez un 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                        Service
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Remplissez ce formulaire pour obtenir un devis gratuit ou discuter de votre projet
                </p>
            </div>

            <!-- Form -->
            <div class="bg-white rounded-2xl shadow-2xl border border-blue-100 p-8 md:p-12">
                <form id="serviceRequestForm" class="space-y-8">
                    <!-- Service Selection -->
                    <div>
                        <label class="block text-gray-800 font-bold mb-4 text-lg">
                            <i class="fas fa-cogs text-blue-500 mr-2"></i>
                            Service demandé
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach([
                                'Bâtiment & Travaux Publics',
                                'Espaces Verts & Maintenance',
                                'Conseil & Topographie',
                                'Architecture & Structure',
                                'Études & Laboratoire',
                                'Suivi & Contrôle'
                            ] as $service)
                            <div class="relative">
                                <input type="radio" name="service" id="service{{ $loop->index }}" value="{{ $service }}" 
                                       class="hidden peer" {{ $loop->first ? 'checked' : '' }}>
                                <label for="service{{ $loop->index }}" 
                                       class="flex items-center justify-between p-4 border-2 border-gray-200 rounded-xl cursor-pointer peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-blue-300 transition-all duration-300">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                            <i class="fas fa-check text-blue-600 opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></i>
                                        </div>
                                        <span class="font-medium text-gray-800">{{ $service }}</span>
                                    </div>
                                    <i class="fas fa-arrow-right text-blue-500 opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></i>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-gray-700 font-medium mb-3">Nom complet *</label>
                            <input type="text" name="name" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"
                                   placeholder="Votre nom et prénom">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-3">Téléphone *</label>
                            <input type="tel" name="phone" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"
                                   placeholder="+225 00 00 00 00">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-3">Email *</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"
                                   placeholder="votre@email.com">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-3">Entreprise (optionnel)</label>
                            <input type="text" name="company"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"
                                   placeholder="Nom de votre entreprise">
                        </div>
                    </div>

                    <!-- Project Details -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-3">Détails du projet *</label>
                        <textarea name="details" rows="4" required
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 resize-none"
                                  placeholder="Décrivez votre projet, vos besoins spécifiques, la localisation, le budget approximatif..."></textarea>
                    </div>

                    <!-- Timeline -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-3">Délai souhaité</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach(['Urgent (1-2 semaines)', 'Court terme (1 mois)', 'Moyen terme (3 mois)', 'Long terme (+3 mois)'] as $timeline)
                            <div class="relative">
                                <input type="radio" name="timeline" id="timeline{{ $loop->index }}" value="{{ $timeline }}" 
                                       class="hidden peer" {{ $loop->first ? 'checked' : '' }}>
                                <label for="timeline{{ $loop->index }}" 
                                       class="block p-4 border-2 border-gray-200 rounded-xl cursor-pointer text-center peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-blue-300 transition-all duration-300">
                                    <span class="text-sm font-medium text-gray-800">{{ $timeline }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit" 
                                class="group w-full py-4 px-6 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-blue-500/20 flex items-center justify-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            <span>Envoyer la demande</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                        </button>
                        <p class="text-center text-gray-500 text-sm mt-4">
                            <i class="fas fa-shield-alt text-blue-500 mr-1"></i>
                            Vos informations sont sécurisées et ne seront pas partagées
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
    function openServiceRequest(serviceName) {
        // Scroll to form
        document.getElementById('demande').scrollIntoView({ behavior: 'smooth' });
        
        // Set the service in form
        const serviceInput = document.querySelector(`input[value="${serviceName}"]`);
        if (serviceInput) {
            serviceInput.checked = true;
            
            // Add visual feedback
            const label = serviceInput.nextElementSibling;
            label.classList.add('ring-2', 'ring-blue-500');
            setTimeout(() => {
                label.classList.remove('ring-2', 'ring-blue-500');
            }, 2000);
        }
        
        // Focus on name field
        setTimeout(() => {
            document.querySelector('input[name="name"]').focus();
        }, 500);
    }
    
    document.getElementById('serviceRequestForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = `
            <i class="fas fa-spinner fa-spin"></i>
            <span>Envoi en cours...</span>
        `;
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Show success message
            submitBtn.innerHTML = `
                <i class="fas fa-check"></i>
                <span>Demande envoyée !</span>
            `;
            submitBtn.className = submitBtn.className.replace('from-blue-600 to-cyan-600', 'from-green-500 to-emerald-600');
            
            // Reset form
            setTimeout(() => {
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.className = submitBtn.className.replace('from-green-500 to-emerald-600', 'from-blue-600 to-cyan-600');
                submitBtn.disabled = false;
                
                // Show success modal
                alert('✅ Votre demande a été envoyée avec succès ! Nous vous contacterons dans les plus brefs délais.');
            }, 2000);
        }, 1500);
    });
    
    // FAQ toggle
    document.querySelectorAll('.group button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
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
    
    /* 3D Effects */
    .perspective-1000 {
        perspective: 1000px;
    }
    
    .preserve-3d {
        transform-style: preserve-3d;
    }
    
    /* Custom Checkbox Styling */
    input[type="radio"]:checked + label .fa-check {
        opacity: 1 !important;
    }
    
    /* Form Focus Effects */
    input:focus, textarea:focus, select:focus {
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .text-7xl {
            font-size: 3rem !important;
        }
        
        .text-6xl {
            font-size: 2.5rem !important;
        }
        
        .grid-cols-2 {
            grid-template-columns: 1fr;
        }
        
        .grid-cols-4 {
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
        
        .grid-cols-4 {
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
        background: linear-gradient(to bottom, #3b82f6, #06b6d4);
        border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #2563eb, #0891b2);
    }
</style>
@endpush