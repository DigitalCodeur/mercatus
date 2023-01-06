<header class="bg-red-700">

    <nav>
        <div class="container justify-between mx-auto lg:flex">
            <a href="{{ route('home') }}" class="py-3">
                <img src="{{ asset('/images/logo-mercatus-africa.png') }}" alt="logo de mercatus africa">
            </a>

            <div class="flex justify-around pb-2">
                <form method="GET" action="{{ route('search') }}" role="search"
                    class="flex mt-2 bg-white rounded shadow h-11">
                    @csrf
                    <input name="search" value="{{ request('search') }}"
                        class="border-0 rounded-l xl:w-96 lg:w-80 md:w-96" type="search" placeholder="Recherche...">
                    <button type="submit" class="p-3">
                        <img src=" {{ asset('/images/loupe2.png') }} " alt="logo de mercatus africa">
                    </button>
                </form>

                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-3 mx-4 mt-2 text-white border border-white rounded"
                        id="click-menu">
                        <svg class="w-4 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

            <ul class="hidden lg:flex nav-menu">
                <li>
                    <a href="{{ route('favoris') }}" class="flex py-3 mx-3 text-white">
                        <img src="{{ asset('/images/like.svg') }}" class="mx-2" alt="image favoris">
                        Favoris
                    </a>
                </li>
                <li>

                    @if (Auth::user())
                        <div class="sm:flex sm:items-center lg:mx-auto mx-4">
                            <x-dropdown align="left" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-0 py-2 mt-2 text-lg font-medium leading-4 text-white transition duration-150 ease-in-out bg-red-700 border border-transparent rounded-md hover:text-white focus:outline-none">
                                        <img src=" {{ asset('/images/user.svg') }}" alt="image de user">
                                        <div>
                                            {{ Str::limit(Auth::user()->name, 8) }}
                                        </div>
                                        <div class="ml-1">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Tableau de board') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('favoris')">
                                        {{ __('Favoris') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('myAnnonce')">
                                        {{ __('Mes annonces') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                            {{ __('Se déconnecter') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="flex py-3  text-white">
                            <img src=" {{ asset('/images/user.svg') }}" class="mx-2" alt="image de user">
                            Se connecter
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('annonce.create') }}" class="flex py-3 mx-3 text-white">
                        <img src=" {{ asset('/images/plus.svg') }}" class="mx-2" alt="image d'ajout d'annonce">
                        Poster une annonce</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container px-0 mx-auto category-invisible">
        <div class="p-px bg-white"></div>
        <nav class="flex justify-between py-1">
            <a class="text-white" href="{{ route('search.category', $category = 'Immobilier') }}">Immobilier</a>
            <a class="text-xl text-white"
                href="{{ route('search.category', $category = 'Electronique') }}">Electronique</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Véhicule') }}">Véhicule</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Mode') }}">Mode</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Pour la maison') }}">Pour la
                maison</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Education') }}">Education</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Emploi') }}">Emploi</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Services') }}">Services</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Loisirs') }}">Loisirs</a>
            <a class="text-xl text-white" href="{{ route('search.category', $category = 'Autres') }}">Autres</a>
        </nav>
    </div>
</header>
