<section class="px-4 py-20   bg-gray-100">
    <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">Liste des amis</h2>
    <p class="mb-16 text-lg text-gray-500"></p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 lg:gap-x-10 gap-y-10">
        @foreach ($users as $user)
            <div class=" flex flex-col justify-center friends pl-2">
                <tr class="text-center border-b">
                    <td class=" px-2 py-2"><img class="w-12 h-12 m-2 rounded-full" src="./img/avatar2.png" alt=""></td>
                    <td class="px-2 text-blue-600"><a href="">{{ $user->name }}</a></td>
                    <td class="px-2">{{ $user->pseudo }}</td>
                    
                </tr>
            </div>
        @endforeach
    </div>
</section>
