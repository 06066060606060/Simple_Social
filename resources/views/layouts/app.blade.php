<!doctype html>

<html lang="fr">

<head>
    @include('includes.head')
</head>

<body>

    <header class="header banner">
        @include('includes.header')
    </header>

    <div class="topnav">
        @include('includes.topnav')
    </div>

    <div class="row">
        <div class="column sideL">
            @include('includes.left')

        </div>

        <div class="column middle">
            @yield('main')
            @include('includes.footer')
        </div>

        <div class="column sideR">
            @include('includes.right')

        </div>
    </div>
</body>

</html>
