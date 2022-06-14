
                <section class="p-4 mt-1 bg-gray-200">
                    <div class="flex items-center justify-center space-x-4">
                     
                        <h1 class="text-4xl font-medium text-gray-800">Editer le profil</h1>

                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        </button>
                    </div>

                    <form class="mt-5" method="post" action="/editerUser/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="flex flex-row pb-2">
                                <div class="w-1/3 mt-4">
                                    <label for="pseudo"
                                        class="block text-sm text-gray-700 capitalize dark:text-gray-600">Pseudo</label>
                                    <input type="text" name="pseudo" value="{{ $user->pseudo }}"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                        required>
                                </div>
                                <div class="px-4 mt-7 w-52">
                                    <label for="files"
                                        class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Modifier
                                         avatar</label>
                                    <input type="file" style="display:none" id="files"
                                        name="images" value="" required>
                                        <label for="file2"
                                        class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Modifier banniére</label>
                                        <input type="file" style="display:none" id="file2" name="banniere" value="">
                                </div>
                                <div class="w-1/3"> 
                                    <img class="object-cover w-20 h-20 ml-8 rounded-full lg:w-32 lg:h-32" src="{{ $user->photo }}">
                                </div>
                            </div>
                            <div>
                                <label for="name"
                                    class="block text-sm text-gray-700 capitalize dark:text-gray-600">Nom Prénom</label>
                                <input type="text" name="name" placeholder="" value="{{ $user->name }}"
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm text-gray-700 capitalize dark:text-gray-600">Email</label>
                                <input type="text" name="email" placeholder="" value="{{ $user->email }}"
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    required>
                            </div>
                            <div class="mt-4">
                                <label for="bio"
                                    class="block text-sm text-gray-700 dark:text-gray-600">Biographie</label>
                                <textarea name="bio" rows="4" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    >{{ $user->bio }}"</textarea>
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

<script>
  var loadFile = function(event) {
      var image = document.getElementById('img-output');
      image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>