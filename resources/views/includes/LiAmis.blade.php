<section class="p-4 mx-4 mt-1 bg-gray-100 max-w-7xl">
  <h1 class="pb-2 mb-3 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl">
    Liste d'amis
       </h1>
  <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @foreach ($users as $user)
      <a href="">
          <div class="flex flex-col items-center justify-center pl-2 border border-gray-400 rounded-md friends">
              <tr>
         
                  <td class="px-2 py-2 "><img class="w-12 h-12 m-2 rounded-full" src="./img/avatar2.png" alt=""></td>
                  <td class="px-2 text-blue-600"><span>{{ $user->name }}</span></td>
                  <td class="px-2"><span>{{ $user->pseudo }}</span></td>
              
              </tr>
          </div>
        </a>
      @endforeach
  </div>
</section>