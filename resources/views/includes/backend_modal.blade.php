<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen">
        <span class="text-gray-400 text-bold hover:text-black">Administration</span>
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
                            <span class="px-4" href="#option-1" x-on:click="selected = 'option-1'">Liste des
                                Utilisateurs</span>
                        </div>
                        <div x-bind:class="{ 'bg-gray-200 pb-4 rounded-t': selected === 'option-2' }">
                            <span class="px-4" href="#option-2" x-on:click="selected = 'option-2'">Liste des
                                Posts</span>
                        </div>
                    </div>
                    <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'">


                        <div class="px-3 font-sans leading-normal tracking-normal bg-gray-200">
                            <div class="container pt-2 mx-auto" x-data="loadUsers()">
                                <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)"
                                    x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()"
                                    placeholder="Rechercher un utilisateurs..." type="search"
                                    class="block w-full px-4 py-3 font-bold text-gray-700 bg-white rounded-lg focus:outline-none focus:bg-white focus:shadow" />
                                <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 lg:grid-cols-4">
                                    <template x-for="item in filteredUsers" :key="item">

                                        <div
                                            class="flex items-center p-3 transition duration-150 ease-in-out transform bg-gray-100 shadow hover:bg-blue-200 hover:shadow-lg hover:rounded hover:scale-105">

                                            <img class="w-10 h-10 mr-4 rounded-full"
                                                :src="'/storage/' + `${item.photo}`" />
                                            <div class="text-sm">
                                                <p class="leading-none text-gray-900" x-text="item.name"></p>
                                                <p class="py-1 text-xs leading-none text-gray-600" x-text="item.pseudo">
                                                </p>
                                                <a x-bind:href="'/profil/' + `${item.id}`">Profil</a>
                                            </div>

                                            <div class="flex flex-col pl-2">

                                                 <a  x-bind:href="'/editUsers/' + `${item.id}`"
                                                    class="h-6 px-2 pt-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>

                                                <form method="post" x-bind:action="'/deleteUser/' + `${item.id}`"
                                                class="h-6 px-2 pt-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">
                                                @csrf
                                                @method('delete')
                                               
                                                <button type="submit"> <i class="fa-solid fa-trash-can"></i></button>
                                            </form>

                                            </div>
                                        </div>

                                </div>

                                </template>
                            </div>

                            <div class="flex items-center justify-between w-full py-6 mx-auto md:w-1/2"
                                x-show="pageCount() > 1">
                                <!--First Button-->
                                <button x-on:click="viewPage(0)" :disabled="pageNumber == 0"
                                    :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                        <line x1="5" y1="19" x2="5" y2="5"></line>
                                    </svg>
                                </button>

                                <!--Previous Button-->
                                <button x-on:click="prevPage" :disabled="pageNumber == 0"
                                    :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>

                                <!-- Display page numbers -->
                                <template x-for="(page,index) in pages()" :key="index">
                                    <button class="px-3 py-2 rounded"
                                        :class="{
                                            'bg-gray-600 text-white font-bold': index ===
                                                pageNumber
                                        }"
                                        type="button" x-on:click="viewPage(index)">
                                        <span x-text="index+1"></span>
                                    </button>
                                </template>

                                <!--Next Button-->
                                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                                    :class="{
                                        'disabled cursor-not-allowed text-gray-600': pageNumber >=
                                            pageCount() - 1
                                    }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>

                                <!--Last Button-->
                                <button x-on:click="viewPage(Math.ceil(total/size)-1)"
                                    :disabled="pageNumber >= pageCount() - 1"
                                    :class="{
                                        'disabled cursor-not-allowed text-gray-600': pageNumber >=
                                            pageCount() - 1
                                    }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                        <line x1="19" y1="5" x2="19" y2="19"></line>
                                    </svg>
                                </button>
                            </div>

                            <div>
                                <div
                                    class="flex flex-wrap items-center justify-between mt-6 text-sm leading-5 text-gray-700">
                                    <div class="w-full text-center sm:w-auto sm:text-left" x-show="pageCount() > 1">
                                        Page <span x-text="pageNumber+1"> </span> sur
                                        <span x-text="pageCount()"></span> | Voir
                                        <span x-text="startResults()"></span> à
                                        <span x-text="endResults()"></span>
                                    </div>

                                    <div class="w-full pb-4 text-center sm:w-auto sm:text-right" x-show="total > 0">
                                        Total <span class="font-bold" x-text="total"></span>
                                        Utilisateurs
                                    </div>

                                    <!--Message to display when no results-->
                                    <div class="flex items-center mx-auto font-bold text-red-500" x-show="total===0">
                                        <svg class="w-8 h-8 text-red-500" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 16a10 10 0 0 1 6 -1.5" />
                                        </svg>

                                        <span class="ml-4"> No results!!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var sourceData = {!! json_encode($users) !!};

                            function loadUsers() {
                                return {
                                    search: "",
                                    pageNumber: 0,
                                    size: 10,
                                    total: "",
                                    myForData: sourceData,

                                    get filteredUsers() {
                                        const start = this.pageNumber * this.size,
                                            end = start + this.size;

                                        if (this.search === "") {
                                            this.total = this.myForData.length;
                                            return this.myForData.slice(start, end);
                                        }

                                        //Return the total results of the filters
                                        this.total = this.myForData.filter((item) => {
                                            return item.name
                                                .toLowerCase()
                                                .includes(this.search.toLowerCase());
                                        }).length;

                                        //Return the filtered data
                                        return this.myForData
                                            .filter((item) => {
                                                return item.name
                                                    .toLowerCase()
                                                    .includes(this.search.toLowerCase());
                                            })
                                            .slice(start, end);
                                    },

                                    //Create array of all pages (for loop to display page numbers)
                                    pages() {
                                        return Array.from({
                                            length: Math.ceil(this.total / this.size),
                                        });
                                    },

                                    //Next Page
                                    nextPage() {
                                        this.pageNumber++;
                                    },

                                    //Previous Page
                                    prevPage() {
                                        this.pageNumber--;
                                    },

                                    //Total number of pages
                                    pageCount() {
                                        return Math.ceil(this.total / this.size);
                                    },

                                    //Return the start range of the paginated results
                                    startResults() {
                                        return this.pageNumber * this.size + 1;
                                    },

                                    //Return the end range of the paginated results
                                    endResults() {
                                        let resultsOnPage = (this.pageNumber + 1) * this.size;

                                        if (resultsOnPage <= this.total) {
                                            return resultsOnPage;
                                        }

                                        return this.total;
                                    },

                                    //Link to navigate to page
                                    viewPage(index) {
                                        this.pageNumber = index;
                                    },
                                };
                            }
                        </script>
                    </div>
                </div>

                <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'">
                    <div class="px-3 font-sans leading-normal tracking-normal bg-gray-200">
                        <div class="container pt-2 mx-auto" x-data="loadPosts()">
                            <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)"
                                x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()"
                                placeholder="Rechercher un post..." type="search"
                                class="block w-full px-4 py-3 font-bold text-gray-700 bg-white rounded-lg focus:outline-none focus:bg-white focus:shadow" />
                            <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-1 lg:grid-cols-1">
                                <template x-for="item in filteredPosts" :key="item">
                                    <div
                                        class="flex flex-row justify-between p-3 mx-4 transition duration-150 ease-in-out transform bg-gray-100 shadow hover:bg-blue-200 hover:shadow-lg hover:rounded hover:scale-105">
                                        <img class="w-24 h-auto mr-4" :src="'/storage/' + `${item.image}`" />
                                        <div class="flex flex-col text-sm flex-start">
                                            <span class="text-xs text-gray-400" x-text="item.user.name"></span>
                                            <p class="leading-none text-gray-900 break-words" x-text="item.content"></p>
                                        </div>
                                        <div class="flex flex-row">

                                            <a  x-bind:href="'/editPosts/' + `${item.id}`"
                                            class="h-6 px-2 pt-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">

                                            <button type="submit"> <i class="fa-solid fa-pencil"></i></button>
                                            </a>

                                            <form method="post" x-bind:action="'/deletePost/' + `${item.id}`"
                                                class="h-6 px-2 pt-1 mx-1 my-2 text-xs text-gray-100 bg-gray-700 rounded hover:bg-blue-800 focus:outline-none hover:text-gray-200">
                                                @csrf
                                                @method('delete')
                                               
                                                <button type="submit"> <i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            <div class="flex items-center justify-between w-full py-6 mx-auto md:w-1/2"
                                x-show="pageCount() > 1">
                                <!--First Button-->
                                <button x-on:click="viewPage(0)" :disabled="pageNumber == 0"
                                    :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                        <line x1="5" y1="19" x2="5" y2="5"></line>
                                    </svg>
                                </button>

                                <!--Previous Button-->
                                <button x-on:click="prevPage" :disabled="pageNumber == 0"
                                    :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>

                                <!-- Display page numbers -->
                                <template x-for="(page,index) in pages()" :key="index">
                                    <button class="px-3 py-2 rounded"
                                        :class="{
                                            'bg-gray-600 text-white font-bold': index ===
                                                pageNumber
                                        }"
                                        type="button" x-on:click="viewPage(index)">
                                        <span x-text="index+1"></span>
                                    </button>
                                </template>

                                <!--Next Button-->
                                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                                    :class="{
                                        'disabled cursor-not-allowed text-gray-600': pageNumber >=
                                            pageCount() - 1
                                    }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>

                                <!--Last Button-->
                                <button x-on:click="viewPage(Math.ceil(total/size)-1)"
                                    :disabled="pageNumber >= pageCount() - 1"
                                    :class="{
                                        'disabled cursor-not-allowed text-gray-600': pageNumber >=
                                            pageCount() - 1
                                    }">
                                    <svg class="w-8 h-8 text-gray-600" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                        <line x1="19" y1="5" x2="19" y2="19"></line>
                                    </svg>
                                </button>
                            </div>

                            <div>
                                <div
                                    class="flex flex-wrap items-center justify-between mt-6 text-sm leading-5 text-gray-700">
                                    <div class="w-full text-center sm:w-auto sm:text-left" x-show="pageCount() > 1">
                                        Page <span x-text="pageNumber+1"> </span> sur
                                        <span x-text="pageCount()"></span> | De
                                        <span x-text="startResults()"></span> à
                                        <span x-text="endResults()"></span>
                                    </div>

                                    <div class="w-full pb-4 text-center sm:w-auto sm:text-right" x-show="total > 0">
                                        Total <span class="font-bold" x-text="total"></span>
                                        posts
                                    </div>

                                    <!--Message to display when no results-->
                                    <div class="flex items-center mx-auto font-bold text-red-500" x-show="total===0">
                                        <svg class="w-8 h-8 text-red-500" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 16a10 10 0 0 1 6 -1.5" />
                                        </svg>

                                        <span class="ml-4"> No results!!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var sourceData2 = {!! json_encode($posts) !!};

                            function loadPosts() {
                                return {
                                    search: "",
                                    pageNumber: 0,
                                    size: 10,
                                    total: "",
                                    myForData: sourceData2,

                                    get filteredPosts() {
                                        const start = this.pageNumber * this.size,
                                            end = start + this.size;

                                        if (this.search === "") {
                                            this.total = this.myForData.length;
                                            return this.myForData.slice(start, end);
                                        }

                                        //Return the total results of the filters
                                        this.total = this.myForData.filter((item) => {
                                            return item.name
                                                .toLowerCase()
                                                .includes(this.search.toLowerCase());
                                        }).length;

                                        //Return the filtered data
                                        return this.myForData
                                            .filter((item) => {
                                                return item.name
                                                    .toLowerCase()
                                                    .includes(this.search.toLowerCase());
                                            })
                                            .slice(start, end);
                                    },

                                    //Create array of all pages (for loop to display page numbers)
                                    pages() {
                                        return Array.from({
                                            length: Math.ceil(this.total / this.size),
                                        });
                                    },

                                    //Next Page
                                    nextPage() {
                                        this.pageNumber++;
                                    },

                                    //Previous Page
                                    prevPage() {
                                        this.pageNumber--;
                                    },

                                    //Total number of pages
                                    pageCount() {
                                        return Math.ceil(this.total / this.size);
                                    },

                                    //Return the start range of the paginated results
                                    startResults() {
                                        return this.pageNumber * this.size + 1;
                                    },

                                    //Return the end range of the paginated results
                                    endResults() {
                                        let resultsOnPage = (this.pageNumber + 1) * this.size;

                                        if (resultsOnPage <= this.total) {
                                            return resultsOnPage;
                                        }

                                        return this.total;
                                    },

                                    //Link to navigate to page
                                    viewPage(index) {
                                        this.pageNumber = index;
                                    },
                                };
                            }
                        </script>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
