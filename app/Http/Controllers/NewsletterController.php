<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create_newsletter(Request $request)
    {
        $request->validate([
            'newsletter_mail' => ['required', 'string', 'email', 'max:255', 'unique:newsletters'],
        ]);

        $newsletter = new Newsletter;
        $newsletter->newsletter_mail = $request->newsletter_mail;
        $newsletter->save();
        return redirect()->route('home')
            ->with('succès', 'Inscription réussie.');
    }

    // public function show()
    // {
    //     $newsletter = Newsletter::orderBy('id', 'desc')->paginate(10);
    //     return view('adminHome', [
    //         'newsletter' => $newsletter
    //     ]);
    // }
}