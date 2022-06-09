<nav class="flex flex-col py-2 text-gray-500 right">
    @auth
        @include('includes.logged')
    @endauth
    <h1 class="mb-2 font-bold text-center text-gray-300">
        Suggestions d'amis
    </h1>

    {{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

    <div class="flex flex-row text-left py-2 hover:bg-gray-800 hover:text-gray-200">

        <img src="./img/Ellipse2.png" class="w-1/6 mx-4 rounded-full h-1/6 " alt="avatar" />

        <div class="flex flex-col ">
            <a class="p-0 m-1" href="">
                <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
            </a>
            {{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  ----------------------------- --}}
            <div class="flex justify-between mb-0.5">

                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <p class="text-xs leading-none mx-1.5 "> 2 amis en commun </p>
            </div>
            {{-- ---------------------    ------------------------------------------------  ----------------------------- --}}
            <div class="flex justify-center w-full my-1">
                <button
                    class=" py-1 px-2 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">
                    Ajouter </button>
                <button
                    class=" py-1 px-2  text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600">
                    Suprimer </button>
            </div>

        </div>
    </div>

    {{-- -----------------------------   ------------------- ------------------- --}}
       {{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

       <div class="flex flex-row text-left py-2 hover:bg-gray-800 hover:text-gray-200">

        <img src="./img/Ellipse2.png" class="w-1/6 mx-4 rounded-full h-1/6 " alt="avatar" />

        <div class="flex flex-col ">
            <a class="p-0 m-1" href="">
                <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
            </a>
            {{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  ----------------------------- --}}
            <div class="flex justify-between mb-0.5">

                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <p class="text-xs leading-none mx-1.5 "> 2 amis en commun </p>
            </div>
            {{-- ---------------------    ------------------------------------------------  ----------------------------- --}}
            <div class="flex justify-center w-full my-1">
                <button
                    class=" py-1 px-2 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">
                    Ajouter </button>
                <button
                    class=" py-1 px-2  text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600">
                    Suprimer </button>
            </div>

        </div>
    </div>

    {{-- -----------------------------   ------------------- ------------------- --}}
        {{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

        <div class="flex flex-row text-left py-2 hover:bg-gray-800 hover:text-gray-200">

            <img src="./img/Ellipse2.png" class="w-1/6 mx-4 rounded-full h-1/6 " alt="avatar" />
    
            <div class="flex flex-col ">
                <a class="p-0 m-1" href="">
                    <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
                </a>
                {{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  ----------------------------- --}}
                <div class="flex justify-between mb-0.5">
    
                    <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                    <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                    <p class="text-xs leading-none mx-1.5 "> 2 amis en commun </p>
                </div>
                {{-- ---------------------    ------------------------------------------------  ----------------------------- --}}
                <div class="flex justify-center w-full my-1">
                    <button
                        class=" py-1 px-2 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">
                        Ajouter </button>
                    <button
                        class=" py-1 px-2  text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600">
                        Suprimer </button>
                </div>
    
            </div>
        </div>
    
        {{-- -----------------------------   ------------------- ------------------- --}}
            {{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

    <div class="flex flex-row text-left py-2 hover:bg-gray-800 hover:text-gray-200">

        <img src="./img/Ellipse2.png" class="w-1/6 mx-4 rounded-full h-1/6 " alt="avatar" />

        <div class="flex flex-col ">
            <a class="p-0 m-1" href="">
                <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
            </a>
            {{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  ----------------------------- --}}
            <div class="flex justify-between mb-0.5">

                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <p class="text-xs leading-none mx-1.5 "> 2 amis en commun </p>
            </div>
            {{-- ---------------------    ------------------------------------------------  ----------------------------- --}}
            <div class="flex justify-center w-full my-1">
                <button
                    class=" py-1 px-2 text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600">
                    Ajouter </button>
                <button
                    class=" py-1 px-2  text-[8px] md:text-[10px] mx-2 text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600">
                    Suprimer </button>
            </div>

        </div>
    </div>

    {{-- -----------------------------   ------------------- ------------------- --}}
</nav>
