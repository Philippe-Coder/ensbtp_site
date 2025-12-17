@extends('layouts.app')

@section('content')

<!-- Hero Section Services -->
<x-banner :images="['img7.jpg']">
    <div class="max-w-6xl mx-auto">
        <div class="text-center">

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight animate-slideInUp">
                Nos Services
                <span class="block text-white">
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
                   class="group relative inline-flex items-center gap-4 bg-blue-600 text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-2xl shadow-blue-600/40 hover:shadow-blue-700/60 hover:bg-blue-700 hover:-translate-y-1 transition-all duration-500">
                    <i class="fas fa-clipboard-list text-xl"></i>
                    <span>Demander un service</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
            </div>

        </div>
    </div>
</x-banner>

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
                        <span class="text-blue-600">Multidisciplinaire</span>
                        <span class="absolute -bottom-2 left-0 w-full h-1 bg-blue-500 rounded-full"></span>
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Des solutions complètes pour tous vos projets, de la conception à la réalisation
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1: Bâtiment & Travaux Publics -->
                <div class="group relative perspective-1000 animate-slideInUp">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <!-- Service Header with Image -->
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('images/banners/img6.jpg') }}" alt="Bâtiment & Travaux Publics" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-hard-hat text-white text-6xl opacity-40"></i>
                                </div>
                            </div>

                            <!-- Service Content -->
                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-hard-hat text-blue-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Bâtiment & Travaux Publics</h3>
                                        <div class="w-16 h-1 bg-blue-400 rounded-full"></div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 mb-6">Services complets en construction et travaux publics, de la conception à la réalisation avec expertise reconnue.</p>

                                <!-- Action Button -->
                                <button onclick="openServiceRequest('Bâtiment & Travaux Publics')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 border border-blue-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Conseils & Conception -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 100ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('images/banners/img7.jpg') }}" alt="Conseils & Conception" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-drafting-compass text-white text-6xl opacity-40"></i>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-drafting-compass text-blue-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Conseils & Conception</h3>
                                        <div class="w-16 h-1 bg-blue-400 rounded-full"></div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 mb-6">Accompagnement stratégique et conception innovante pour transformer vos projets en réalité pérenne.</p>

                                <button onclick="openServiceRequest('Conseils & Conception')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 border border-blue-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Suivi de Projets -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 200ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('images/banners/img8.jpg') }}" alt="Suivi de Projets" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-tasks text-white text-6xl opacity-40"></i>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-tasks text-blue-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Suivi de Projets</h3>
                                        <div class="w-16 h-1 bg-blue-400 rounded-full"></div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 mb-6">Pilotage rigoureux et suivi méthodique pour assurer la qualité et la conformité de vos projets.</p>

                                <button onclick="openServiceRequest('Suivi de Projets')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 border border-blue-100">
                                    <span>Demander ce service</span>
                                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Réalisation -->
                <div class="group relative perspective-1000 animate-slideInUp" style="animation-delay: 300ms">
                    <div class="relative transform preserve-3d group-hover:rotate-y-5 transition-all duration-700">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative bg-white rounded-2xl shadow-2xl border border-blue-100 overflow-hidden hover:shadow-3xl transition-all duration-500 h-full">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('images/banners/img5.jpg') }}" alt="Réalisation" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-hammer text-white text-6xl opacity-40"></i>
                                </div>
                            </div>

                            <div class="p-8">
                                <div class="flex items-start mb-6">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-hammer text-blue-600 text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Réalisation</h3>
                                        <div class="w-16 h-1 bg-blue-400 rounded-full"></div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 mb-6">Exécution exemplaire de vos projets avec respect des normes, délais et budget pour votre satisfaction.</p>

                                <button onclick="openServiceRequest('Réalisation')"
                                        class="group w-full inline-flex items-center justify-center py-3 px-6 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 border border-blue-100">
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
                <div class="inline-flex items-center gap-2 bg-blue-600 rounded-full px-8 py-4 mb-8 shadow-xl shadow-blue-600/40">
                    <i class="fas fa-paper-plane text-white text-lg"></i>
                    <span class="font-bold text-white tracking-wider text-lg">DEMANDE DE SERVICE</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Demandez un 
                    <span class="text-blue-600">
                        Service
                    </span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Remplissez ce formulaire pour obtenir un devis gratuit ou discuter de votre projet
                </p>
            </div>

            <!-- Form -->
            <div class="bg-white rounded-2xl shadow-2xl border border-blue-100 p-8 md:p-12">
                <form id="serviceRequestForm" method="POST" action="{{ route('service.store') }}" class="space-y-8">
                    @csrf
                    <!-- Service Selection -->
                    <div>
                        <label class="block text-gray-800 font-bold mb-4 text-lg">
                            <i class="fas fa-cogs text-blue-500 mr-2"></i>
                            Service demandé
                        </label>
                        <select name="service"
                                id="serviceSelect"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                            <option value="">Sélectionnez un service</option>
                            <option value="Bâtiment & Travaux Publics">Bâtiment & Travaux Publics</option>
                            <option value="Conseils & Conception">Conseils & Conception</option>
                            <option value="Suivi de Projets">Suivi de Projets</option>
                            <option value="Réalisation">Réalisation</option>
                        </select>
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
                                   placeholder="+288 90 10 88 03">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-3">Email *</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300"
                                   placeholder="ens.btp@yahoo.com">
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
                        <select name="timeline" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                            <option value="">Sélectionnez un délai (optionnel)</option>
                            <option value="Urgent (1-2 semaines)">Urgent (1-2 semaines)</option>
                            <option value="Court terme (1 mois)">Court terme (1 mois)</option>
                            <option value="Moyen terme (3 mois)">Moyen terme (3 mois)</option>
                            <option value="Long terme (+3 mois)">Long terme (+3 mois)</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit" 
                                class="group w-full py-4 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-blue-500/20 flex items-center justify-center gap-3">
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

        // Set the service in the select field
        const select = document.getElementById('serviceSelect');
        if (select) {
            select.value = serviceName;

            // Small visual feedback
            select.classList.add('ring-2', 'ring-blue-500');
            setTimeout(() => {
                select.classList.remove('ring-2', 'ring-blue-500');
            }, 1500);
        }

        // Focus on name field
        setTimeout(() => {
            const nameInput = document.querySelector('input[name="name"]');
            if (nameInput) {
                nameInput.focus();
            }
        }, 500);
    }
    
    document.getElementById('serviceRequestForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const form = this;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = `
            <i class="fas fa-spinner fa-spin"></i>
            <span>Envoi en cours...</span>
        `;
        submitBtn.disabled = true;
        
        // Submit form via AJAX
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Show success message
            submitBtn.innerHTML = `
                <i class="fas fa-check"></i>
                <span>Demande envoyée !</span>
            `;
            submitBtn.className = submitBtn.className.replace('from-blue-600 to-cyan-600', 'from-green-500 to-emerald-600');
            
            // Reset form
            setTimeout(() => {
                form.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.className = submitBtn.className.replace('from-green-500 to-emerald-600', 'from-blue-600 to-cyan-600');
                submitBtn.disabled = false;
                
                // Show success modal
                alert('✅ ' + (data.message || 'Votre demande a été envoyée avec succès ! Nous vous contacterons dans les plus brefs délais.'));
            }, 2000);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('❌ Une erreur est survenue. Veuillez réessayer.');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
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