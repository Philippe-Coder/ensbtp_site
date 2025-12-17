@extends('layouts.app')

@section('content')
<!-- Hero banner for Contact -->
<x-banner :images="['img8.jpg']">
	<div class="relative max-w-3xl mx-auto text-center">
		<h1 class="text-5xl md:text-7xl font-bold text-blue-900">Contactez-Nous</h1>
		<p class="text-xl text-blue-900 mt-4">Remplissez le formulaire ci-dessous et notre équipe vous répondra rapidement.</p>
	</div>
</x-banner>

<section class="py-16 bg-gradient-to-b from-white to-blue-50/30">
	<div class="container mx-auto px-4">
		<div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
			<!-- Formulaire de contact -->
			<div class="bg-white rounded-2xl shadow-2xl border border-blue-100 p-8 md:p-10">
				<form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
					@csrf
					<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
						<input name="name" class="p-3 rounded-xl bg-white border border-gray-300 text-gray-900 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Nom complet" required>
						<input name="email" type="email" class="p-3 rounded-xl bg-white border border-gray-300 text-gray-900 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Email" required>
					</div>
					<div>
						<input name="phone" class="w-full p-3 rounded-xl bg-white border border-gray-300 text-gray-900 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Téléphone">
					</div>
					<div>
						<textarea name="message" rows="5" class="w-full p-3 rounded-xl bg-white border border-gray-300 text-gray-900 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Votre message"></textarea>
					</div>
					<div class="mt-6 text-right">
						<button class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300">Envoyer</button>
					</div>
				</form>
			</div>

			<!-- Carte : Google Maps + infos de contact -->
			<div class="space-y-6">
				<div class="overflow-hidden rounded-2xl shadow-xl border border-blue-100 h-64 md:h-72">
					<iframe
						class="w-full h-full border-0"
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9788899999997!2d1.215!3d6.137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2sENSBTP!5e0!3m2!1sfr!2sTG!4v1700000000000">
					</iframe>
				</div>

				<div class="bg-white rounded-2xl shadow-lg border border-blue-100 p-6 text-gray-800 space-y-3">
					<h2 class="text-lg font-bold text-blue-900">Nos coordonnées</h2>
					<p class="text-sm flex items-center gap-2">
						<i class="fas fa-map-marker-alt text-blue-600"></i>
						<span>Lomé, Togo</span>
					</p>
					<p class="text-sm flex items-center gap-2">
						<i class="fas fa-phone text-blue-600"></i>
						<span>+228 90 10 88 03</span>
					</p>
					<p class="text-sm flex items-center gap-2">
						<i class="fas fa-phone text-blue-600"></i>
						<span>+228 90 07 97 91</span>
					</p>
					<p class="text-sm flex items-center gap-2">
						<i class="fas fa-envelope text-blue-600"></i>
						<span>ens.btp@yahoo.com</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
