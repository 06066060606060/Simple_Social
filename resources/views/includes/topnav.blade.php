<div class="shadow-sm">
    <div class="flex items-center justify-between px-4 py-1 mx-auto">

        <div class="flex items-center space-x-4">

            <form class="hidden mb-0 lg:flex">
                <div class="relative">
                    <input class="h-10 pl-2 pr-10 text-sm placeholder-gray-300 border-0 rounded-lg form-input focus:z-10"
                        placeholder="Recherche..." type="text" />

                    <button class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg" type="submit">
                        <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>


        {{-- MENU normal --}}
        <nav class="items-center hidden space-x-8 text-sm font-medium lg:justify-end lg:flex lg:flex-1 lg:w-0">
            @if (session('error'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 8000)">
                        <span class='text-red-800 text-bold pl-8'>Login ou Mots de passe incorrect</span>
                    </div>
                </div>
            @endif
            @if (session('success'))
                <div class="">
                    {{-- <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 8000)"> --}}
                    <span class='text-white text-bold'>Bienvenue {{ Auth::user()->pseudo }}</span>
                    {{-- </div> --}}
                </div>
            @endif

            @if (session('modifié'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)">
                        <span class='text-green-600 text-bold'>Post modifié!</span>
                    </div>
                </div>
            @endif

            
            @if (session('usermodifié'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)">
                        <span class='text-green-600 text-bold'>Post modifié!</span>
                    </div>
                </div>
            @endif

            @if (session('ajouté'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)">
                        <span class='text-green-600 text-bold'>Post ajouté!</span>
                    </div>
                </div>
            @endif

            @if (session('commajouté'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)">
                        <span class='text-green-600 text-bold'>Commentaire ajouté!</span>
                    </div>
                </div>
            @endif

            @if (session('supprimé'))
                <div class="">
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 8000)">
                        <span class='text-red-800 text-bold'>Post supprimé!</span>
                    </div>
                </div>
            @endif

            {{-- SI AUTH j'affiche les settings --}}
            @auth


                {{-- SI mika j'affiche le menu backend / a modifier avec les roles --}}
                @if (Auth::user()->pseudo == 'mika')
                    <a class="text-gray-900" href="#">@include('includes.backend_modal')</a>
                @endif



                <a class="" href="#"><i class="-mt-6 text-white fa-solid fa-bell hover:text-black"></i></a>
                @include('includes.settings_modal')
                <a class="" href="/logout"><i
                        class="-mt-6 text-white fa-solid fa-right-from-bracket hover:text-black"></i></a>
            @endauth

        </nav>
        @guest
            <div class="flex flex-row">
                @include('includes.register_modal')
                @include('includes.login_modal')
            </div>
        @endguest
    </div>


    {{-- MENU MOBILE --}}

    @auth
        <div class="lg:hidden">
            <nav class="flex items-center justify-center overflow-x-auto text-sm font-medium">
                <a class="text-gray-900" href="#">@include('includes.backend_modal')</a>
                <a class="text-gray-900" href=""><i
                        class="ml-2 -mt-6 text-white fa-solid fa-bell hover:text-black"></i></a>
                @include('includes.settings_modal')
                <a class="pl-4 text-gray-900" href="/logout"><i
                        class="ml-4 -mt-6 text-white fa-solid fa-right-from-bracket hover:text-black"></i></a>
                @auth
                    <a class="pl-4 text-gray-900" href="/profil"><img class="w-8 h-8 rounded-full"
                            src="{{ Storage::url(Auth::user()->photo) }}"></a>
                @endauth
            </nav>
        </div>
    @endauth

</div>
