@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-5">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Inserisci un nuovo comic</a>
        </div>

        <div class="row">
            @foreach ($comicList as $comic)
                <div class="col-3">
                    <div class="card mb-5">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>

                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"class="btn btn-primary">
                                    Dettagli
                                </a>
                                <a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                                    Modifica
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
