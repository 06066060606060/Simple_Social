<<<<<<< HEAD
<div x-cloak class="px-4 pt-1">
=======
<div class="px-4 pt-1">
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8
    <div class="text-gray-800 bg-gray-100" x-data="{ selected: 'option-1' }">
        <nav class="bg-gray-300">
            <ul class="flex font-bold">
                <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100': selected === 'option-1' }">
                    <a href="#option-1" x-on:click="selected = 'option-1'">Liste des Utilisateurs</a>
                </li>
                <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100': selected === 'option-2' }">
                    <a href="#option-2" x-on:click="selected = 'option-2'">Option 2</a>
                </li>
                <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100': selected === 'option-3' }">
                    <a href="#option-3" x-on:click="selected = 'option-3'">Option 3</a>
                </li>
            </ul>
        </nav>

        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'" class="p-4">
            <div class="leading-normal tracking-wider text-gray-900">
<<<<<<< HEAD
              <div class="w-full px-2">
          
                  <div id='recipients' class="p-4 mt-6 bg-white rounded shadow lg:mt-0">
                      <table class="w-full">
                          <thead>
                              <div class="py-2 mb-1 text-xl font-bold text-center break-normal md:text-2xl">
                                  <h1 class=>Liste des Utilisateurs:</h1>
                              </div>
                              <tr class="bg-gray-400 border rounded">
                                  <th class="px-2">Avatar</th>
                                  <th class="px-2">Pseudo</th>
                                  <th class="px-2">Email</th>
                                  <th class="px-2">Role</th>
                                  <th class="px-2">Visible</th>
                                  <th class="px-2">Gestion</th>
                              </tr>
                          </thead>
                          <tbody>
          
                              {{-- BOUCLE USER --}}
          
                              @foreach ( $users as $user )
                                
                           
                              <tr class="text-center border-b">
                                  <td class="px-2 py-2"><img class="py-2 mx-auto" src="./img/Ellipse2.png" alt=""></td>
                                  <td class="px-2 text-blue-600"><a href="">{{$user->name}}</a></td>
                                  <td class="px-2">{{$user->email}}</td>
                                  <td class="px-2">admin</td>
                                  <td class="px-2">1</td>
                                  <td class="flex flex-row items-center justify-center px-2 pt-4 mt-2">
                                      @auth
                                          @include('includes.edit')
                                          @include('includes.delete')
                                      @endauth
                                  </td>
                              </tr>
                             
                             
                              @endforeach
                             
          
          
                              {{-- FIN  BOUCLE USER --}}
          
                          </tbody>
          
                      </table>
                  </div>
              </div>
          </div>
          
          </div>
      
          <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
      
          </div>
      
          <div x-show.transition.in.opacity.duration.750ms="selected === 'option-3'" class="p-4">
            ...
        </div>
=======
                <div class="w-full px-2">

                    <div id='recipients' class="p-4 mt-6 bg-white rounded shadow lg:mt-0">
                        <table>
                            <thead>
                                <div class="py-2 mb-1 text-xl font-bold text-center break-normal md:text-2xl">
                                    <h1 class=>Liste des Utilisateurs:</h1>
                                </div>
                                <tr class="bg-gray-400 border rounded">
                                    <th class="px-2">Avatar</th>
                                    <th class="px-2">Pseudo</th>
                                    <th class="px-2">Email</th>
                                    <th class="px-2">Role</th>
                                    <th class="px-2">Visible</th>
                                    <th class="px-2">Gestion</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- BOUCLE USER --}}

                                @foreach ($users as $user)
                                    <tr class="text-center border-b">
                                        <td class="px-2 py-2"><img class="py-2 mx-auto" src="./img/Ellipse2.png"
                                                alt=""></td>
                                        <td class="px-2 text-blue-600"><a href="">{{ $user->pseudo }}</a></td>
                                        <td class="px-2">{{ $user->email }}</td>
                                        <td class="px-2">admin</td>
                                        <td class="px-2">1</td>
                                        <td class="flex flex-col mt-2">
                                            @auth
                                                @include('includes.edit')
                                                @include('includes.delete')
                                            @endauth
                                        </td>
                                    </tr>
                                @endforeach

                                {{-- FIN  BOUCLE USER --}}

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
test
        </div>

        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-3'" class="p-4">
          ...
      </div>
>>>>>>> 4bd216b123f8591a2e8d04cf3c9eb8889904b8b8
    </div>
</div>
