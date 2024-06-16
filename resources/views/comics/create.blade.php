@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8 d-flex justify-content-center create">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Percorso Fotografia</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data d'uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
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
