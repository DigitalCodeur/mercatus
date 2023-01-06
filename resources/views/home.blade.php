@extends('layouts.app')

@section('content')
    <main>

        <div class="bg-img">
            <div class="w-full h-full bg-red-600 bg-opacity-10">
                <div class="w-3/4 mx-auto py-52">
                    <h1 class="p-5 sm:text-5xl text-2xl text-center text-white rounded-2xl">
                        ACHETEZ ET VENDEZ N'IMPORTE QUELLE ARTICLE <br> SUR MERCATUS AFRICA</h1>
                </div>
            </div>
        </div>

        <div class="container mx-auto my-20 display-none">

            <h2 class="mt-10 text-3xl">Catégories</h2>
            <hr>
            <div class="flex justify-between flex-wrap my-14">
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/maison.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Immobilier">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Immobilier') }}"
                            class="py-3 text-lg hover:text-red-700">Immobilier</a>
                        <p class="text-center"> {{ $categoryImmobilier }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/electro.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Appareil électronique">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Electronique') }}"
                            class="py-3 text-lg hover:text-red-700">Appareil
                            électronique</a>
                        <p class="text-center"> {{ $categoryElectronique }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/vehicule.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Véhicule">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Véhicule') }}"
                            class="py-3 text-lg hover:text-red-700">Véhicule</a>
                        <p class="text-center"> {{ $categoryVéhicule }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px ;">
                    <img src="{{ asset('/images/mode.jpg') }}" class="rounded-xl h-32 w-full" alt="...">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Mode') }}"
                            class="py-3 text-lg hover:text-red-700">Mode</a>
                        <p class="text-center"> {{ $categoryMode }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/home.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Pour la maison">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Pour la maison') }}"
                            class="py-3 text-lg hover:text-red-700">Pour
                            la maison</a>
                        <p class="text-center"> {{ $categoryPourLaMaison }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/education.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Education">
                    <div class="text-center">
                        <a href="="{{ route('search.category', $category = 'Education') }}"
                            class="py-3 text-lg hover:text-red-700">Education</a>
                        <p class="text-center"> {{ $categoryEducation }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/job.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Emploi">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Emploi') }}"
                            class="py-3 text-lg hover:text-red-700">Emploi</a>
                        <p class="text-center"> {{ $categoryEmploi }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/service.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Services">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Services') }}"
                            class="py-3 text-lg hover:text-red-700">Services</a>
                        <p class="text-center"> {{ $categoryServices }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/loisirs.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Loisirs">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Loisirs') }}"
                            class="py-3 text-lg hover:text-red-700">Loisirs</a>
                        <p class="text-center"> {{ $categoryLoisirs }} annonces</p>
                    </div>
                </div>
                <div class="mx-3 mt-4 shadow-lg rounded-xl" style="width: 190px;">
                    <img src="{{ asset('/images/autre.jpg') }}" class="rounded-xl h-32 w-full"
                        alt="Image representant la categorie Autres">
                    <div class="text-center">
                        <a href="{{ route('search.category', $category = 'Autres') }}"
                            class="py-3 text-lg hover:text-red-700">Autres</a>
                        <p class="text-center"> {{ $categoryAutres }} annonces</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container mx-auto my-20">
            <h2 class="mt-10 text-3xl">Dernières annonces</h2>
            <hr>
            @if (!empty($annonces) && $annonces->count())
                <div class="grid justify-between my-14 grid-annonce">

                    @foreach ($annonces as $annonce)
                        <div class="mx-auto mb-4">
                            <a href="{{ route('annonce.show', $annonce->id) }}">
                                <div class="pb-3 bg-white shadow-2xl w-72 rounded-2xl position: relative">
                                    <img src="{{ Storage::url($annonce->img_annonce) }}" class="h-56 rounded-t-2xl w-72"
                                        alt="Image de l'annonce">
                                    {{-- <form action="{{ route('favoris.store', $annonce->id) }}" method="POST"
                                        class="position: absolute favorisForm left-60 bottom-36">
                                        @csrf
                                        <button type="submit" class="p-0 m-0 border-0">
                                            <img src="{{ asset('/images/favori2.png') }}" alt="favoris image"
                                                title="ajouter ou retirer des favoris" class=" w-9">
                                        </button>
                                    </form> --}}

                                    <div class="px-3">

                                        <h5 class="text-lg">{{ $annonce->title }}</h5>
                                        <p class="pt-1 m-0 text-xl text-red-700">{{ $annonce->price }} CFA</p>
                                        <div class="flex">
                                            <img src=" {{ asset('/images/map.svg') }} " class=""
                                                alt="logo de localisation">
                                            <p class="m-0 text-lg">{{ $annonce->localisation }}</p>
                                        </div>
                                        <p class="pt-2 text-md">Publier {{ $annonce->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div>
                    <p class="py-5 fs-5">Désolé, nous n'avons trouvé aucune annonce 😞.</p>
                </div>
            @endif


            <div class="w-48 mx-auto ">
                {{ $annonces->links() }}
            </div>
        </div>

    </main>
@endsection
