<h1 class="mb-2 font-bold text-center text-gray-300">
    Suggestions d'amis
</h1>


@foreach ($usersRandom as $user)
    <div class="w-full hover:bg-gray-800 hover:text-gray-200">
        <div class="flex flex-col w-full gap-2 pt-2 pl-2 text-left md:flex-col lg:flex-row md:items-center">

            <img src="{{ $user->photo }}" class="w-12 h-12 bg-cover rounded-full" alt="avatar" />
            <a class="p-0 m-1" href="/profil/{{ $user->id }}">
                <p class="font-bold text-gray-400 hover:text-white">{{ $user->name }}</p>
            </a>
            <div class="flex w-full md:justify-center lg:justify-end">
                <button
                    class="px-2 lg:mt-4 h-6 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">Ajouter</button>
            </div>
        </div>
        <div class="flex flex-row justify-center m-1">
            <img src="/img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
            <p class="text-xs leading-none mx-1.5 ">{{ rand(0, 10) }} amis en commun </p>
        </div>
    </div>
@endforeach
