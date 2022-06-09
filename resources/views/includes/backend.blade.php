<div class="px-4 pt-1">
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
            <div class="container w-full">
                <!--Card-->
                <div id='recipients' class="p-2 bg-white rounded shadow">

                    <table id="example" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead class="bg-gray-500">
                            <tr>
                                <th data-priority="1">Avatar</th>
                                <th data-priority="2">Pseudo</th>
                                <th data-priority="4">Role</th>
                                <th data-priority="5">Visible</th>
                                <th data-priority="6">Gestion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="text-center border-b">
                                    <td class="px-2 py-2"><img class="py-2 mx-auto" src="./img/Ellipse2.png"
                                            alt=""></td>
                                    <td class="px-2 text-blue-600"><a href="">{{ $user->pseudo }}</a></td>
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
                        </tbody>

                    </table>


                </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script>
                $(document).ready(function() {

                    var table = $('#example').DataTable({
                            responsive: true
                        })
                        .columns.adjust()
                        .responsive.recalc();
                });
            </script>

        </div>
        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
            <div class="container w-full">
                <!--Card-->
                <div id='recipients' class="p-2 bg-white rounded shadow">

                    <table id="example" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead class="bg-gray-500">
                            <tr>
                                <th data-priority="1">Contenue</th>
                                <th data-priority="2">Image</th>
                                <th data-priority="5">Visible</th>
                                <th data-priority="6">Gestion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="text-center border-b">
                                    <td class="px-2 text-blue-600"><a href="">{{ $post->content }}</a></td>
                                    <td class="px-2 py-2"><img class="py-2 mx-auto" src=".{{ Storage::url($user->photo) }}"
                                            alt=""></td>
                                    <td class="px-2">1</td>
                                    <td class="flex flex-col mt-2">
                                        @auth
                                            @include('includes.editPost')
                                            @include('includes.deletePost')
                                        @endauth
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                </div>
            </div>
        </div>

        <div x-show.transition.in.opacity.duration.750ms="selected === 'option-3'" class="p-4">
            ...
        </div>
    </div>
</div>
