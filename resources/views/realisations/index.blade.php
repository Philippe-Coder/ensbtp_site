@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold mb-8">Réalisations</h1>

    @foreach($realisations as $realisation)
        <div class="mb-6 p-4 border rounded">
            <h2 class="text-xl font-bold">{{ $realisation->title }}</h2>
            <a href="/realisations/{{ $realisation->slug }}" class="text-blue-600">Voir plus</a>
        </div>
    @endforeach
</div>
@endsection
