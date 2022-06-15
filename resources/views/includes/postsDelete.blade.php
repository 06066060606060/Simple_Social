
<div class="mx-4 rounded"> 
   
  


 <h1 class="p-4 mb-1 text-3xl font-bold text-center text-black md:leading-tight md:text-4xl bg-white">
    Liste des posts trashed
</h1>
 @foreach ($del as $delete )
 <p>{{$delete->image}}</p>
 <@include(includes.soft)
 <p></p>
 <p></p>
     
 @endforeach
</div>
