<div class="mx-4 mt-1 bg-gray-100 max-w-7xl">
    <h1 class="p-4 mb-3 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl">
        Profil de {{ $user->pseudo }}
    </h1>
    
        <div class="w-full mx-auto text-left bg-gray-100 lg:w-full md:text-center">
            <div class="lazy" style="background-size: cover; height: 200px; width: 100%; background-repeat: no-repeat; background-image:url({{ $user->banniere }})">
                <div class="flex flex-row justify-center pt-8">
                    <img src="{{ $user->photo }}" class="w-24 h-24 mb-4 rounded-full" alt="Logo" />
                </div>
            </div>
            <h1 class="p-2 mb-2 text-xl font-bold tracking-widest text-purple-900 uppercase">{{ $user->name }}</h1>

            <p class="px-6 pb-8 mb-6 font-bold text-gray-900 md:leading-tight">{{ $user->bio }}</p>


        </div>
      
</div>

@include('includes.mesposts')