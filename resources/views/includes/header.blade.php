   @auth
   <div class="banner" style="background-size: cover; height: 100px; width: 100%; background-repeat: no-repeat; background-image:url({{ Auth::user()->banniere }})">
    <div class="flex flex-row justify-center pt-1 md:pt-1 lg:pt-1">
        <img src="/img/logo.png" class="w-auto h-20" alt="Logo" />
    </div>
</div>
   @endauth
@guest
   <div class="banner" style="background-image:url('/img/topguest.jpg')">
       <div class="flex flex-row justify-center pt-1 md:pt-1 lg:pt-1">
           <img src="/img/logo.png" class="w-auto h-20" alt="Logo" />
       </div>
   </div>
   @endguest