@extends('layouts.app')
@section('main')
@auth
@include('includes.newpost') 
@endauth
@include('home')

@endsection

