<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255|unique:newsletter_subscriptions,email',
        ]);

        NewsletterSubscription::create($data);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Merci de votre inscription à notre newsletter!']);
        }

        return back()->with('success', 'Merci de votre inscription à notre newsletter!');
    }
}
