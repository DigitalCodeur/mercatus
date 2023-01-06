<footer class="mt-10 bg-slate-700">
    <div class="container p-2 pb-0 mx-auto">
        <div class="flex flex-wrap justify-between p-3">
            <div>
                <p class="mb-3 text-2xl text-white">Á propos de nous</p>
                <a class="block text-lg text-gray-200" href="#">Qui sommes nous ?</a>
                <a class="block text-lg text-gray-200" href="#">Comment ça marche ?</a>
                <a class="block text-lg text-gray-200" href="#">Nous contacter</a>
            </div>
            <div>
                <p class="mb-3 text-2xl text-white">Informations légales</p>
                <a class="block text-lg text-gray-200"href="#">Conditions générales d’utilisation</a>
                <a class="block text-lg text-gray-200"href="#">Conditions générales de vente</a>
                <a class="block text-lg text-gray-200"href="#">Politique de confidentialité</a>
            </div>
            <div>
                <p class="mb-3 text-2xl text-white">Newsletter</p>
                <form method="POST" action="{{ route('newsletter.create') }}">
                    <div class="mb-3">
                        <div class="flex">
                            @csrf
                            <input type="email" name="newsletter_mail"
                                class="text-black border-0 rounded-l-lg md:w-80" placeholder="Email"
                                id="newsletter_mail">
                            <button type="submit"
                                class="px-2 py-0 m-0 text-lg text-white bg-red-700 border-0 rounded-r-lg">S’inscrire</button>

                        </div>
                        @error('newsletter_mail')
                            <div class="text-red-700">{{ $message }}</div>
                        @enderror
                        <div class="text-gray-400">Inscrivez-vous pour être informé des nouvelles
                            annonces.</div>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-end mx-3">
            <div>
                <a href="#">
                    <img src=" {{ asset('/images/facebook.svg') }} " class="mx-1" alt="logo de facebook">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src=" {{ asset('/images/twitter.svg') }} " class="mx-1" alt="logo de twitter">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src=" {{ asset('/images/instagram.svg') }} " class="mx-1" alt="logo d' instagram">
                </a>
            </div>
        </div>
        <hr class="m-0 mt-2">
        <p class="py-1 m-0 text-center text-white">&copy 2022 Copyrigth mercatus africa</p>
    </div>
</footer>
