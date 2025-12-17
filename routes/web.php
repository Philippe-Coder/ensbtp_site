<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\FormOffreController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\FormServiceController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\RealisationController as AdminRealisationController;
use App\Http\Controllers\Admin\OffreController as AdminOffreController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\AdminController;
use App\Models\Realisation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Provide a default set of services to the home view so the page
    // can render even if no Service model / DB records are available.
    $services = collect([
        (object) ['icon' => 'cogs', 'title' => 'Conception & Ingénierie', 'slug' => 'conception-ingenierie', 'excerpt' => "Études techniques et plans d'exécution sur-mesure."],
        (object) ['icon' => 'toolbox', 'title' => 'Construction Résidentielle', 'slug' => 'construction-residentielle', 'excerpt' => "Réalisation de logements durables et économes en énergie."],
        (object) ['icon' => 'building', 'title' => 'Construction Commerciale', 'slug' => 'construction-commerciale', 'excerpt' => "Bâtiments commerciaux, bureaux et aménagements professionnels."],
    ]);

    $realisations = Realisation::latest()->take(6)->get();

    return view('home', compact('services', 'realisations'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes Admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Réalisations
    Route::resource('realisations', RealisationController::class);
    
    // Articles
    Route::resource('posts', PostController::class);
    
    // Souscriptions
    Route::resource('offre_subscriptions', OffreSubscriptionController::class);
    
    // Messages
    Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    Route::get('/messages/{message}', [AdminController::class, 'showMessage'])->name('messages.show');
    
    // Services
    Route::resource('services', ServiceController::class);
    
    // Paramètres
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Public pages
Route::view('/about', 'about')->name('about');
// Name the services route as `services.index` to match blade links
Route::view('/services', 'services')->name('services.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact page
Route::view('/contact', 'contact')->name('contact');

// Contact form submission
Route::post('/contact', [FormContactController::class, 'store'])->name('contact.store');

// Service request form submission
Route::post('/service-request', [FormServiceController::class, 'store'])->name('service.store');

// Newsletter subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Offre form submission (from offre show page)
Route::post('/formulaire/offre', [FormOffreController::class, 'store'])->name('offre.form');

// Offres public
Route::get('/offres', [OffreController::class, 'index'])->name('offres.index');
Route::get('/offres/{slug}', [OffreController::class, 'show'])->name('offres.show');

// Subscribe to a pack / offre
Route::post('/offres/subscribe', [FormOffreController::class, 'subscribe'])->name('offre.subscribe');

// Realisations public
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations.index');
Route::get('/realisations/{slug}', [RealisationController::class, 'show'])->name('realisations.show');

// Admin realisations (protected)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('realisations', AdminRealisationController::class)->except(['show']);
    Route::resource('offres', AdminOffreController::class)->except(['show']);
    Route::resource('posts', AdminPostController::class)->except(['show']);
    // Admin dashboard and messages
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('messages', [AdminController::class, 'messages'])->name('messages');
});
