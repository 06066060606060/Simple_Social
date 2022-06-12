<div class="mx-4 my-1 rounded">
    <article class="px-4 pt-2 bg-gray-100 max-w-7xl">
        <form method="post" action="/addpost" enctype="multipart/form-data">
            {{-- ajouter commentaires --}}
            <div class="flex flex-row w-full pb-4 mt-2 space-x-2">
                <img src="{{ Storage::url(Auth::user()->photo) }}" class="w-12 h-12 rounded-full" />

                @csrf
                <input name="content"
                    class="w-full ml-2 border-0 rounded-lg placeholder:text-gray-600 bg-slate-300 form-input" type="text"
                    placeholder="Ajouter un post" required>
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <label for="files1" class=""><i class="px-2 py-4 rounded-lg bg-slate-300 fa-solid fa-images hover:bg-slate-400"></i></label>
                <input type="file" style="display:none" id="files1" name="imagea">
                <button type="submit"><i class="px-2 py-4 rounded-lg bg-slate-300 fa-solid fa-feather-pointed hover:bg-slate-400"></i></button>

            </div>

        </form>
    </article>
</div>
