<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen">
        <span>Administration</span>
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
                class="inline-block w-full max-w-xl p-2 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <section class="">
                 
                        <button @click="modelOpen = false" class="text-gray-900 focus:outline-none hover:text-gray-700">
                        </button>

                        <div class="px-4 pt-1">
                            <div class="text-gray-800 bg-gray-100" x-data="{ selected: 'option-1' }">
                                <nav class="bg-gray-300 h-12">
                                    <ul class="flex font-bold">
                                        <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100': selected === 'option-1' }">
                                            <a href="#option-1" x-on:click="selected = 'option-1'">Liste des Utilisateurs</a>
                                        </li>
                                        <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100': selected === 'option-2' }">
                                            <a href="#option-2" x-on:click="selected = 'option-2'">Liste des Posts</a>
                                        </li>
                                    </ul>
                                </nav>
                        
                                <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'" class="p-4">
                                    <div class=" w-full">
                                        <!--Card-->
                                        <div id='recipients' class="p-2 bg-white rounded shadow">
                        
                                            <table id="example" class="stripe hover"
                                                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                                <thead class="bg-gray-500">
                                                    <tr>
                                                        <th data-priority="1">Avatar</th>
                                                        <th data-priority="2">Pseudo</th>
                                                        <th data-priority="4">Role</th>
                                                        <th data-priority="5">Visible</th>
                                                        <th data-priority="6">Gestion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                        
                                                    <tr class="text-center border-b">
                                                        <td class="px-2 py-2"><img class="mx-auto h-14 w-14 rounded-full" src=".{{ Storage::url($user->photo) }}"
                                                                alt=""></td>
                                                        <td class="px-2 text-black"><a href="">{{ $user->pseudo }}</a></td>
                                                        <td class="px-2">admin</td>
                                                        <td class="px-2">1</td>
                                                        <td class="flex flex-col mt-2">
                                                            @auth
                                                                @include('includes.edit')
                                                                @include('includes.delete')
                                                            @endauth
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                        
                                
                                </div>
                                <div x-cloak x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
                                    <div class=" w-full">
                                        <!--Card-->
                                        <div id='recipients' class="p-2 bg-white rounded shadow">
                        
                                            <table id="example2" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                                <thead class="bg-gray-500">
                                                    <tr>
                                                        <th data-priority="1">Contenue</th>
                                                        <th data-priority="2">Image</th>
                                                        <th data-priority="6">Gestion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($posts as $post)
                                                        <tr class="text-center border-b">
                                                            <td class="px-2 text-blue-600"><a href="">{{ $post->content }}</a></td>
                        
                                                            <td class="px-2 py-2"><img class="py-2 mx-auto w-12 h-auto" src=".{{ Storage::url($post->image) }}"
                        
                                                                    alt=""></td>
                                                            <td class="flex flex-col mt-2">
                                                                @auth
                                                                    @include('includes.editPost')
                                                                    @include('includes.deletePost')
                                                                @endauth
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                        
                                            </table>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
              
                        </div>

                </section>
            </div>
        </div>
    </div>
</div>