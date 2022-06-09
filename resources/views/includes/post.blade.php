<div class="mx-4 my-1 rounded">
    @foreach ($posts as $post)
        
    <article class="px-4 py-2 mx-auto bg-gray-100 max-w-7xl mb-2">
        <div class="w-full mx-auto mb-4 text-left md:w-3/4">
            <div class="pb-2 mb-2 ">
                <a href="">
                    <div class="flex flex-row items-center my-4">
                        <div>
                            <img src="./img/Ellipse2.png" class="rounded-full h-50 w-50" alt="avatar" />
                        </div>
                        <div class="ml-4">

                            <p class="text-base font-bold text-black">auteur</p>

                        </div>
                        <div class="">
                            <p class="ml-4 text-base text-gray-500"> {{$post->created_at}}</p>
                        </div>
                    </div>
                </a>
            </div>
            <img src="./img/IMG_20220120_154514[1514].jpg" class="w-3/4 h-auto mx-auto rounded" alt="post image" />
        </div>

        <div class="w-full mx-auto prose md:w-3/4">
            <p>
              {{$post->contenu}}
            </p>

            {{-- like --}}

            <div class="flex flex-row justify-end w-full px-1 mx-auto my-4 mb-2 space-x-2 border-b border-gray-300">
                <a href=""> <i class="px-1 py-2 fa-solid fa-heart"></i></a>
                <span class="pt-1">13</span>
            </div>
        </div>

        {{-- ajouter commentaires --}}
        <div class="flex flex-row w-full mx-auto my-2 space-x-2 md:w-3/4">
            <img src="./img/avatar.png" class="w-12 h-12 pt-1 rounded-full" />
            <input class="w-full ml-2 border-0 rounded-lg placeholder:text-gray-800 bg-slate-300 form-input" type="text"
                placeholder="Laisser un commentaire">
        </div>

        {{-- commentaires --}}
        <div class="flex w-full mx-auto mb-6 space-x-2 text-left border-gray-300 border-y md:w-3/4">
            <a href="#" class="m-2 avatar avatar-sm">
                <img src="./img/Ellipse2.png" class="w-6 h-6" />
            </a>
            <div class="flex flex-col">
                <a href="">
                    <p class="p-2 text-base font-bold text-black"> jok pololo </p>
                </a>
                <p class="w-full p-2 border-0 rounded-lg placeholder:text-white bg-slate-300">Lifе goes on and on and
                    on
                    and on and on and
                    On and on and on
                    On and on and on and on and on and
                    On and on and on
                </p>
                <div class="flex flex-row justify-end w-full px-1 mx-auto my-4 space-x-2">
                    <a href=""> <i class="px-1 fa-solid fa-heart"></i></a>
                    <span>2</span>
                    <a href=""> <i class="px-1 pr-4 fa-solid fa-ellipsis"></i></a>
                </div>
            </div>
        </div>
    </article>
    @endforeach
</div>
