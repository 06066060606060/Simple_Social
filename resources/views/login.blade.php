@extends('layouts.app')

@section('main')
<section class="bg-gray-50">

    {{-- @click="modelOpen = false" --}}
      <div
        class="w-full px-0 pb-4 mx-auto mb-0 space-y-4 bg-transparent border-0 border-gray-200 rounded-lg md:bg-white md:border md:px-6"
      >
        <h1 class="pt-4 mb-5 text-xl text-center text-black">Connectez votre compte</h1>
        <form class="pb-1 space-y-4" action="/authenticate" method="post">
            @csrf
          <label for="email" class="block">
            <span class="block mb-1 text-xs font-medium text-gray-700">Email</span>
            <input class="form-input" type="email"  name="email" placeholder="Ex. james@bond.com" inputmode="email" required />
          </label>
          <label for="password" class="block">
            <span class="block mb-1 text-xs font-medium text-gray-700">password</span>
            <input class="form-input" type="password" name="password" placeholder="••••••••" required />
          </label>
          <div class="flex items-center justify-center">
            <input type="submit"  class="px-4 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50" value="Login" />
          </div>
        </form>
      </div>
  </section>

@endsection
