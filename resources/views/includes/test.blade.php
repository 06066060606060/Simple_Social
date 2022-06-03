<section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
    <nav class="absolute left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0"
        :class="{ '-translate-x-full': !sideBar, 'translate-x-0': sideBar }" @click.away="sideBar = false"> <a href="/"
            class="flex items-center px-2 py-2"> <img src="/img/logo.png" alt="Kutty Logo" /> </a>
        <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation"> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-solid fa-house"></i>Accueil</a> <a
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
        <header class="flex items-center justify-between w-full px-4 h-14"> <button
                class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true"> <span
                    class="sr-only">Menu</span> <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg> </button>
            <div class="hidden -ml-3 form-icon md:block w-96"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg> <input class="bg-transparent border-0 form-input" placeholder="Search for articles..." /> </div>
            <div class="flex items-center"> <a href="#" class="flex text-gray-500"> <svg class="w-5 h-5 shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg> </a> <a href="#" class="ml-4 avatar avatar-sm"> <img src="./img/Ellipse2.png"
                        alt="Photo of Praveen Juge" /> </a> </div>
        </header>
        <div class="p-4">
            @include('includes.profiletest')

        </div> <!-- Sidebar Backdrop -->
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
            x-cloak></div>
</section>


