<section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
    <nav class="absolute left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0"
        :class="{ '-translate-x-full': !sideBar, 'translate-x-0': sideBar }" @click.away="sideBar = false"> <a href="/"
            class="flex items-center px-2 py-2"> <img src="/img/logo.png" alt="Kutty Logo" /> </a>
        <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation"> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="pr-4 fa-brands fa-github" id="github"></i>Accueil</a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr4" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="pr-4 fa-brands fa-github" id="github"></i></a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="pr-4 fa-brands fa-github" id="github"></i> </a>
            <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="pr-4 fa-brands fa-github" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"><i class="pr-4 fa-brands fa-github" id="github"></i></a>
        </nav>
    </nav>
    <div class="ml-0 transition md:ml-60">
        <header class="flex items-center justify-between w-full px-4 h-14">
            <button class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true">
                <span class="sr-only">Menu</span>
                <i class="fa-solid fa-bars"></i>

            </button>
            <div class="hidden -ml-3 form-icon md:block w-96">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg> <input class="bg-transparent border-0 form-input" placeholder="Search for articles..." />
            </div>
            @guest
            <div class="flex flex-row">
            @include('includes.register_modal')
            @include('includes.login_modal')
            </div>
            @endguest
            @auth
                <div class="flex items-center"> <a href="#" class="flex text-gray-500"> <i class="fa-solid fa-bell"></i>
                    </a>
                    <a href="#" class="ml-4 mr-4 avatar avatar-sm"> <img src="./img/Ellipse2.png" alt="Photo" /> </a>
                    <div class="flex items-center justify-center">
                        <a href="/logout"
                            class="px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50" />
                        Logout
                        </a>
                    </div>
                @endauth

            </div>
        </header>
        <div class="p-4 lg:ml-64 md:ml-64">
            <!-- Add content here, remove div below -->
            <div class="-mt-2 border-4 border-dashed rounded h-96">

                
            </div>
        </div>
    </div> <!-- Sidebar Backdrop -->
    <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
        x-cloak></div>
</section>
