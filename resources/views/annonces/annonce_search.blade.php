@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-20">
        <h2 class="mt-10 text-3xl">Résultat de la recherche: {{ $category }}</h2>
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


@endsection
