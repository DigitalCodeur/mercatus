<?php

namespace App\Http\Controllers\Api;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();

        return response()->json($annonces);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'localisation' => 'required',
            'tel_num' => 'required',
            'img_annonce' => ['required', 'image'],
            'descriptif' => 'required'
        ]);

        $filename = time() . '.' . $request->img_annonce->extension();

        $path = $request->file('img_annonce')->storeAs(
            'avatars',
            $filename,
            'public'
        );

        $annonce = Annonce::create([
            'category' => $request->category,
            'title' => $request->title,
            'price' => $request->price,
            'localisation' => $request->localisation,
            'tel_num' => $request->tel_num,
            'whatsapp_num' => $request->whatsapp_num,
            'email_annonce' => $request->email_annonce,
            'img_annonce' => $request->path = $path,
            'descriptif' => $request->descriptif,
            'user_id' => $request->user_id
        ]);

        // return response()->json($annonce, 201);
        return to_route('annonce.create', 'succès=L\'annonce a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return response()->json($annonce);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'localisation' => 'required',
            'tel_num' => 'required',
            'img_annonce' => ['image'],
            'descriptif' => 'required'
        ]);

        if (empty($request->img_annonce)) {

            $annonce = Annonce::find($id);
            $annonce->category = $request->category;
            $annonce->title = $request->title;
            $annonce->price = $request->price;
            $annonce->localisation = $request->localisation;
            $annonce->tel_num = $request->tel_num;
            $annonce->whatsapp_num = $request->whatsapp_num;
            $annonce->email_annonce = $request->email_annonce;
            $annonce->img_annonce = $annonce->img_annonce;
            $annonce->descriptif = $request->descriptif;
            $annonce->save();
        } else {
            $filename = time() . '.' . $request->img_annonce->extension();

            $path = $request->file('img_annonce')->storeAs(
                'avatars',
                $filename,
                'public'
            );

            $annonce = Annonce::find($id);
            $annonce->category = $request->category;
            $annonce->title = $request->title;
            $annonce->price = $request->price;
            $annonce->localisation = $request->localisation;
            $annonce->tel_num = $request->tel_num;
            $annonce->whatsapp_num = $request->whatsapp_num;
            $annonce->email_annonce = $request->email_annonce;
            $annonce->img_annonce = $request->path = $path;
            $annonce->descriptif = $request->descriptif;
            $annonce->save();
        }

        // return response()->json();
        return to_route('myAnnonce', 'succès=L\'annonce a été modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Annonce::where('id', $id)->firstorfail()->delete();

        // return response()->json();
        return to_route('myAnnonce', 'succès=L\'annonce a été supprimé avec succès.');
    }
}