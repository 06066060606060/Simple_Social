
<section class="mx-4 mt-1 bg-gray-100 max-w-7xl">
    <h1 class="mb-3 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl">
 Profil
    </h1>
   
      
    
    <div class="w-full mx-auto text-left bg-gray-100 lg:w-full md:text-center">
        <div class="" style="background-image:url('./img/backg.jpeg')">
            <div class="flex flex-row justify-center pt-8">
                <img src="/img/avatar.png" class="w-24 h-24 rounded-full" alt="Logo" />
            </div>
        </div>
        <h1 class="p-2 mb-6 text-xs font-bold tracking-widest text-purple-900 uppercase">{{ Auth::user()->name }}</h1>
      <p class="p-4 mb-6 text-xl font-bold text-gray-900 md:leading-tight md:text-3xl">
        “With their reliable and developer-friendly tools, our engineering team is freed up to focus on product and customer experiences.”
      </p>
      @foreach($users as $user)
      {{ $user->bio }}
      @endforeach
    </div>

  </section>
  