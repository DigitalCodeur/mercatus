@extends('layouts.app')

@section('content')
    <div class="w-4/5 p-10 mx-auto my-20 shadow-2xl rounded-2xl">

        <div class="mb-4">
            <form action="{{ route('annonce.destroy', $annonce->id) }}" method="POST">
                <p class="text-2xl text-center">Voulez-vous vraiment supprimer cette annonce ?
                    <br> Cette action est irréversible.
                </p>
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-full p-3 my-10 text-2xl text-center text-white bg-red-700 rounded-lg">Confirmer
                    la
                    suppression</button>

            </form>
        </div>

    </div>
@endsection
