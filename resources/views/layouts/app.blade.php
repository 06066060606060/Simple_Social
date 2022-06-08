<!doctype html>

<html>

<head>
    @include('includes.head')
</head>

<body>

 <header class="header">
    @include('includes.header')
 </header>
    

  <div class="topnav">
    @include('includes.topnav')
  </div>
 
  <div class="row">
    <div class="column side">
     @include('includes.left')
   
    </div>
  
    <div class="column middle">
        @yield('main')
    </div>

    <div class="column side">
      @include('includes.right')
    </div>

    <footer>
        {{-- @include('includes.footer') --}}
    </footer>


</body>

</html>
