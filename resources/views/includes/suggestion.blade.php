<h1 class="mb-2 font-bold text-center text-gray-300">
    Suggestions d'amis
</h1>

{{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}
@foreach ($users as $user)
    <div class="flex flex-col hover:bg-gray-800 hover:text-gray-200">
        <div class="flex flex-col md:flex-col lg:flex-row text-left pt-2 md:items-center gap-2 pl-2">
            <img src=".{{ Storage::url($user->photo) }}" class="w-12 rounded-full h-12" alt="avatar" />
            <a class="p-0 m-1" href="">
                <p class="font-bold text-gray-400 hover:text-white">{{ $user->name }}</p>
            </a>
            <div class="flex justify-center w-full">
                <button
                    class="px-2 lg:mt-4 h-6 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">Ajouter</button>
                {{-- <button class=" py-1 px-2  text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600">Suprimer </button> --}}
            </div>

        </div>
        <div class="flex flex-row justify-center m-1">
            <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
            <p class="text-xs leading-none mx-1.5 "> 2 amis en commun </p>
        </div>
    </div>
@endforeach
