<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function home()
    {
        $annonces = Annonce::orderBy('id', 'desc')->paginate(20);

        $categoryImmobilier = Annonce::where('category', '=', 'Immobilier')->get()->count();
        $categoryElectronique = Annonce::where('category', '=', 'Electronique')->get()->count();
        $categoryServices = Annonce::where('category', '=', 'Services')->get()->count();
        $categoryMode = Annonce::where('category', '=', 'Mode')->get()->count();
        $categoryVéhicule = Annonce::where('category', '=', 'Véhicule')->get()->count();
        $categoryEmploi = Annonce::where('category', '=', 'Emploi')->get()->count();
        $categoryPourLaMaison = Annonce::where('category', '=', 'Pour la maison')->get()->count();
        $categoryLoisirs = Annonce::where('category', '=', 'Loisirs')->get()->count();
        $categoryEducation = Annonce::where('category', '=', 'Education')->get()->count();
        $categoryAutres = Annonce::where('category', '=', 'Autres')->get()->count();

        return view('home', [
            'annonces' => $annonces,
            'categoryImmobilier' => $categoryImmobilier,
            'categoryElectronique' => $categoryElectronique,
            'categoryServices' => $categoryServices,
            'categoryMode' => $categoryMode,
            'categoryVéhicule' => $categoryVéhicule,
            'categoryEmploi' => $categoryEmploi,
            'categoryPourLaMaison' => $categoryPourLaMaison,
            'categoryLoisirs' => $categoryLoisirs,
            'categoryEducation' => $categoryEducation,
            'categoryAutres' => $categoryAutres
        ]);
    }

    public function annonce_create()
    {
        return view('annonces.annonce_create');
    }

    public function annonce_show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonces.annonce_show', [
            'annonce' => $annonce
        ]);
    }

    public function annonce_edit($id)
    {
        $annonce = Annonce::findOrFail($id);

        return view('annonces.annonce_edit', [
            'annonce' => $annonce,
        ]);
    }

    public function annonce_delete($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonces.annonce_delete', [
            'annonce' => $annonce
        ]);
    }

    public function myAnnonce()
    {
        $annonces = Annonce::orderBy('id', 'desc')->paginate(20);
        return view('my_annonces', [
            'annonces' => $annonces
        ]);
    }
}