<div x-data="{ modelOpen: false }">
    <input type="text" name="id" value="{{ $post['id'] }}" style="display:none">
    <button @click="modelOpen =!modelOpen">
        <i class="fa-solid fa-trash-can hover:text-red-700"></i>
    </button>
    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
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
                class="inline-block w-full max-w-xl p-8 my-32 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <h1 class="text-xl font-medium text-center text-gray-800">Confirmer la suppression?</h1>
                <div class="items-center space-x-4 bloc">

                    <div class="flex pt-6 justify-evenly">
                        <button @click="modelOpen = false"
                            class="h-12 px-6 my-4 text-gray-100 bg-gray-700 rounded-lg focus:outline-none hover:text-gray-200">
                            Annuler
                        </button>
                        <form action="{{ route('deletePost', $post['id']) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="h-12 px-6 my-4 text-gray-100 bg-red-700 rounded-lg focus:outline-none hover:text-gray-200">
                                Valider
                            </button>
                        </form>
                    </div>
                </div>
                


            </div>
        </div>
    </div>

</div>

