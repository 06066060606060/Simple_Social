
<nav class="flex flex-col py-2 text-gray-500 right">
    @auth
        @include('includes.logged')
    @endauth
   @include('includes.suggestion')

</nav>
