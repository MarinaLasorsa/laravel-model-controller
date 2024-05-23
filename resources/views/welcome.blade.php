@extends('layouts.app')

@section('title', 'Laravel')

@section('content')

<main class="py-5">
    <div class="container">
        <div class="row gy-3">
            @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                      <p>Nationality: {{$movie->nationality}}</p>
                      <p>Release date: {{$movie->date}}</p>
                      <p>Rating: {{$movie->vote}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

    </div>
</main>

@endsection