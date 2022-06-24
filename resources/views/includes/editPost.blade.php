<section class="p-4 mx-4 mt-1 bg-gray-100">
    <div class="flex items-center justify-center space-x-4">

        <h1 class="text-4xl font-medium text-gray-800">Editer un post</h1>

        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
        </button>
    </div>

    <form class="mt-5" method="post" action="/editerPost/{{ $post->id }}" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-col items-center w-full pb-2">
            <div class="mt-6">

                <div class="w-full">
                    <img class="object-cover w-64 h-auto" src="{{ $post->image }}">
                </div>

                <label for="files3"
                    class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Modifier
                    l'image</label>
                <input type="file" style="display:none" id="files3" name="imageb" value="">
                <label for="imglink"></label>
                <input type="text" style="display:none" name="imglink" value="{{ $post->image }}">
            </div>
            <div class="mt-4">
                <label for="content" class="block text-sm text-gray-700 dark:text-gray-600">Contenu</label>
                <textarea name="content" rows="4" cols="40"
                    class="block w-full px-8 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">{{ $post->content }}</textarea>
            </div>

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
