<section class="p-4 mx-4 mt-1 bg-gray-100 max-w-7xl">
    <h1 class="pb-2 mb-3 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl">
        Centres d'intérêts
    </h1>
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($interets as $interets)
        <a href="">
            <div class="flex flex-col items-center justify-center pl-2 border border-gray-400 rounded-md friends">
                <tr>
                    <td class="px-2"><span>Jeux vidéo<i class="px-1 py-2 fa-solid fa-heart"></i></span></td>
                    <td class="px-2 py-2 "><img class=""
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVU0tDo3Wl6AQNGNMiMny0L4nhPvhsDVYRcQ&usqp=CAU"
                            alt=""></td>

                    <button
                        class=" before:content-['Ne_plus_aimer'] hover:before:content-['es-tu_sûr?'] p-1.5 text-[8px] md:text-[10px] mx-1 md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out bg-gray-500 rounded hover:bg-red-600">
                    </button>
                </tr>
            </div>
        </a>
        @endforeach

      
    </div>
</section>
