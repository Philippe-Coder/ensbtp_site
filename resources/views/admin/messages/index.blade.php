@extends('admin.layout')

@php
use Illuminate\Support\Str;
@endphp

@section('title','Demandes & Souscriptions')

@section('admin-content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">Demandes de services</h3>
        <div class="space-y-3">
            @forelse($services as $s)
                <div class="p-3 border rounded">
                    <div class="text-sm text-gray-600">{{ $s->created_at->format('Y-m-d H:i') }}</div>
                    <div class="font-medium">{{ $s->name ?? $s->full_name ?? '—' }}</div>
                    <div class="text-sm text-gray-700">{{ Str::limit($s->message ?? $s->description ?? '', 120) }}</div>
                </div>
            @empty
                <div class="text-sm text-gray-500">Aucune demande</div>
            @endforelse
        </div>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">Souscriptions aux offres</h3>
        <div class="space-y-3">
            @forelse($offres as $o)
                <div class="p-3 border rounded">
                    <div class="text-sm text-gray-600">{{ $o->created_at->format('Y-m-d H:i') }}</div>
                    <div class="font-medium">{{ $o->name ?? $o->full_name ?? ($o->email ?? '—') }}</div>
                    <div class="text-sm text-gray-700">Pack: {{ $o->pack ?? '—' }}</div>
                </div>
            @empty
                <div class="text-sm text-gray-500">Aucune souscription</div>
            @endforelse
        </div>
    </div>
</div>

<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">Accompagnements</h3>
        <div class="space-y-3">
            @forelse($accompagnements as $a)
                <div class="p-3 border rounded">
                    <div class="text-sm text-gray-600">{{ $a->created_at->format('Y-m-d H:i') }}</div>
                    <div class="font-medium">{{ $a->name ?? $a->full_name ?? '—' }}</div>
                    <div class="text-sm text-gray-700">{{ Str::limit($a->message ?? '', 120) }}</div>
                </div>
            @empty
                <div class="text-sm text-gray-500">Aucun accompagnement</div>
            @endforelse
        </div>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">Contacts</h3>
        <div class="space-y-3">
            @forelse($contacts as $c)
                <div class="p-3 border rounded">
                    <div class="text-sm text-gray-600">{{ $c->created_at->format('Y-m-d H:i') }}</div>
                    <div class="font-medium">{{ $c->name ?? $c->full_name ?? ($c->email ?? '—') }}</div>
                    <div class="text-sm text-gray-700">{{ Str::limit($c->message ?? '', 120) }}</div>
                </div>
            @empty
                <div class="text-sm text-gray-500">Aucun contact</div>
            @endforelse
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container py-12 mx-auto">
    <h1 class="text-2xl font-bold mb-6">Messages reçus</h1>

    <h2 class="text-xl font-semibold mt-4">Contacts</h2>
    @foreach($contacts as $c)
        <div class="p-3 bg-white rounded mb-2">
            <strong>{{ $c->name }}</strong> - {{ $c->email }} - {{ $c->phone }}
            <p class="mt-2">{{ $c->message }}</p>
            <small class="text-gray-500">{{ $c->created_at }}</small>
        </div>
    @endforeach

    <h2 class="text-xl font-semibold mt-6">Demandes de service</h2>
    @foreach($services as $s)
        <div class="p-3 bg-white rounded mb-2">
            <strong>{{ $s->name }}</strong> - {{ $s->email }} - {{ $s->phone }}
            <p class="mt-2">{{ $s->message }}</p>
            <small class="text-gray-500">{{ $s->created_at }}</small>
        </div>
    @endforeach

    <h2 class="text-xl font-semibold mt-6">Souscriptions offres</h2>
    @foreach($offres as $o)
        <div class="p-3 bg-white rounded mb-2">
            <strong>{{ $o->name }}</strong> - {{ $o->email }} - {{ $o->phone }}
            <p class="mt-2">Salaire: {{ $o->salary }} - {{ $o->message }}</p>
            <small class="text-gray-500">{{ $o->created_at }}</small>
        </div>
    @endforeach

    <h2 class="text-xl font-semibold mt-6">Accompagnements</h2>
    @foreach($accompagnements as $a)
        <div class="p-3 bg-white rounded mb-2">
            <strong>{{ $a->name }}</strong> - {{ $a->email }} - {{ $a->phone }}
            <p class="mt-2">{{ $a->message }}</p>
            <small class="text-gray-500">{{ $a->created_at }}</small>
        </div>
    @endforeach
</div>

@endsection
