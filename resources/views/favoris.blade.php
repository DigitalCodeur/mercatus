@extends('layouts.app')

@section('content')
    <main>
        <div class="container mx-auto">
            <div class="py-5">
                <div class="mx-auto my-10 py-10 bg-white shadow rounded-2xl position: relative">
                    <h1 class="pt-10 text-4xl text-center">Mes favoris</h1>

                    {{-- <div class="p-5">

                        @if (!empty($favoris) && $favoris->count())
                            <div class="grid justify-between my-14 grid-annonce">

                                @foreach ($favoris as $favori)
                                    @if ($favori->user_id === auth()->id())
                                        <div class="mx-auto mb-4">
                                            <a href="{{ route('annonce.show', $favori->annonce_id) }}">
                                                <div class="pb-3 bg-white shadow-2xl w-72 rounded-2xl position: relative">
                                                    <img src="{{ Storage::url($favori->annonce->img_annonce) }}"
                                                        class="h-56 rounded-t-2xl w-72" alt="Image de l'annonce">
                                                    <form action="{{ route('favoris.store', $favori->annonce->id) }}"
                                                        method="POST"
                                                        class="position: absolute favorisForm left-60 bottom-36">
                                                        @csrf
                                                        <button type="submit" class="p-0 m-0 border-0">
                                                            <img src="{{ asset('/images/heart.png') }}" alt="favoris image"
                                                                title="ajouter ou retirer des favoris" class=" w-9">
                                                        </button>
                                                    </form>
                                                    <div class="px-3">

                                                        <h5 class="text-lg">{{ $favori->annonce->title }}</h5>
                                                        <p class="pt-1 m-0 text-xl text-red-700">
                                                            {{ $favori->annonce->price }} CFA</p>
                                                        <div class="flex">
                                                            <img src=" {{ asset('/images/map.svg') }} " class=""
                                                                alt="logo de localisation">
                                                            <p class="m-0 text-lg">{{ $favori->annonce->localisation }}</p>
                                                        </div>
                                                        <p class="pt-2 text-md">Publier
                                                            {{ $favori->annonce->updated_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div>
                                <p class="py-5 fs-5">Désolé, nous n'avons trouvé aucune annonce 😞.</p>
                            </div>
                        @endif


                        <div class="w-48 mx-auto ">
                            {{ $favoris->links() }}
                        </div>

                    </div> --}}

                    <div class="my-10 p-5 rounded-xl w-1/2 mx-auto text-center text-green-900 bg-green-200">Le système
                        d'ajout
                        de
                        favoris est
                        en
                        cours de
                        conception.
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
