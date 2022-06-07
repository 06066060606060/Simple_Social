
<div x-cloak class="pt-1 px-4">
    <div class="bg-gray-100 text-gray-800" x-data="{ selected: 'option-1' }">
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
            <div class="text-gray-900 tracking-wider leading-normal">
              <div class="w-full px-2">
          
                  <div id='recipients' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                      <table class="w-full">
                          <thead>
                              <div class="text-center font-bold break-normal py-2 text-xl md:text-2xl mb-1">
                                  <h1 class=>Liste des Utilisateurs:</h1>
                              </div>
                              <tr class="border rounded bg-gray-400">
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
          
                              <tr class="text-center border-b">
                                  <td class="px-2 py-2"><img class="mx-auto py-2" src="./img/Ellipse2.png" alt=""></td>
                                  <td class="px-2 text-blue-600"><a href="">Tiger Nixon</a></td>
                                  <td class="px-2">Sycdcdcdcdcste@gmail.com</td>
                                  <td class="px-2">admin</td>
                                  <td class="px-2">1</td>
                                  <td class="flex flex-row justify-center px-2 mt-2 pt-4">
                                      @auth
                                          @include('includes.edit')
                                          @include('includes.delete')
                                      @endauth
                                  </td>
                              </tr>
                              <tr class="text-center border-b">
                                  <td class="px-2 py-2"><img class="mx-auto py-2" src="./img/Ellipse2.png" alt=""></td>
                                  <td class="px-2 text-blue-600"><a href="">Tiger Nixon</a></td>
                                  <td class="px-2">Sycdcdcdcdcste@gmail.com</td>
                                  <td class="px-2">admin</td>
                                  <td class="px-2">1</td>
                                  <td class="flex flex-row justify-center px-2 mt-2 pt-4">
                                      @auth
                                          @include('includes.edit')
                                          @include('includes.delete')
                                      @endauth
                                  </td>
                              </tr>
                             
                             
          
          
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
      </div>
    </div>