

<section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
    <nav class="absolute left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0"
        :class="{ '-translate-x-full': !sideBar, 'translate-x-0': sideBar }" @click.away="sideBar = false"> <a href="/"
            class="flex items-center px-2 py-2"> <img src="/img/logo.png" alt="Kutty Logo" /> </a>
        <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation"> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr-4" id="github"></i>Accueil</a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr4" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr-4" id="github"></i></a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr-4" id="github"></i> </a>
            <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr-4" id="github"></i> </a> <a
                class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"><i class="fa-brands fa-github pr-4" id="github"></i></a>
            {{-- 2nd sideBar --}}
            <class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                href="#"> <i class="fa-brands fa-github pr-4" id="github"></i>Accueil</a> <a
                    class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                    href="#"> <i class="fa-brands fa-github pr4" id="github"></i> </a> <a
                    class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                    href="#"> <i class="fa-brands fa-github pr-4" id="github"></i></a> <a
                    class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                    href="#"> <i class="fa-brands fa-github pr-4" id="github"></i> </a>
                <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                    href="#"> <i class="fa-brands fa-github pr-4" id="github"></i> </a> <a
                    class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                    href="#"><i class="fa-brands fa-github pr-4" id="github"></i></a>
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
            <div class="flex items-center"> <a href="#" class="flex text-gray-500"> <svg class="shrink-0 w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg> </a> <a href="#" class="ml-4 avatar avatar-sm"> <img src="./img/Ellipse2.png"
                        alt="Photo of Praveen Juge" /> </a> </div>
        </header>
        <!-- component -->
        <div class="container min-w-full">


            <div class="mt-10">
                <div class="flex justify-center">
                    <img class=" h-80 rounded-full mb-4"
                        src="https://m.media-amazon.com/images/I/81JAJdnR4UL._SS500_.jpg" />
                </div>
                <div class="animate-fade-in-down mb-1 text-center text-lg text-sky-600">Flo Tlm</div>
                <div class="animate-fade-in-down mb-8 text-center text-lg text-sky-800">Futur Web developer</div>
                
            </div>
        </div>
    </div>
    </div> <!-- Sidebar Backdrop -->
    <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
        x-cloak></div>

      {{-- Post --}}
      <div class="flex justify-center">
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mx-auto sm:text-center lg:max-w-2xl">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
           
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
              <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                  <defs>
                    <pattern id="5dc90b42-5ed4-45a6-8e63-2d78ca9d3d95" x="0" y="0" width=".135" height=".30">
                      <circle cx="1" cy="1" r=".7"></circle>
                    </pattern>
                  </defs>
                  
                </svg>
                <span class="relative">The</span>
              </span>
              quick, brown fox jumps over a lazy dog
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
            </p>
          </div>
          <div class="mb-4 transition-shadow duration-300 hover:shadow-xl lg:mb-6">
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="https://images.pexels.com/photos/3727459/pexels-photo-3727459.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
          </div>
          <p class="max-w-xl mb-4 text-base text-gray-700 sm:mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris aliquip ex ea.
          </p>
          <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
            Learn more
            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

</section>
