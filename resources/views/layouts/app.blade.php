<!doctype html>

<html>

<head>
    @include('includes.head')
</head>

<body>

    <main>
        @include('includes.header')
        @yield('main')
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
            x-cloak></div>
        </section>
    </main>


    <footer>
        @include('includes.footer')
    </footer>


</body>

</html>
