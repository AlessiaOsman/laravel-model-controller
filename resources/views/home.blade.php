@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<div class='row'>
@foreach ($movies as $movie )
    
<div class='col-5'>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$movie->title}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$movie->original_title}}</li>
    <li class="list-group-item">{{$movie->nationality}}</li>
    <li class="list-group-item">{{$movie->date}}</li>
    <li class="list-group-item">{{$movie->vote}}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection