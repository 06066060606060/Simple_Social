<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen">
        <i class="-mt-6 text-white fa-solid fa-gear hover:text-black"></i>
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
                class="inline-block w-full max-w-3xl p-2 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-3xl">

                <div x-data="{ selected: 'option-1' }">
                    <div class="flex flex-row font-bold">
                        <div x-bind:class="{ 'bg-gray-200 pb-4 rounded-t text-black': selected === 'option-1' }">
                            <span class="px-4" href="#option-1" x-on:click="selected = 'option-1'">Mon
                                Profil</span>
                        </div>
                        <div x-bind:class="{ 'bg-gray-200 pb-4 rounded-t': selected === 'option-2' }">
                            <span class="px-4" href="#option-2" x-on:click="selected = 'option-2'">Liste de mes
                                Posts</span>
                        </div>
                    </div>
                    <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'">
                        @include('includes.editUser')
                    </div>


                    <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'">
                        <div class="flex flex-col">
                            @foreach ($posts->where('user_id', '=', $user->id) as $post)
                                <div class="flex flex-row justify-between p-3 mx-4 my-1 transition duration-150 ease-in-out transform bg-gray-100 shadow hover:bg-blue-200 hover:shadow-lg hover:rounded hover:scale-105">
                                    <img class="w-24 h-auto mr-4" src="{{ Storage::url($post->image) }}" />
                                    <div class="flex flex-col text-sm flex-start">
                                        <span class="text-xs text-gray-400" >{{ $post->user->name }}</span>
                                        <p class="leading-none text-gray-900 break-words" >{{ html_entity_decode($post->content); }}</p>
                                       
                                    </div>
                                    <div class="">

                                        <a href="/editPosts/{{ $post->id }}" class="h-6 px-2 pt-1 pb-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">
                                       <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <form method="post" action="/deletePost/{{ $post->id }}"
                                            class="h-6 px-2 pt-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">
                                            @csrf
                                            @method('delete')
                                           
                                            <button type="submit"> <i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
