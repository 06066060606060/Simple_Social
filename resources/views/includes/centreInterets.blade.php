<section class="p-4 mx-4 mt-1 bg-gray-100 max-w-7xl">
    <div class="px-3 font-sans leading-normal tracking-normal bg-grey-100">
        <div class="container pt-2 mx-auto" x-data="loadUsers()">
            <input placeholder="Rechercher un centre d'interêt..." type="search"
                class="block w-full px-4 py-3 font-bold text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow" />
            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($interet as $interets)
                    <div
                        class="flex flex-col items-center justify-center  border border-gray-400 rounded-md friends">
                        <tr>
                           
                            <td class="px-2"><span>{{$interets->label}}<i class="px-1 py-2 fa-solid fa-heart"></i></span>
                            </td>
                            <td class="px-2 py-2 "><img class="flex items-center p-3 " src="{{ $interets->images}}"alt=""></td>

                            
                        </tr>
                    </div>
                    </a>
                @endforeach


            </div>
</section>
