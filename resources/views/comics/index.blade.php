@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comicList as $comic)
                <div class="col-3">
                    <div class="card mb-5">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->description}}</p>
                            <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
