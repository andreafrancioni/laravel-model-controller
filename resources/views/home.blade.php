@extends('layouts.app')

@section('content')

<h1 class="text-center">MOVIES</h1>

<div class="cardWrapper container d-flex align-items-center flex-wrap justify-content-center">

    @foreach ($movies as $movie)
    <div class="card">
        <div class="cardTitle d-flex flex-column align-items-center">
            <h3>{{$movie->title}}</h3>
            <h6>{{$movie->original_title}}</h6>
        </div>
        <div class="cardDescription d-flex flex-column align-items-center">
            <span>{{$movie->nationality}}</span>
            <span>{{$movie->date}}</span>
            <span>{{$movie->vote}}</span>
        </div>
    </div>
    @endforeach
    
</div>

@endsection

