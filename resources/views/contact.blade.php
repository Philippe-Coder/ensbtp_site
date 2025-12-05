@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold mb-6">Contactez-nous</h1>

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Nom" class="border p-2 block mb-3 w-full" required>
        <input type="email" name="email" placeholder="Email" class="border p-2 block mb-3 w-full" required>
        <input type="text" name="telephone" placeholder="Téléphone" class="border p-2 block mb-3 w-full">

        <textarea name="message" placeholder="Votre message" class="border p-2 block mb-3 w-full" rows="5" required></textarea>

        <button class="bg-blue-600 text-white py-2 px-4 rounded">Envoyer</button>
    </form>
</div>
@endsection
