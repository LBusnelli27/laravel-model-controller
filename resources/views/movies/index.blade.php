@extends('layouts.main')

@section('title-tab', 'Index')

@section('main-content')
    <div class="container-fluid">
        <h1 class="text-center mb-5">Ecco tutti i film che vuoi</h1>
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card mb-5 border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Original title: {{ $movie->original_title }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Date: {{ $movie->date }}</h6>
                        <h6 class="card-subtitle mb-4 text-muted">Nationality: {{ $movie->nationality }}</h6>
                        <h5 class="card-subtitle mb-2">Vote: {{ $movie->vote }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection