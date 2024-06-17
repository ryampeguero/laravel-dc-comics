@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8 d-flex justify-content-center create">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $comic->description }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Percorso Fotografia</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data d'uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <select name="type" id="type">
                            <option selected>Seleziona</option>
                            <option value="comic">Comic</option>
                            <option value="graphic">Graphic Novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>

        </div>
    </div>
@endsection
