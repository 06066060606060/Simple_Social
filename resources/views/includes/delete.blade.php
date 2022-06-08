<form action="{{ route('delete', $user['id'] ) }}" method="post">
    @csrf
    @method('delete')
<div x-data="{ modelOpen: false }">
    <input type="text" name="id" value="{{ $user['id']}}" style="visibility:hidden">
    <button type="submit" @click="modelOpen =!modelOpen">
        <i class="p-3 fa-solid fa-trash-can hover:text-red-700"></i>
    </button>
</div>    
</form>
