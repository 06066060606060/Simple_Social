<nav class="flex flex-col pt-1 text-gray-500 lg:w-72 md:w-38 left">
   
         @auth
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="/">
        <i class="pl-4 pr-4 fa-solid fa-house"></i>Mon mur</a>
        @endauth
        @guest
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="/">
            <i class="pl-4 pr-4 fa-solid fa-house"></i>Accueil</a>
        @endguest
    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="/amis">
        <i class="pl-4 pr-4 fa-solid fa-user-group"></i>Liste d'amis</a>
    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="/interest">
        <i class="pl-[18px] pr-4  fa-solid fa-location-dot"></i>Centres d'interêts</a>
    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
        <i class="pl-[18px] pr-4  fa-solid fa-message"></i>Messages</a>
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
            <i class="pl-[18px] pr-4  fa-solid fa-bell"></i>Notifications</a>
    
</nav>
