@extends('layouts.app')

@section('content')
    <main class="w-4/5 p-10 mx-auto mt-10 mb-20 bg-white shadow-2xl rounded-2xl">
        <h1 class="py-5 text-4xl text-center">Tableau de board</h1>
        <div class="py-12">
            <div class="w-1/2">

                <div class="flex text-xl justify-between my-2">
                    <p>Nom: </p>
                    <p> {{ auth()->user()->name }}</p>
                </div>
                <div class="flex text-xl justify-between my-2">
                    <p>Email: </p>
                    <p>{{ auth()->user()->email }}</p>
                </div>
                <div class="flex text-xl justify-between my-2">
                    <p>Date d'inscription:</p>
                    <p>{{ auth()->user()->created_at->format(' j M Y \\à h:i:s') }}</p>
                </div>
            </div>
            <div class="my-10">
                <a href="{{ route('profile.edit') }}" class="bg-red-700 p-3 text-white rounded-lg">Modifier mon
                    profile</a>
            </div>
        </div>
    </main>
@endsection
