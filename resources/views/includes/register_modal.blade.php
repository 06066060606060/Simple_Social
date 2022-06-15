<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
        <span>Register</span>
    </button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 overflow-y-auto top-20" aria-labelledby="modal-title"
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
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <section class="">
                    <div class="flex items-center justify-center space-x-4">
                        <h1 class="text-4xl font-medium text-gray-800">Créer un compte</h1>

                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        </button>
                    </div>

                    <form class="mt-5" method="post" action="/registration" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="flex flex-row pb-2">
                                <div class="w-1/3 mt-4">
                                    <label for="pseudo"
                                        class="block text-sm text-gray-700 capitalize dark:text-gray-600">Pseudo</label>
                                    <input type="text" name="pseudo"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                        required>
                                </div>
                                <div class="px-4 mt-7 w-52">
                                    <label for="files"
                                        class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Ajouter
                                        un avatar</label>
                                    <input type="file" style="display:none" id="files" onchange="loadFile(event)"
                                        name="images" value="" required>
                                        <label for="file2"
                                        class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Ajouter banniére</label>
                                        <input type="file" style="display:none" id="file2" name="banniere" value="">
                                </div>
                                <div class="w-1/3">
                                    <img class="w-32 h-32 object-cover" id="img-output">
                                </div>
                            </div>
                            <div>
                                <label for="name"
                                    class="block text-sm text-gray-700 capitalize dark:text-gray-600">Nom Prénom</label>
                                <input type="text" name="name" placeholder=""
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm text-gray-700 capitalize dark:text-gray-600">Email</label>
                                <input type="text" name="email" placeholder=""
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block text-sm text-gray-700 capitalize dark:text-gray-600">Password</span></label>
                                <input
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    type="password" name="password" placeholder="••••••••" required>
                            </div>
                            <div class="mt-4">
                                <label for="bio"
                                    class="block text-sm text-gray-700 dark:text-gray-600">Biographie</label>
                                <textarea name="bio" rows="4" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    ></textarea>
                            </div>
                            <div class="flex flex-row">
                                <div class="w-1/3">
                                    <label for="categorie"
                                        class="block pt-3 pb-1 text-sm text-gray-700 dark:text-gray-600">Centre
                                        d'intérets</label>
                                    <select name="categorie[]" multiple
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                        >
                                        <option> option 1</option>
                                        <option> option 2</option>
                                        <option> option 3</option>
                                        <option> option 4</option>        
                                    </select>
                                </div>
                                <div class="w-1/3 mx-4">
                                    <label for="role"
                                        class="block pt-3 pb-1 text-sm text-gray-700 dark:text-gray-600">
                                        Rôle </label>
                                    <select name="role" multiple
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                        >
                                        <option>admin</option>
                                        <option>noobbees</option>
                                        <option>viewers</option>
                                        <option>nasus>all</option>        
                                    </select>
                                </div>
                            </div>
                          </div>
                          <div class="flex w-1/3">

                            <button type="submit"
                                class="flex justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md flex-end hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                Valider
                            </button>
                     
                    </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
  var loadFile = function(event) {
      var image = document.getElementById('img-output');
      image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>