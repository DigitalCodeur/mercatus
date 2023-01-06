@extends('layouts.app')

@section('content')
    <main>
        <div class="container mx-auto">
            <div class="py-5">
                <div class="mx-auto my-10 bg-white shadow rounded-2xl position: relative">
                    <h1 class="py-10 text-4xl text-center">Mes annonces</h1>

                    <div class="p-5">
                        @if ($message = Session::get('succès'))
                            <div class="alert alert-success mt-3">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if (!empty($annonces) && $annonces->count())
                            <table class="w-full border">
                                <tr class="border">
                                    <th class="border py-2">Categorie</th>
                                    <th class="border">Titre</th>
                                    <th class="border">Prix</th>
                                    <th class="border">Date</th>
                                    <th class="border">Action</th>
                                </tr>

                                @foreach ($annonces as $annonce)
                                    @if ($annonce->user_id === auth()->id())
                                        <tr>
                                            <td class="border text-center">{{ $annonce->category }}</td>
                                            <td class="border text-center text-red-500"><a
                                                    href="{{ route('annonce.show', $annonce->id) }}">{{ $annonce->title }}</a>
                                            </td>
                                            <td class="border text-center">{{ $annonce->price }}</td>
                                            <td class="border text-center">
                                                {{ $annonce->updated_at->format(' j M Y \\à H:i:s') }}</td>
                                            <td class="border text-center py-2 flex justify-around">
                                                <a class="text-xl text-white bg-blue-500 rounded-lg py-2 px-4"
                                                    href="{{ route('annonce.edit', $annonce->id) }}">
                                                    Editer
                                                </a>
                                                <a class="text-xl text-white bg-red-600 rounded-lg py-2 px-4"
                                                    href="{{ route('annonce.delete', $annonce->id) }}">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </table>
                        @else
                            <div>
                                <p class="py-5 fs-5">Désolé, nous n'avons trouvé aucune
                                    annonce 😞.</p>
                            </div>
                        @endif



                        <div class="w-48 mx-auto py-5">
                            {{ $annonces->links() }}
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
