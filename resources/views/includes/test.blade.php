<section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
    <nav class="absolute left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0"
        :class="{ '-translate-x-full': !sideBar, 'translate-x-0': sideBar }" @click.away="sideBar = false"> <a href="/"
            class="flex items-center px-4 py-5"> <img src="/brand/kutty-logo-white.png" alt="Kutty Logo"
                class="w-20" /> </a>
        <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation"> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github" id="github"></i></a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 text-gray-200 transition bg-gray-800 cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github" id="github"></i></a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github" id="github"></i> </a>
            <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"><i class="fa-brands fa-github" id="github"></i></a>
        </nav>
    </nav>
    <div class="ml-0 transition md:ml-60">
        <header class="flex items-center justify-between w-full px-4 h-14"> <button
                class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true"> <span
                    class="sr-only">Menu</span><i class="fa-brands fa-github" id="github"></i> </button>
            <div class="hidden -ml-3 form-icon md:block w-96"> <i class="fa-brands fa-github" id="github"></i>
                <input class="bg-transparent border-0 form-input" placeholder="Search for articles..." />
            </div>
            <div class="flex items-center"> <a href="#" class="flex text-gray-500"> <i class="fa-brands fa-github"
                        id="github"></i> </a> <a href="#" class="ml-4 avatar avatar-sm"> <img src="/placeholder.jpg"
                        alt="Photo of Praveen Juge" /> </a> </div>
        </header>
        <div class="p-4">
            <!-- Add content here, remove div below -->
            <div class="-mt-2 border-4 border-dashed rounded h-96"></div>
        </div>
    </div> <!-- Sidebar Backdrop -->
    <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
        x-cloak></div>
</section>
