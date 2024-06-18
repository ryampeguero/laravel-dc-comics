@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8 d-flex justify-content-center create">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Percorso Fotografia</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data d'uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                    </div>

                    <div class="mb-3">
                        <label for="type">Tipo</label>
                        <select name="type" id="type">
                            <option>Seleziona</option>
                            <option @selected(old('type') == 'comic') value="comic">Comic</option>
                            <option @selected(old('type') == 'graphic') value="graphic">Graphic Novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>

        </div>
    </div>

@endsection
