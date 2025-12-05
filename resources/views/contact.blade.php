@extends('layouts.app')

@section('content')
<section class="py-16 bg-gradient-to-br from-gray-900 via-blue-950 to-blue-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl font-bold">Contactez-Nous</h1>
            <p class="text-blue-200 mt-4">Remplissez le formulaire ci-dessous et notre équipe vous répondra rapidement.</p>
        </div>

        <div class="bg-white/5 p-8 rounded-xl max-w-3xl mx-auto">
            <form method="POST" action="{{ route('offres.subscribe') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input name="name" class="p-3 rounded bg-white/10 border border-white/20 text-black" placeholder="Nom complet" required>
                    <input name="email" type="email" class="p-3 rounded bg-white/10 border border-white/20 text-black" placeholder="Email" required>
                </div>
                <div class="mt-4">
                    <input name="phone" class="p-3 rounded bg-white/10 border border-white/20 text-black" placeholder="Téléphone">
                </div>
                <div class="mt-4">
                    <select name="pack" class="p-3 rounded bg-white/10 border border-white/20 text-black w-full">
                        <option>Choisir un pack (optionnel)</option>
                        @foreach(['Pack00','Pack1 Classic','Pack2 Basique','Pack3 Premium','Pack4 Elite','Pack5 VIP'] as $p)
                            <option value="{{ $p }}">{{ $p }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <textarea name="message" rows="5" class="p-3 rounded bg-white/10 border border-white/20 text-black w-full" placeholder="Votre message"></textarea>
                </div>
                <div class="mt-6 text-right">
                    <button class="px-6 py-3 bg-cyan-500 text-white rounded">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
