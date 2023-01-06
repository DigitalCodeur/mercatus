<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function category_search($category)
    {

        $annonces = Annonce::where('category', '=', $category)->orderBy('id', 'desc')->paginate(20);

        return view('annonces.annonce_search', [
            'annonces' => $annonces,
            'category' => $category
        ]);
    }

    public function search(Request $request)
    {

        $annonces = Annonce::where('title', 'like', '%' . request('search') . '%')->orderBy('id', 'desc')->paginate(20);
        $category = request('search');

        return view('annonces.annonce_search', [
            'annonces' => $annonces,
            'category' => $category
        ]);
    }
}
