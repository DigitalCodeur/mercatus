@extends('layouts.app')

@section('content')
    <br>

    <main class="w-4/5 p-10 mx-auto mt-10 mb-20 bg-white shadow-2xl rounded-2xl">
        <h1 class="my-10 text-4xl text-center">Soumettez votre annonce</h1>

        @if ($message = Session::get('succès'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif

        <p class="my-5 text-lg text-red-500 "> Les champs obligatoires sont signalés par un *.</p>

        <form method="POST" action="{{ route('annonce.store') }}" id="createForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Choisissez une catégorie*</label>
                <select name="category" class="form-input" id="category" required>
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
                <input type="text" name="title" class="form-input" id="title" required>
                @error('title')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix (FCFA)</label>
                <input type="number" name="price" class="form-input" id="price" required>
                @error('price')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="localisation" class="form-label">Ville-Pays*</label>
                <input type="text" name="localisation" class="form-input" id="localisation" value="Lomé-Togo" required>
                @error('localisation')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tel_num" class="form-label">Numero de telephone*</label>
                <input type="tel" name="tel_num" class="form-input" id="tel_num" required>
                @error('tel_num')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="whatsapp_num" class="form-label">Numero WhatsApp</label>
                <input type="tel" name="whatsapp_num" class="form-input" id="whatsapp_num" required>
                @error('whatsapp_num')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email_annonce" class="form-label">Adresse email</label>
                <input type="email" name="email_annonce" class="form-input" id="email_annonce" required>
                @error('email_annonce')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img_annonce" class="form-label">Image*</label>
                <input type="file" name="img_annonce" accept="image/*" class="form-input" id="img_annonce" required>
                @error('img_annonce')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptif" class="form-label">Descriptif*</label>
                <textarea name="descriptif" class="form-input" id="descriptif" rows="7" required></textarea>
                @error('descriptif')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </div>
            <button type="submit" class="p-3 my-3 text-3xl text-white bg-red-700 rounded-lg">Poster
                l’annonce</button>
        </form>
    </main>
@endsection
