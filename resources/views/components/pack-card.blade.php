@props(['pack'])

@php
    $isPopular = $pack['popular'] ?? false;
    $isFullWidth = $pack['fullWidth'] ?? false;
@endphp

<div class="{{ $isFullWidth ? 'w-full' : '' }}">
    <div class="relative group">
        @if($isPopular)
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 z-20">
            <div class="bg-gradient-to-r from-yellow-400 to-orange-400 text-white px-8 py-2 rounded-full font-bold shadow-xl shadow-yellow-500/30 animate-pulse">
                <i class="fas fa-star mr-2"></i> PLUS POPULAIRE
            </div>
        </div>
        @endif
        
        <div class="relative bg-white rounded-2xl shadow-xl border {{ $isPopular ? 'border-yellow-200' : 'border-gray-100' }} overflow-hidden hover:shadow-2xl transition-all duration-500 {{ $isPopular ? 'transform hover:-translate-y-2' : '' }} h-full">
            <!-- Pack Header -->
            <div class="relative h-48 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br {{ $pack['color'] }} opacity-40 backdrop-blur-sm"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-center">
                    <div class="w-20 h-20 rounded-full bg-white/30 flex items-center justify-center mb-4">
                        <i class="fas fa-gem text-black text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-2">{{ $pack['name'] }}</h3>
                    <p class="text-gray-700">{{ $pack['desc'] }}</p>
                </div>
                
                <!-- Price Tag -->
                <div class="absolute bottom-0 left-0 right-0 bg-white/60 backdrop-blur-sm py-3">
                    <div class="text-center">
                        <span class="text-3xl font-bold text-black">{{ $pack['price'] }}</span>
                        <span class="text-gray-600 text-sm block">Investissement</span>
                    </div>
                </div>
            </div>
            
            <!-- Pack Content -->
            <div class="p-8">
                <!-- Features -->
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-check-circle text-blue-500 mr-2"></i>
                        Caractéristiques incluses
                    </h4>
                    <div class="space-y-3">
                        @for($i = 0; $i < min($pack['features'], 5); $i++)
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r {{ $pack['color'] }} mr-3"></div>
                            <span class="text-gray-600">
                                @php
                                    $features = [
                                        'Accompagnement technique',
                                        'Plan architectural',
                                        'Suivi de projet',
                                        'Garantie qualité',
                                        'Support prioritaire',
                                        'Design personnalisé',
                                        'Optimisation budget',
                                        'Rapports mensuels',
                                        'Audit technique',
                                        'Accès VIP'
                                    ];
                                @endphp
                                {{ $features[$i] ?? 'Caractéristique premium' }}
                            </span>
                        </div>
                        @endfor
                        
                        @if($pack['features'] > 5)
                        <div class="pt-3 border-t border-gray-100">
                            <span class="text-blue-600 font-medium">
                                +{{ $pack['features'] - 5 }} autres avantages
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Action Button -->
                <a href="#contact" 
                   class="block w-full py-4 px-6 text-center font-bold rounded-xl transition-all duration-500 
                          {{ $isPopular 
                            ? 'bg-gradient-to-r from-yellow-500 to-orange-500 text-white hover:from-yellow-600 hover:to-orange-600 hover:shadow-xl hover:shadow-orange-500/30' 
                            : 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white hover:from-blue-600 hover:to-cyan-600 hover:shadow-xl hover:shadow-blue-500/30'
                          }} group">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-{{ $isPopular ? 'crown' : 'arrow-right' }} mr-3"></i>
                        <span>Souscrire maintenant</span>
                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                    </div>
                </a>
                
                <!-- Additional Info -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-500">
                        <i class="fas fa-clock mr-1"></i>
                        Réponse sous 24h • 
                        <i class="fas fa-shield-alt ml-2 mr-1"></i>
                        Garantie incluse
                    </p>
                </div>
            </div>
            
            <!-- Hover Effect -->
            <div class="absolute inset-0 border-2 border-transparent group-hover:border-{{ $isPopular ? 'yellow' : 'blue' }}-400 rounded-2xl transition-all duration-500 pointer-events-none"></div>
        </div>
    </div>
</div>
