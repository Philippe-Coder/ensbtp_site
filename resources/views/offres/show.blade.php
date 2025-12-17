@extends('layouts.app')

@section('content')
<section class="py-16 bg-gradient-to-b from-white to-blue-50/30">
	<div class="container mx-auto px-4">
		<div class="max-w-5xl mx-auto">
			<h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-4">{{ $offre->title }}</h1>
			<p class="text-lg text-gray-700 leading-relaxed mb-6">{{ $offre->description }}</p>
			@if($offre->price)
				<div class="text-2xl font-bold text-blue-700 mb-8">Prix : {{ $offre->price }} CFA</div>
			@endif

			<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
				<div class="bg-white p-6 rounded-2xl shadow border border-blue-100">
					<h3 class="text-2xl font-semibold text-blue-900 mb-4">Détails de l'offre</h3>
					<p class="text-gray-700 mb-4">{{ $offre->description }}</p>
					<ul class="mt-6 list-disc pl-6 text-gray-700">
						<li>Accompagnement complet pour la construction</li>
						<li>Plans architecturaux et structurels</li>
						<li>Suivi de chantier et contrôle qualité</li>
						<li>Options de tontine et prêt</li>
					</ul>
				</div>

				<div class="bg-white p-6 rounded-2xl shadow border border-blue-100">
					<h3 class="text-2xl font-semibold text-blue-900 mb-4">Souscrire à l'offre</h3>

					@if(session('success'))
						<div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
					@endif

					<form method="POST" action="{{ url('/formulaire/offre') }}">
						@csrf
						<input type="hidden" name="offre_id" value="{{ $offre->id }}">

						<div class="mb-3">
							<label class="block text-sm font-medium text-gray-700">Nom complet</label>
							<input name="name" required class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Votre nom">
						</div>

						<div class="mb-3">
							<label class="block text-sm font-medium text-gray-700">Email</label>
							<input type="email" name="email" class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="votre@email.com">
						</div>

						<div class="mb-3">
							<label class="block text-sm font-medium text-gray-700">Téléphone</label>
							<input name="phone" class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="+288 90 10 88 03">
						</div>

						<div class="mb-3">
							<label class="block text-sm font-medium text-gray-700">Pack</label>
							<select name="pack" class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
								<option value="">-- Sélectionnez un pack --</option>
								@php
									use App\Models\Pack;
									$packs = Pack::all();
								@endphp
								@if($packs->count())
									@foreach($packs as $p)
										<option value="{{ $p->code }}">{{ $p->name }} — {{ $p->min_salary ? number_format($p->min_salary) : '' }}{{ $p->max_salary ? ' - '.number_format($p->max_salary) : '' }}</option>
									@endforeach
								@else
									<option value="Pack00">Pack00 : Privés / Commerçants / Diaspora</option>
									<option value="Pack1">Pack1 : SMIG - jusqu'à 100 000 CFA</option>
									<option value="Pack2">Pack2 : 100 001 - 200 000 CFA</option>
									<option value="Pack3">Pack3 : 200 001 - 500 001 CFA</option>
									<option value="Pack4">Pack4 : 600 000 - 999 999 CFA</option>
									<option value="Pack5">Pack5 : 1 000 000 CFA et plus</option>
								@endif
							</select>
						</div>

						<div class="mb-3">
							<label class="block text-sm font-medium text-gray-700">Salaire approximatif (optionnel)</label>
							<input name="salary" type="number" class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="ex: 150000">
						</div>

						<div class="mb-4">
							<label class="block text-sm font-medium text-gray-700">Message</label>
							<textarea name="message" rows="4" class="w-full mt-1 border rounded-xl px-3 py-2 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Dites-nous en plus sur votre projet..."></textarea>
						</div>

						<div>
							<button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition-all duration-300">Souscrire / Demander</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
