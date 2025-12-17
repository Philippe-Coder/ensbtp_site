@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('admin-content')
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Tableau de bord</h1>
        <p class="text-gray-600">Bienvenue dans votre espace d'administration</p>
    </div>

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

    <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Derniers messages reçus</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-envelope text-blue-500 mr-2"></i>
                    Contacts
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500 border-b">
                                <th class="py-2 pr-2">Nom</th>
                                <th class="py-2 pr-2">Email</th>
                                <th class="py-2 pr-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentContacts as $contact)
                                <tr class="border-b last:border-0">
                                    <td class="py-2 pr-2 text-gray-800">{{ $contact->name }}</td>
                                    <td class="py-2 pr-2 text-gray-600">{{ $contact->email }}</td>
                                    <td class="py-2 pr-2 text-gray-500">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-3 text-gray-500 italic">Aucun message de contact pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-file-invoice-dollar text-blue-500 mr-2"></i>
                    Demandes de services / devis
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500 border-b">
                                <th class="py-2 pr-2">Nom</th>
                                <th class="py-2 pr-2">Email</th>
                                <th class="py-2 pr-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentServices as $service)
                                <tr class="border-b last:border-0">
                                    <td class="py-2 pr-2 text-gray-800">{{ $service->name }}</td>
                                    <td class="py-2 pr-2 text-gray-600">{{ $service->email }}</td>
                                    <td class="py-2 pr-2 text-gray-500">{{ $service->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-3 text-gray-500 italic">Aucune demande de service pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center mt-4 lg:mt-0">
                    <i class="fas fa-file-signature text-blue-500 mr-2"></i>
                    Souscriptions aux offres
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500 border-b">
                                <th class="py-2 pr-2">Nom</th>
                                <th class="py-2 pr-2">Email</th>
                                <th class="py-2 pr-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentOffres as $offre)
                                <tr class="border-b last:border-0">
                                    <td class="py-2 pr-2 text-gray-800">{{ $offre->name ?? $offre->full_name ?? '—' }}</td>
                                    <td class="py-2 pr-2 text-gray-600">{{ $offre->email ?? '—' }}</td>
                                    <td class="py-2 pr-2 text-gray-500">{{ $offre->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-3 text-gray-500 italic">Aucune souscription pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center mt-4 lg:mt-0">
                    <i class="fas fa-hands-helping text-blue-500 mr-2"></i>
                    Demandes d'accompagnement
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500 border-b">
                                <th class="py-2 pr-2">Nom</th>
                                <th class="py-2 pr-2">Email</th>
                                <th class="py-2 pr-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentAccompagnements as $acc)
                                <tr class="border-b last:border-0">
                                    <td class="py-2 pr-2 text-gray-800">{{ $acc->name ?? '—' }}</td>
                                    <td class="py-2 pr-2 text-gray-600">{{ $acc->email ?? '—' }}</td>
                                    <td class="py-2 pr-2 text-gray-500">{{ $acc->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-3 text-gray-500 italic">Aucune demande d'accompagnement pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection