<div class="flex flex-col w-full max-w-lg pb-2 pr-4 mt-2 text-left lg:mx-auto ">
 
    <a href="/profil" class="flex flex-col items-center pb-2 ml-2 border-b border-gray-400 lg:flex-row md:flex-col">
        <img alt="blog" src="./img/avatar2.png" class="flex-shrink-0 object-cover object-center w-10 h-10 m-1 rounded-full">
        <span class="flex flex-col pl-3 ml-4">
            <span class="font-semibold text-gray-500 lg:mb-0">{{ Auth::user()->pseudo }}</span>
            <h2 class="text-xs font-semibold tracking-widest text-blue-600 uppercase"> {{ Auth::user()->name }} </h2>
        </span>

    </a>

</div>
