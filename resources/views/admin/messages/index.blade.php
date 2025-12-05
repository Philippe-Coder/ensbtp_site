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
