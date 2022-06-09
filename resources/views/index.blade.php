@extends('layouts.app')

@section('main')

@auth
@include('includes.newpost') 
@endauth

@include('includes.post') 

@endsection

