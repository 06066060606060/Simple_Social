<div class="mx-4 rounded"> 
    <h1 class="p-4 mb-1 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl bg-white">
        Liste des posts
    </h1>
    @foreach ($posts->where('user_id', '=', $user->id) as $post)
    <article class="px-4 py-2 mx-auto mb-2 bg-gray-100 max-w-7xl">
       
        <div class="w-full mx-auto mb-4 text-left md:w-3/4">
            <div class="pb-2 mb-2 ">
                <a href="/profil/{{ $post->user->id }}">
                    <div class="flex flex-row items-center my-4">
                        <div>
                            <img src="{{ Storage::url($post->user->photo) }}" class="rounded-full h-14 w-14" alt="avatar" />
                        </div>
                        <div class="ml-4">
                            <h2 class="font-bold tracking-widest text-blue-600">{{ $post->user->name }}</h2>
                            <span class="font-semibold text-gray-500 text-s lg:mb-0">{{ $post->user->pseudo }}</span>
                        </div>
                        <div class="">
                            <p class="pb-6 ml-4 text-base text-gray-500"> {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @if(($post->image) != null)
            <img src="{{ Storage::url($post->image) }}" class="w-full h-auto mx-auto rounded" alt="post image" />
        @else
           {{-- <img src="https://source.unsplash.com/random" class="w-full h-auto mx-auto rounded" alt="post image" /> --}}
        @endif
        </div>

        <div class="w-full mx-auto prose md:w-3/4">
            <p class="text-center">
              {{ html_entity_decode($post->content); }}
            </p>

            {{-- like --}}
            <div class="flex flex-row justify-end w-full px-1 mx-auto my-4 mb-2 space-x-2 border-b border-gray-300">
                @auth
                <form method="post" action="/PostLike" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    @auth
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    @endauth
                    <button type="submit"><i class="px-1 py-2 text-gray-700 fa-solid fa-heart hover:text-red-600 active:text-red-800"></i></button>
                </form>
                @endauth
                @guest
                <button type="submit"><i class="px-1 py-2 text-gray-700 fa-solid fa-heart hover:text-red-600 active:text-red-800"></i></button>
                @endguest
                <span class="pt-1">{{ $likes->where('post_id', '=', $post->id)->count() }}</span>
            </div>
        </div>

        {{-- ajouter commentaires --}}
        @auth
        <form method="post" action="/addcomm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="flex flex-row w-full mx-auto my-2 space-x-2 md:w-3/4">
            <img src="{{ Storage::url(Auth::user()->photo) }}" class="w-12 h-12 rounded-full" />
                <input name="comm" class="w-full ml-2 border-0 rounded-lg placeholder:text-gray-800 bg-slate-300 form-input" type="text"
                placeholder="Laisser un commentaire">
        </div>
         </form>
        @endauth
        {{-- commentaires --}}
       
      
      @foreach ($comments->where('post_id', '=', $post->id)  as $comment)
        <div class="flex w-full mx-auto space-x-2 text-left border-gray-300 border-y md:w-3/4">

            <a href="/profil/{{ $comment->user->id }}" class="m-2 avatar avatar-sm">
                <img src="{{ Storage::url($comment->user->photo) }}" class="w-6 h-6" />
            </a>
            <div class="flex flex-col w-full">
                <div class="flex flex-row">
                <a href="/profil/{{ $comment->user->id }}">
                    <p class="p-2 text-base font-bold text-black">  {{ $comment->user->name }}</p>
                </a>
                    <span class="pt-3 text-xs text-gray-600"> {{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="w-full p-2 border-0 rounded-lg placeholder:text-white bg-slate-400">
                   {{ $comment->content }}
                </p>
                <div class="flex flex-row justify-end w-full px-1 mx-auto my-4 space-x-2">
                    @auth
                    <form method="post" action="/CommLike" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                        @auth
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        @endauth
                        <button type="submit"><i class="px-1 py-2 text-gray-700 fa-solid fa-heart hover:text-red-600 active:text-red-800"></i></button>
                    </form>
                    @endauth
                    @guest
                    <button type="submit"><i class="px-1 py-2 text-gray-700 fa-solid fa-heart hover:text-red-600 active:text-red-800"></i></button>
                    @endguest
                    <span class="pt-1">{{ $comments_likes->where('comment_id', '=', $comment->id)->count() }}</span>
                     <i class="px-1 pr-4 text-gray-700 fa-solid fa-ellipsis"></i>
                </div>
            </div>

        </div>
        
        @endforeach


    </article>
    @endforeach
</div>
