@extends('layouts.app')

@section('content')
    <div class="container border border-black">
        <h1>Dettagli</h1>
        <a href="{{route('comics.index')}}">Torna Indietro</a>
        <hr>
        <div class="row border">
            <div class="col-2"></div>

            <div class="col-8 d-flex justify-content-center details">
                <div class="card">
                    <img src="{{ $currComic->thumb }}" alt="...">
                    <div class="card-body">
                        <div>{{$currComic->price}}</div>
                        <div>{{$currComic->sale_date}}</div>
                        <p class="card-text">
                            {{$currComic->description}}
                        </p>
                        <span>{{$currComic->series}}</span>
                        

                    </div>
                </div>
            </div>
            <div class="col-2"></div>

        </div>
    </div>
@endsection
