{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
@extends('layouts.app')

@section('content')
    <main class="py-3">


        <div class="bg-white shadow-2xl rounded-2xl w-1/2 mx-auto my-20 p-5">
            <h1 class="text-center mb-5 text-4xl">S'inscrire</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">{{ __('Prénom et Nom') }}</label>

                    <div>
                        <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}"
                            autocomplete="name" autofocus>

                        @error('name')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">{{ __('Adress email') }}</label>

                    <div>
                        <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}"
                            autocomplete="email">

                        @error('email')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>

                    <div>
                        <input id="password" type="password" class="form-input" name="password"
                            autocomplete="new-password">

                        @error('password')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="form-label">{{ __('Confirmer le mot de passe') }}</label>

                    <div>
                        <input id="password-confirm" type="password" class="form-input" name="password_confirmation"
                            autocomplete="new-password">
                        @error('password_confirmation')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div>
                        <button type="submit" class="p-3 my-3 w-full text-3xl text-white bg-red-700 rounded-lg">
                            {{ __('S\'inscrire') }}
                        </button>
                        <div class="text-center">
                            <div class="flex justify-center">
                                <p class="text-lg">Vous avez déjà un compte?</p>
                                <a href="{{ route('login') }}" class="text-red-700 text-xl font-bold ml-2">Se connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
