<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
    class="flex items-center justify-center px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
    <span>Login</span>
</button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-12 overflow-hidden transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <section class="bg-gray-50">  
                    
                    {{-- @click="modelOpen = false" --}}
                      <div
                        class="w-full px-0 pb-4 mx-auto mb-0 space-y-4 bg-transparent md:bg-white md:px-6"
                      >
                        <h1 class="pt-4 mb-5 text-xl text-center text-black">Connectez votre compte</h1>
                        <form class="pb-1 space-y-4" action="/authenticate" method="post">
                            @csrf
                          <label for="email" class="block">
                            <span class="block mb-1 text-xs font-medium text-gray-700">Email</span>
                            <input class="form-input" type="email"  name="email" placeholder="Ex. james@bond.com" inputmode="email" required />
                          </label>
                          <label for="password" class="block">
                            <span class="block mb-1 text-xs font-medium text-gray-700">password</span>
                            <input class="form-input" type="password" name="password" placeholder="••••••••" required />
                          </label>
                          <div class="flex items-center justify-center">
                            <input type="submit"  class="px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50" value="Login" />
                          </div>
                        </form>
                      </div>
                  </section>

            </div>
        </div>
    </div>
</div>
