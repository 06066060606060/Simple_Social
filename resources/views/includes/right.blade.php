
<nav class="pt-2 text-gray-500 right">
    @auth
    @include('includes.logged')
@endauth
    <div class="flex flex-col">
        <h1 class="mt-2 mb-2 text-center text-gray-300"> Amis en ligne </h1>
        <a class="flex items-center py-3 pl-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">
            <img class="w-8 h-8 mr-2 rounded-full" src="./img/Ellipse2.png" alt="Avatar" />David gerard</a>
        <a class="flex items-center py-3 pl-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">
            <img class="w-8 h-8 mr-2 rounded-full" src="./img/Ellipse2.png" alt="Avatar" />David gerard</a>
        <a class="flex items-center py-3 pl-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">
            <img class="w-8 h-8 mr-2 rounded-full" src="./img/Ellipse2.png" alt="Avatar" />David gerard</a>
    </div>
</nav>


<nav class="flex flex-col pt-8 text-gray-500 ">
    <h1 class="mb-3 font-bold text-center text-gray-300">
        Suggestions 
    </h1>
    <h1 class="mb-3 font-semibold text-left text-gray-300">
        Connaissez-vous...
    </h1>

{{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

    <div class="flex flex-row my-4 text-left hover:bg-gray-800 hover:text-gray-200">
        
            <img src="./img/Ellipse2.png" class="w-1/6 mx-4 my-2.5 rounded-full h-1/6 " alt="avatar" />
      
        <div class="flex flex-col ">
            <a class="p-0 m-1" href="">
                <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
            </a>
{{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  -----------------------------  --}}           
            <div class="flex justify-between mb-0.5">

                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" /> 
                <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
                <p class="text-xs leading-none mx-1.5 hover:text-black "> 2 amis en commun </p> 
            </div>
 {{-- ---------------------    ------------------------------------------------  -----------------------------  --}}  
            <div class="flex justify-center w-full my-3">
                <button class=" p-1.5 text-[8px] md:text-[10px] mx-1 md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600"> Ajouter </button>
                <button class=" p-1.5 text-[8px]  md:text-[10px] mx-1  md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600"> Suprimer </button>
            </div>
           
        </div>
    </div>

{{-- -----------------------------   ------------------- ------------------- --}}

{{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

<div class="flex flex-row my-4 text-left hover:bg-gray-800 hover:text-gray-200">
        
    <img src="./img/Ellipse2.png" class="w-1/6 mx-4 my-2.5 rounded-full h-1/6 " alt="avatar" />

<div class="flex flex-col ">
    <a class="p-0 m-1" href="">
        <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
    </a>
{{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  -----------------------------  --}}           
    <div class="flex justify-between mb-0.5">

        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" /> 
        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
        <p class="text-xs leading-none mx-1.5 hover:text-black "> 2 amis en commun </p> 
    </div>
{{-- ---------------------    ------------------------------------------------  -----------------------------  --}}  
    <div class="flex justify-center w-full my-3">
        <button class=" p-1.5 text-[8px] md:text-[10px] mx-1 md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600"> Ajouter </button>
        <button class=" p-1.5 text-[8px]  md:text-[10px] mx-1  md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600"> Suprimer </button>
    </div>
   
</div>
</div>

{{-- -----------------------------   ------------------- ------------------- --}}

{{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

<div class="flex flex-row my-4 text-left hover:bg-gray-800 hover:text-gray-200">
        
    <img src="./img/Ellipse2.png" class="w-1/6 mx-4 my-2.5 rounded-full h-1/6 " alt="avatar" />

<div class="flex flex-col ">
    <a class="p-0 m-1" href="">
        <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
    </a>
{{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  -----------------------------  --}}           
    <div class="flex justify-between mb-0.5">

        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" /> 
        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
        <p class="text-xs leading-none mx-1.5 hover:text-black "> 2 amis en commun </p> 
    </div>
{{-- ---------------------    ------------------------------------------------  -----------------------------  --}}  
    <div class="flex justify-center w-full my-3">
        <button class=" p-1.5 text-[8px] md:text-[10px] mx-1 md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600"> Ajouter </button>
        <button class=" p-1.5 text-[8px]  md:text-[10px] mx-1  md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600"> Suprimer </button>
    </div>
   
</div>
</div>

{{-- -----------------------------   ------------------- ------------------- --}}
{{-- -----------------------------   DEBUT BOUCLE  ------------------- --}}

<div class="flex flex-row my-4 text-left hover:bg-gray-800 hover:text-gray-200">
        
    <img src="./img/Ellipse2.png" class="w-1/6 mx-4 my-2.5 rounded-full h-1/6 " alt="avatar" />

<div class="flex flex-col ">
    <a class="p-0 m-1" href="">
        <p class="font-bold text-white hover:text-blue-200"> jok pololo </p>
    </a>
{{-- ---------------------     boucle amis en com miniature (limit a 3 ou 2 )  -----------------------------  --}}           
    <div class="flex justify-between mb-0.5">

        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" /> 
        <img src="./img/Ellipse2.png" class="w-3.5 h-3.5  rounded-full " alt="avatar" />
        <p class="text-xs leading-none mx-1.5 hover:text-black "> 2 amis en commun </p> 
    </div>
{{-- ---------------------    ------------------------------------------------  -----------------------------  --}}  
    <div class="flex justify-center w-full my-3">
        <button class=" p-1.5 text-[8px] md:text-[10px] mx-1 md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out bg-blue-500 rounded hover:bg-blue-600"> Ajouter </button>
        <button class=" p-1.5 text-[8px]  md:text-[10px] mx-1  md:p-0.5 lg:text-sm  font-bold text-white transition duration-300 ease-in-out rounded bg-slate-500 hover:bg-slate-600"> Suprimer </button>
    </div>
   
</div>
</div>

{{-- -----------------------------   ------------------- ------------------- --}}
</nav>
