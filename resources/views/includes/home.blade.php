<div class="ml-0 transition md:ml-60 z-1">
    <section class="flex items-center justify-between w-full px-4 h-14 pt-1">
        <button class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true">
            <span class="sr-only">Menu</span>
            <i class="fa-solid fa-bars"></i>

        </button>
        <div class="hidden form-icon md:block w-96">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg> <input class="bg-gray-50 border-0 form-input" placeholder="Recherche..." />
        </div>


        @guest
            <div class="flex flex-row">
                @include('includes.register_modal')
                @include('includes.login_modal')
            </div>
        @endguest

        @auth
            <div x-cloak  class="flex items-center"> <a href="#" class="flex text-gray-500"> <i
                        class="pt-1 pr-4 fa-solid fa-bell"></i>
                    <div class="relative text-gray-500" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false" class="flex items-center">
                            <img src="./img/avatar.png" alt="Photo" class="w-12 h-12 pt-1 rounded-full" />

                        </button>
                        <ul x-show="isOpen" @click.away="isOpen = false"
                            class="absolute right-0 z-20 w-48 py-1 mt-2 overflow-hidden font-normal bg-gray-900 border rounded shadow ">
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-3 hover:bg-gray-800 hover:text-gray-200">
                                    <i class="pr-2 text-gray-300 fa-solid fa-user"></i>
                                    <span class="ml-2">Profil</span>
                                </a>
                            </li>
                            <li class="border-b border-black">
                                <a href="#"  @click="settings = true, mur = false"
                                    class="flex items-center px-3 py-3 hover:bg-gray-800 hover:text-gray-200">
                                    <i class="pr-2 text-gray-300 fa-solid fa-gear"></i>
                                    <span class="ml-2">Admin Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="/logout"
                                    class="flex items-center px-3 py-3 hover:bg-gray-800 hover:text-gray-200">
                                    <i class="pr-2 text-gray-300 fa-solid fa-right-from-bracket"></i>
                                    <span class="ml-2">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        @endauth
        </section>


        {{-- BOUCLE MUR ACCUEIL --}}
    <div x-show="mur">
    @include('includes.post')
    @include('includes.post2')
    @include('includes.post')
    @include('includes.post2')
    </div>
               {{--  --}}

    <div x-show="settings">
     @include('includes.backend')
    </div>
      
</div>
