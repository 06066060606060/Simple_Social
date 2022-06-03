@extends('layouts.app')

@section('main')
@if (Auth::check())
<div class="flex items-center justify-center">
  <a href="/logout"  class="px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50" />
  Logout
</a>
</div>
@endif
@endsection
