
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
