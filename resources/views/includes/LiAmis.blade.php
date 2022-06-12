<section class="p-4 mx-4 mt-1 bg-gray-100 max-w-7xl">
  <div class="px-3 font-sans leading-normal tracking-normal bg-grey-100">
    <div class="container pt-2 mx-auto" x-data="loadUsers()">
        <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)"
            x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()"
            placeholder="Rechercher un utilisateurs..." type="search"
            class="block w-full px-4 py-3 font-bold text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow" />
        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 lg:grid-cols-4">
            <template x-for="item in filteredUsers" :key="item">
                <div
                    class="flex items-center p-3 transition duration-150 ease-in-out transform shadow hover:bg-indigo-100 hover:shadow-lg hover:rounded hover:scale-105">
                    <img class="w-10 h-10 mr-4 rounded-full"
                        :src="'./storage/' + `${item.photo}`" />
                    <div class="text-sm">
                        <p class="leading-none text-gray-900"
                            x-text="item.name + ' (' + item.pseudo + ')'"></p>
                            <div class="flex flex-row">            
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
                <svg class="w-8 h-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polygon points="19 20 9 12 19 4 19 20"></polygon>
                    <line x1="5" y1="19" x2="5" y2="5"></line>
                </svg>
            </button>

            <!--Previous Button-->
            <button x-on:click="prevPage" :disabled="pageNumber == 0"
                :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                <svg class="w-8 h-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>

            <!-- Display page numbers -->
            <template x-for="(page,index) in pages()" :key="index">
                <button class="px-3 py-2 rounded"
                    :class="{ 'bg-indigo-600 text-white font-bold': index === pageNumber }"
                    type="button" x-on:click="viewPage(index)">
                    <span x-text="index+1"></span>
                </button>
            </template>

            <!--Next Button-->
            <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber >= pageCount() - 1 }">
                <svg class="w-8 h-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>

            <!--Last Button-->
            <button x-on:click="viewPage(Math.ceil(total/size)-1)"
                :disabled="pageNumber >= pageCount() - 1"
                :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber >= pageCount() - 1 }">
                <svg class="w-8 h-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24"
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
                    Page <span x-text="pageNumber+1"> </span> of
                    <span x-text="pageCount()"></span> | Showing
                    <span x-text="startResults()"></span> to
                    <span x-text="endResults()"></span>
                </div>

                <div class="w-full text-center sm:w-auto sm:text-right" x-show="total > 0">
                    Total <span class="font-bold" x-text="total"></span> results
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
        var sourceDatax = {!! json_encode($users) !!};

        function loadUsers() {
            return {
                search: "",
                pageNumber: 0,
                size: 10,
                total: "",
                myForData: sourceDatax,

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
</section>