   <div class="banner" style="background-image:url('./img/top.jpg')">
       <div class="flex flex-row justify-center pt-8">
           <img src="/img/logo.png" alt="Logo" />
       </div>
   </div>
   <section class="min-h-screen bg-gray-200" x-data="{ sideBar: false, settings: false, mur: true, profils: false }">
       <nav class="fixed z-20 h-screen pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0 top-48"
           :class="{ '-translate-x-full': !sideBar, 'translate-x-0': sideBar }" @click.away="sideBar = false">

           <nav class="pt-8 text-gray-500" aria-label="Main Navigation">

               <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                   href="#" @click="settings = false, mur = true, profils = false">
                   <i class="pl-4 pr-4 fa-solid fa-house"></i>Accueil</a>

               <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                   href="#">
                   <i class="pl-4 pr-4 fa-solid fa-magnifying-glass-plus"></i>Decouvrir</a>
               <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                   href="#">
                   <i class="pl-4 pr-4 fa-solid fa-user-group"></i>Liste d'amis</a>
               <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                   href="#">
                   <i class="pl-[18px] pr-4  fa-solid fa-location-dot"></i>Centres d'interéts</a>
               <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200"
                   href="#">
                   <i class="pl-[18px] pr-4  fa-solid fa-message"></i>Messages</a>

             


             

           </nav>
       </nav>
