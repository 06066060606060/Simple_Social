<section class="p-4 mx-4 mt-1 bg-gray-100 max-w-7xl">
    <div class="px-3 font-sans leading-normal tracking-normal bg-grey-100">
        <div class="container pt-2 mx-auto" x-data="loadUsers()">
            <input placeholder="Rechercher un utilisateurs..." type="search"
                class="block w-full px-4 py-3 font-bold text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow" />
            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($users as $user)
                    <a href="/profil/{{ $user->id }}">
                        <div
                            class="flex items-center p-3 transition duration-150 ease-in-out transform shadow hover:bg-indigo-100 hover:shadow-lg hover:rounded hover:scale-105">
                            <img class="w-10 h-10 mr-4 rounded-full" src="{{ Storage::url($user->photo) }}" />
                            <div class="text-sm">
                                <p class="leading-none text-gray-900" text="">{{ $user->pseudo }} </p>
                                <p class="leading-none pt-1 text-xs text-gray-600" text="">{{ $user->name }} </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</section>
