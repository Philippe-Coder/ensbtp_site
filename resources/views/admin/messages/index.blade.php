@extends('admin.layout')

@php
use Illuminate\Support\Str;
@endphp

@section('title','Demandes & Souscriptions')

@section('admin-content')
<div class="min-h-screen bg-gray-50 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Tous les Messages</h1>

    <!-- Contacts -->
    <div class="bg-white rounded-lg shadow-md mb-8 overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-cyan-600 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Contacts ({{ count($contacts) }})</h2>
        </div>
        <div class="p-6">
            @forelse($contacts as $c)
                <div class="border-l-4 border-blue-600 p-4 mb-4 bg-blue-50 rounded">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $c->name ?? '—' }}</h3>
                            <p class="text-sm text-gray-600">{{ $c->email }}</p>
                            @if($c->phone)
                                <p class="text-sm text-gray-600">{{ $c->phone }}</p>
                            @endif
                        </div>
                        <span class="text-xs bg-blue-200 text-blue-800 px-3 py-1 rounded-full">{{ $c->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <p class="text-gray-700 mt-3">{{ $c->message ?? '(aucun message)' }}</p>
                </div>
            @empty
                <p class="text-gray-500 text-center py-8">Aucun contact reçu</p>
            @endforelse
        </div>
    </div>

    <!-- Souscriptions aux offres -->
    <div class="bg-white rounded-lg shadow-md mb-8 overflow-hidden">
        <div class="bg-gradient-to-r from-cyan-600 to-blue-600 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Souscriptions aux Offres ({{ count($offres) }})</h2>
        </div>
        <div class="p-6">
            @forelse($offres as $o)
                <div class="border-l-4 border-cyan-600 p-4 mb-4 bg-cyan-50 rounded">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $o->name ?? '—' }}</h3>
                            <p class="text-sm text-gray-600">{{ $o->email }}</p>
                            @if($o->phone)
                                <p class="text-sm text-gray-600">{{ $o->phone }}</p>
                            @endif
                        </div>
                        <span class="text-xs bg-cyan-200 text-cyan-800 px-3 py-1 rounded-full">{{ $o->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="mt-3 space-y-1">
                        @if($o->pack)
                            <p class="text-sm text-gray-700"><strong>Pack:</strong> {{ $o->pack }}</p>
                        @endif
                        @if($o->message)
                            <p class="text-gray-700">{{ $o->message }}</p>
                        @endif
                    </div>
                </div>
            @empty
                <p class="text-gray-500 text-center py-8">Aucune souscription reçue</p>
            @endforelse
        </div>
    </div>

    <!-- Demandes de services -->
    <div class="bg-white rounded-lg shadow-md mb-8 overflow-hidden">
        <div class="bg-gradient-to-r from-green-600 to-teal-600 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Demandes de Services ({{ count($services) }})</h2>
        </div>
        <div class="p-6">
            @forelse($services as $s)
                <div class="border-l-4 border-green-600 p-4 mb-4 bg-green-50 rounded">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $s->name ?? '—' }}</h3>
                            <p class="text-sm text-gray-600">{{ $s->email }}</p>
                            @if($s->phone)
                                <p class="text-sm text-gray-600">{{ $s->phone }}</p>
                            @endif
                        </div>
                        <span class="text-xs bg-green-200 text-green-800 px-3 py-1 rounded-full">{{ $s->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <p class="text-gray-700 mt-3">{{ $s->message ?? '(aucun message)' }}</p>
                </div>
            @empty
                <p class="text-gray-500 text-center py-8">Aucune demande de service reçue</p>
            @endforelse
        </div>
    </div>

    <!-- Accompagnements -->
    <div class="bg-white rounded-lg shadow-md mb-8 overflow-hidden">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Accompagnements ({{ count($accompagnements) }})</h2>
        </div>
        <div class="p-6">
            @forelse($accompagnements as $a)
                <div class="border-l-4 border-purple-600 p-4 mb-4 bg-purple-50 rounded">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $a->name ?? '—' }}</h3>
                            <p class="text-sm text-gray-600">{{ $a->email }}</p>
                            @if($a->phone)
                                <p class="text-sm text-gray-600">{{ $a->phone }}</p>
                            @endif
                        </div>
                        <span class="text-xs bg-purple-200 text-purple-800 px-3 py-1 rounded-full">{{ $a->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <p class="text-gray-700 mt-3">{{ $a->message ?? '(aucun message)' }}</p>
                </div>
            @empty
                <p class="text-gray-500 text-center py-8">Aucun accompagnement reçu</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
