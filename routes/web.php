<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Provide a default set of services to the home view so the page
    // can render even if no Service model / DB records are available.
    $services = collect([
        (object) ['icon' => 'cogs', 'title' => 'Conception & Ingénierie', 'slug' => 'conception-ingenierie', 'excerpt' => "Études techniques et plans d'exécution sur-mesure."],
        (object) ['icon' => 'toolbox', 'title' => 'Construction Résidentielle', 'slug' => 'construction-residentielle', 'excerpt' => "Réalisation de logements durables et économes en énergie."],
        (object) ['icon' => 'building', 'title' => 'Construction Commerciale', 'slug' => 'construction-commerciale', 'excerpt' => "Bâtiments commerciaux, bureaux et aménagements professionnels."],
    ]);

    return view('home', compact('services'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
