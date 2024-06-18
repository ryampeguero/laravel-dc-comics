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
                                <form id="formDelete" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                    method="POST" 
                                    data-comic-title="{{ $comic->title }}">
                                    @csrf
                                    @method('DELETE')
                                    <button id="btn-form" class="btn btn-danger prova" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


        <div class="modal-dialog">
            <div class="modal-content text-bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" class="modal-title">Sicuro di voler eliminare?</h1>
                </div>
                <div class="modal-body text-bg-danger">
                    <h4>Non si torna indietro</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="delete" type="button" class="btn btn-danger">Cancella</button>
                </div>
            </div>
        </div>

    </div>
@endsection
