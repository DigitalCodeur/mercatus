@extends('layouts.app')

@section('content')
    <article class="container mx-auto my-20">
        <div class="pb-20 shadow-2xl rounded-2xl">
            <div>
                <img src="{{ Storage::url($annonce->img_annonce) }}" class="w-full h-500 rounded-2xl" alt="image de l'annonce">
            </div>

            <div class="px-5 mt-10">
                <div class="show-div">
                    <p class="show-title">Categorie du produit :</p>
                    <p class="show-contenu">{{ $annonce->category }}</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Titre :</p>
                    <p class="show-contenu">{{ $annonce->title }}</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Prix :</p>
                    <p class="show-contenu">{{ $annonce->price }} CFA</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Ville - Pays :</p>
                    <p class="show-contenu">{{ $annonce->localisation }}</< /p>
                </div>
                <div class="show-div">
                    <p class="show-title">Date de Publication :</p>
                    <p class="show-contenu">{{ $annonce->created_at->format('d-m-Y') }}</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Numero de Telephone :</p>
                    <p class="show-contenu">{{ $annonce->tel_num }}</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Numero whatsapp : </p>
                    <p class="show-contenu">{{ $annonce->whatsapp_num }}</p>
                </div>
                <div class="show-div">
                    <p class="show-title">Adresse Email :</p>
                    <a href="mailto:{{ $annonce->email_annonce }}" class="show-contenu">{{ $annonce->email_annonce }}</a>
                </div>
                <div>
                    <p class="p-3 text-xl text-center border">Description de l'annonce :</p>
                    <p class="p-5 text-xl border">{{ $annonce->descriptif }}</p>
                </div>
            </div>

        </div>
    </article>
@endsection
