@extends('layouts.app')

@section('content')
    <main class="py-3">

        <div class="bg-white shadow-2xl rounded-2xl w-1/2 mx-auto my-20 p-5">
            <h1 class="text-center mb-5 text-4xl">Se connecter</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="form-label">{{ __('Adresse email') }}</label>

                    <div>
                        <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}"
                            autocomplete="email" autofocus>

                        @error('email')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>

                    <div>
                        <input id="password" type="password" class="form-input" name="password"
                            autocomplete="current-password">

                        @error('password')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div>
                        <div class="form-check">
                            <input class="text-red-700" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Se souvenir de moi') }}
                            </label>
                        </div>
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-end mb-4 block text-red-700" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <div class="mb-4">
                    <div>
                        <button type="submit" class="p-3 my-3 w-full text-3xl text-white bg-red-700 rounded-lg">
                            {{ __('Se connecter') }}
                        </button>

                        <div class="text-center">
                            <div class="flex justify-center">
                                <p class="text-lg">Vous n'avez pas de compte? </p>
                                <a href="{{ route('register') }}"
                                    class="text-red-700 text-xl font-bold ml-2">S'inscrire</a>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
