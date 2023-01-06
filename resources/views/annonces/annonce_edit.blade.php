@extends('layouts.app')

@section('content')
    <br>

    <main class="w-4/5 p-10 mx-auto mt-10 mb-20 bg-white shadow-2xl rounded-2xl">
        <h1 class="my-5 text-4xl text-center">Modifier votre annonce</h1>


        <p class="my-5 text-lg "> Les champs obligatoires sont signalés par un *.</p>

        <form method="POST" action="{{ route('annonce.update', $annonce->id) }}" id="editForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="category" class="form-label">Choisissez une catégorie*</label>
                <select name="category" class="form-input">
                    <option value="{{ $annonce->category }}">{{ $annonce->category }}</option>
                    <option value="Autres">Autres</option>
                    <option value="Immobilier">Immobilier</option>
                    <option value="Electronique">Electronique</option>
                    <option value="Services">Services</option>
                    <option value="Mode">Mode</option>
                    <option value="Véhicule">Véhicule</option>
                    <option value="emploi">Emploi</option>
                    <option value="Pour la maison">Pour la maison</option>
                    <option value="Education">Education</option>
                    <option value="Loisirs">Loisirs</option>
                </select>
                @error('category')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titre*</label>
                <input type="text" value="{{ $annonce->title }}" name="title" class="form-input">
                @error('title')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix (FCFA)</label>
                <input type="number" value="{{ $annonce->price }}" name="price" class="form-input">
                @error('price')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="localisation" class="form-label">Ville-Pays*</label>
                <input type="text" value="{{ $annonce->localisation }}" name="localisation" class="form-input">
                @error('localisation')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tel_num" class="form-label">Numero de telephone*</label>
                <input type="tel" value="{{ $annonce->tel_num }}" name="tel_num" class="form-input">
                @error('tel_num')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="whatsapp_num" class="form-label">Numero WhatsApp</label>
                <input type="tel" value="{{ $annonce->whatsapp_num }}" name="whatsapp_num" class="form-input">
                @error('whatsapp_num')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email_annonce" class="form-label">Adresse email</label>
                <input type="email" value="{{ $annonce->email_annonce }}" name="email_annonce" class="form-input">
                @error('email_annonce')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img_annonce" class="form-label">Image</label>
                <p class="text-red-500">Ne choisissez pas d'image si vous n'avez pas l'intention de la modifier</p>
                <input type="file" name="img_annonce" accept="image/*" class="form-input">
                @error('img_annonce')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptif" class="form-label">Descriptif*</label>
                <textarea name="descriptif" class="form-input" rows="7">{{ $annonce->descriptif }}</textarea>
                @error('descriptif')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </div>
            <button type="submit" onclick="updateForm()"
                class="p-3 my-3 text-3xl text-white bg-red-700 rounded-lg ">Modifier
                l’annonce</button>
        </form>
    </main>
@endsection
