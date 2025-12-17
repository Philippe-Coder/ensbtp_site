@extends('layouts.app')

@section('content')

<!-- Hero Section About -->
<x-banner :images="['img6.jpg']">
    <div class="max-w-6xl mx-auto">
        <div class="text-center">

            <!-- Main Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight animate-slideInUp">
                Construire l'Excellence,
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-400 to-blue-600">
                    Forger la Confiance
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-lg text-blue-100 leading-relaxed max-w-3xl mx-auto mb-12 animate-fadeIn">
                Découvrez l'histoire, la mission et les valeurs qui font de ENSBTP SARLU 
                votre partenaire de confiance pour tous vos projets de construction.
            </p>

        </div>
    </div>
</x-banner>

<!-- Notre Histoire -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image/Illustration -->
                <div class="lg:w-1/2 relative animate-slideInLeft">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-3xl"></div>
                        <div class="relative bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-2xl overflow-hidden border border-blue-100">
                            <div class="aspect-video bg-gradient-to-br from-blue-500 to-cyan-500 relative overflow-hidden">
                                <!-- Building Illustration -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="relative w-64 h-64">
                                        <!-- Building Structure -->
                                        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-40 bg-white/90 rounded-t-lg"></div>
                                        <div class="absolute bottom-40 left-1/2 transform -translate-x-1/2 w-32 h-20 bg-white/80 rounded-t-md"></div>
                                        <div class="absolute bottom-60 left-1/2 transform -translate-x-1/2 w-24 h-16 bg-white/70 rounded-t-sm"></div>
                                        
                                        <!-- Construction Crane -->
                                        <div class="absolute bottom-0 left-1/4 w-1 h-48 bg-gray-300"></div>
                                        <div class="absolute bottom-48 left-1/4 w-32 h-1 bg-gray-300 transform -translate-x-1/2"></div>
                                    </div>
                                </div>
                                
                                <!-- Overlay Text -->
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900/70 to-transparent p-8">
                                    <h3 class="text-white text-2xl font-bold">Depuis 2008</h3>
                                    <p class="text-blue-200">Bâtissons ensemble l'avenir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:w-1/2 animate-slideInRight">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full px-6 py-3 mb-6 border border-blue-100 shadow-lg">
                        <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full"></div>
                        <span class="font-bold text-blue-700 tracking-wider">NOTRE HISTOIRE</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                        Une Histoire de
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                            Passion & Innovation
                        </span>
                    </h2>

                    <div class="space-y-6">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Fondée en 2008, <span class="font-semibold text-blue-700">ENSBTP SARLU</span> est née d'une vision simple mais ambitieuse : 
                            démocratiser l'accès à la propriété immobilière de qualité en Côte d'Ivoire et dans la sous-région.
                        </p>
                        
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Depuis plus de 15 ans, nous avons évolué d'une petite entreprise familiale à un acteur majeur 
                            du secteur de la construction, tout en conservant nos valeurs fondamentales d'intégrité, 
                            de qualité et d'engagement client.
                        </p>
                        
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Notre parcours est jalonné de réussites, d'innovations et surtout, de relations durables 
                            avec nos clients qui nous font confiance projet après projet.
                        </p>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Mission & Vision -->
<section class="py-20 bg-gradient-to-b from-white to-blue-50/30 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-.895-3-2-3-3 .895-3 2 .895 3 2 3zm63 31c1.657 0 3-1.343 3-3s-.895-3-2-3-3 .895-3 2 .895 3 2 3zM34 90c1.657 0 3-1.343 3-3s-.895-3-2-3-3 .895-3 2 .895 3 2 3zm56-76c1.657 0 3-1.343 3-3s-.895-3-2-3-3 .895-3 2 .895 3 2 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z" fill="%230ea5e9" fill-opacity="0.4" fill-rule="evenodd"/%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-full px-8 py-4 mb-8 shadow-xl shadow-blue-500/30">
                <i class="fas fa-bullseye text-white text-lg"></i>
                <span class="font-bold text-white tracking-wider text-lg">NOTRE RAISON D'ÊTRE</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Mission & 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                    Vision
                </span>
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Les piliers fondamentaux qui guident chacune de nos actions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Mission Card -->
            <div class="group relative perspective-1000 animate-slideInLeft">
                <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                        <div class="p-8 md:p-10">
                            <div class="flex items-center mb-8">
                                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center mr-6">
                                    <i class="fas fa-flag text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">Notre Mission</h3>
                                    <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mt-2"></div>
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    <span class="font-semibold text-blue-700">Transformer les rêves immobiliers en réalités durables</span> 
                                    en offrant des solutions de construction innovantes, financièrement accessibles 
                                    et techniquement excellentes.
                                </p>
                                
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center">
                                                <i class="fas fa-check text-blue-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Rendre la propriété immobilière accessible à tous
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center">
                                                <i class="fas fa-check text-blue-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Garantir des constructions de qualité supérieure
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center">
                                                <i class="fas fa-check text-blue-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Accompagner nos clients de A à Z
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="group relative perspective-1000 animate-slideInRight">
                <div class="relative transform preserve-3d group-hover:-rotate-y-5 transition-all duration-700">
                    <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl border border-cyan-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                        <div class="p-8 md:p-10">
                            <div class="flex items-center mb-8">
                                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-6">
                                    <i class="fas fa-eye text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">Notre Vision</h3>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full mt-2"></div>
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    <span class="font-semibold text-cyan-700">Devenir le leader incontesté de la construction intelligente et durable</span> 
                                    en Afrique de l'Ouest, en redéfinissant les standards du secteur 
                                    par l'innovation et l'excellence.
                                </p>
                                
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                                <i class="fas fa-check text-cyan-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Être le référent en construction durable
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                                <i class="fas fa-check text-cyan-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Digitaliser l'expérience client
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                                <i class="fas fa-check text-cyan-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <p class="ml-3 text-gray-600">
                                            Implanter 10 nouvelles agences d'ici 2027
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Valeurs -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full px-6 py-3 mb-6 border border-blue-100 shadow-lg">
                    <div class="w-2 h-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full"></div>
                    <span class="font-bold text-blue-700 tracking-wider">NOTRE ADN</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                    Les Valeurs qui
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                        Nous Animent
                    </span>
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Des principes intangibles qui guident chacune de nos décisions et actions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['icon' => 'fa-handshake', 'title' => 'Intégrité', 'desc' => 'Nous honorons nos engagements avec transparence et honnêteté totale', 'color' => 'from-blue-500 to-blue-600'],
                    ['icon' => 'fa-star', 'title' => 'Excellence', 'desc' => 'Nous visons la perfection dans chaque détail de nos réalisations', 'color' => 'from-blue-600 to-cyan-500'],
                    ['icon' => 'fa-users', 'title' => 'Collaboration', 'desc' => 'Nous croyons au pouvoir du travail d\'équipe et du partenariat', 'color' => 'from-cyan-500 to-blue-500'],
                    ['icon' => 'fa-lightbulb', 'title' => 'Innovation', 'desc' => 'Nous adoptons les meilleures technologies pour construire l\'avenir', 'color' => 'from-blue-600 to-blue-700']
                ] as $value)
                <div class="group animate-slideInUp">
                    <div class="relative h-full">
                        <div class="absolute -inset-4 bg-gradient-to-r {{ $value['color'] }} rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-500 h-full flex flex-col items-center text-center group-hover:-translate-y-2">
                            <!-- Icon -->
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br {{ $value['color'] }} flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                                <i class="fas {{ $value['icon'] }} text-white text-2xl"></i>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $value['title'] }}</h3>
                            
                            <!-- Description -->
                            <p class="text-lg text-gray-600 flex-grow">{{ $value['desc'] }}</p>
                            
                            <!-- Divider -->
                            <div class="w-16 h-1 bg-gradient-to-r {{ $value['color'] }} rounded-full mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-1/3 h-1/3 bg-gradient-to-br from-cyan-500/10 to-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-br from-blue-600/10 to-cyan-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">
                Prêt à concrétiser 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">
                    votre projet ?
                </span>
            </h2>
            
            <p class="text-lg text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                Rejoignez les centaines de clients satisfaits qui nous font confiance pour transformer leurs visions en réalité.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#contact" 
                   class="group relative px-10 py-5 bg-white text-blue-700 rounded-2xl font-bold text-lg shadow-2xl shadow-blue-900/30 hover:shadow-blue-900/50 hover:-translate-y-1 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-phone-alt"></i>
                    <span>Nous contacter</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
                
                <a href="{{ route('services.index') }}" 
                   class="group relative px-10 py-5 bg-transparent border-2 border-white/30 text-white rounded-2xl font-bold text-lg backdrop-blur-sm hover:bg-white/10 hover:border-white/50 hover:shadow-2xl hover:shadow-white/20 transition-all duration-500 flex items-center justify-center gap-3">
                    <i class="fas fa-cogs"></i>
                    <span>Nos Services</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
            </div>
            
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        document.querySelectorAll('.animate-slideInLeft, .animate-slideInRight, .animate-slideInUp, .animate-fadeIn').forEach((el) => {
            observer.observe(el);
        });
    });
</script>
@endpush

@push('styles')
<style>
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
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    /* 3D Effects */
    .perspective-1000 {
        perspective: 1000px;
    }
    
    .preserve-3d {
        transform-style: preserve-3d;
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
    }
    
    @media (max-width: 640px) {
        .text-7xl {
            font-size: 2.5rem !important;
        }
        
        .text-6xl {
            font-size: 2rem !important;
        }
        
        .grid-cols-4 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endpush