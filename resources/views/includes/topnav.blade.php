<div class="shadow-sm">
<<<<<<< HEAD
    <div class="flex items-center justify-between px-4 py-2 mx-auto" >
=======
    <div class="flex items-center justify-between px-4 py-1 mx-auto" >
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8

      <div class="flex items-center space-x-4">
  
        <form class="hidden mb-0 lg:flex">
          <div class="relative">
            <input
              class="h-10 pl-2 pr-10 text-sm placeholder-gray-300 border-gray-200 rounded-lg focus:z-10"
              placeholder="Recherche..."
              type="text"
            />
  
            <button
              class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg"
              type="submit"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  clip-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  fill-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
        </form>
      </div>

      {{-- MENU LARGE --}}
  
      <nav class="items-center hidden space-x-8 text-sm font-medium lg:justify-end lg:flex lg:flex-1 lg:w-0">
      @auth
<<<<<<< HEAD
        <a class="text-gray-900" href="backend">Backend</a>
        <a class="text-gray-900" href="">test</a>
        <a class="text-gray-900" href="">test1</a>
        <a class="flex-shrink-0 pl-4 text-gray-900" href="/logout">logout</a>
=======
        <a class="text-gray-900" href="backend">Administration</a>
        <a class="text-gray-900" href=""><i class="ml-2 -mt-6 text-white fa-solid fa-gear hover:text-black"></i></a>
          <a class="pl-4" href="/logout"><i class="ml-4 -mt-6 text-white fa-solid fa-right-from-bracket hover:text-black"></i></a>
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8
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
        <nav
          class="flex items-center justify-center overflow-x-auto text-sm font-medium"
        >
<<<<<<< HEAD
        <a class="text-gray-900" href="backend">Backend</a>
        <a class="text-gray-900" href="">test</a>
        <a class="text-gray-900" href="">test1</a>
          <a class="flex-shrink-0 pl-4 text-gray-900" href="/logout">logout</a>
=======
        <a class="text-gray-900" href="backend">Administration</a>
        <a class="text-gray-900" href=""><i class="ml-2 -mt-6 text-white fa-solid fa-gear hover:text-black"></i></a>
          <a class="pl-4 text-gray-900" href="/logout"><i class="ml-4 -mt-6 text-white fa-solid fa-right-from-bracket hover:text-black"></i></a>
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8
        </nav>
      </div>
    @endauth
   
<<<<<<< HEAD
  </div>
   
=======
  </div>
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8
