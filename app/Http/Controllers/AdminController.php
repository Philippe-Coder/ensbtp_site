<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\Post;
use App\Models\FormService;
use App\Models\FormOffre;
use App\Models\FormAccompagnement;
use App\Models\FormContact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $counts = [
            'realisations' => Realisation::count(),
            'posts' => Post::count(),
            'services_requests' => FormService::count(),
            'offre_subscriptions' => FormOffre::count(),
            'accompagnements' => FormAccompagnement::count(),
            'contacts' => FormContact::count(),
        ];

        return view('admin.dashboard', compact('counts'));
    }

    public function createRealisation()
    {
        return view('admin.realisations.create');
    }

    public function storeRealisation(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:realisations,slug',
            'description' => 'nullable|string',
        ]);

        Realisation::create($data);
        return redirect()->route('admin.dashboard')->with('success', 'Réalisation ajoutée');
    }

    public function createPost()
    {
        return view('admin.posts.create');
    }

    public function storePost(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'content' => 'nullable|string',
        ]);

        Post::create($data);
        return redirect()->route('admin.dashboard')->with('success', 'Article publié');
    }

    public function messages()
    {
        $services = FormService::latest()->take(50)->get();
        $offres = FormOffre::latest()->take(50)->get();
        $accompagnements = FormAccompagnement::latest()->take(50)->get();
        $contacts = FormContact::latest()->take(50)->get();

        return view('admin.messages.index', compact('services','offres','accompagnements','contacts'));
    }
}
