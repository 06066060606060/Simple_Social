<form action="{{ route('delete', $user['id'] ) }}" method="post">
    @csrf
    @method('delete')
    <div class="pt-1">
    <input type="text" name="id" value="{{ $user['id']}}" style="display:none">
    <button type="submit" @click="modelOpen =!modelOpen">
        <i class="fa-solid fa-trash-can hover:text-red-700"></i>
    </button>
</div>
</form>