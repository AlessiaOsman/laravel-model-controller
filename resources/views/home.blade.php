@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<div class='row g-3'>
@foreach ($movies as $movie )
    @include('includes.movies.card')
@endforeach
</div>
@endsection