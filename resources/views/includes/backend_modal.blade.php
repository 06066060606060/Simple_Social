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

          
                    <div x-data="{ selected: 'option-1' }">
                      
                            <div class="flex flex-row font-bold text-black">
                                <div class="" x-bind:class="{ 'bg-gray-300': selected === 'option-1' }">
                                    <a class="text-black" href="#option-1" x-on:click="selected = 'option-1'">Liste des Utilisateurs</a>
                                </div>
                                <div class="" x-bind:class="{ 'bg-gray-300': selected === 'option-2' }">
                                    <a class="text-black" href="#option-2" x-on:click="selected = 'option-2'">Liste des Posts</a>
                                </div>
                                <div class="" x-bind:class="{ 'bg-gray-300': selected === 'option-3' }">
                                    <a class="text-black" href="#option-3" x-on:click="selected = 'option-3'">Option 3</a>
                                </div>
                            </div>
                        

                        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'">


                            <div class="bg-grey-100 px-3 font-sans leading-normal tracking-normal">
                                <div class="container pt-2 mx-auto" x-data="loadUsers()">
                                    <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)"
                                        x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()"
                                        placeholder="Rechercher un utilisateurs..." type="search"
                                        class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg px-4 py-3" />
                                    <div class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                        <template x-for="item in filteredUsers" :key="item">
                                            <div
                                                class="flex items-center shadow hover:bg-indigo-100 hover:shadow-lg hover:rounded transition duration-150 ease-in-out transform hover:scale-105 p-3">
                                                <img class="w-10 h-10 rounded-full mr-4"
                                                    :src="'./storage/' + `${item.photo}`" />
                                                <div class="text-sm">
                                                    <p class="text-gray-900 leading-none"
                                                        x-text="item.name + ' (' + item.pseudo + ')'"></p>
                                                    <div class="flex flex-row">

                                                        <button href=""
                                                            class="h-6 px-2 my-2 mx-1 text-xs text-gray-100 bg-gray-700 hover:bg-blue-800 rounded focus:outline-none hover:text-gray-200">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </button>

                                                        <button :href=""
                                                            class="h-6 px-2 my-2 mx-1 text-xs text-gray-100 bg-gray-700 hover:bg-red-800 rounded focus:outline-none hover:text-gray-200">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="w-full md:w-1/2 mx-auto py-6 flex justify-between items-center"
                                        x-show="pageCount() > 1">
                                        <!--First Button-->
                                        <button x-on:click="viewPage(0)" :disabled="pageNumber == 0"
                                            :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                            <svg class="h-8 w-8 text-indigo-600" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                                <line x1="5" y1="19" x2="5" y2="5"></line>
                                            </svg>
                                        </button>

                                        <!--Previous Button-->
                                        <button x-on:click="prevPage" :disabled="pageNumber == 0"
                                            :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                                            <svg class="h-8 w-8 text-indigo-600" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                        </button>

                                        <!-- Display page numbers -->
                                        <template x-for="(page,index) in pages()" :key="index">
                                            <button class="px-3 py-2 rounded"
                                                :class="{
                                                    'bg-indigo-600 text-white font-bold': index ===
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
                                            <svg class="h-8 w-8 text-indigo-600" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg class="h-8 w-8 text-indigo-600" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                                <line x1="19" y1="5" x2="19" y2="19"></line>
                                            </svg>
                                        </button>
                                    </div>

                                    <div>
                                        <div
                                            class="mt-6 flex flex-wrap justify-between items-center text-sm leading-5 text-gray-700">
                                            <div class="w-full sm:w-auto text-center sm:text-left"
                                                x-show="pageCount() > 1">
                                                Page <span x-text="pageNumber+1"> </span> of
                                                <span x-text="pageCount()"></span> | Showing
                                                <span x-text="startResults()"></span> to
                                                <span x-text="endResults()"></span>
                                            </div>

                                            <div class="w-full sm:w-auto text-center sm:text-right" x-show="total > 0">
                                                Total <span class="font-bold" x-text="total"></span>
                                                results
                                            </div>

                                            <!--Message to display when no results-->
                                            <div class="mx-auto flex items-center font-bold text-red-500"
                                                x-show="total===0">
                                                <svg class="h-8 w-8 text-red-500" viewBox="0 0 24 24" stroke-width="2"
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
                        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
                            ...
                        </div>
                    </div>
            
            </div>
        </div>
    </div>
</div>
