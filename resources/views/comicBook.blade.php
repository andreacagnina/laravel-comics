@extends('layouts.app')

@section('comicBook')
    <div class="container text-dark p-5">
        <div class="row">
            <div class="col-12">
                @foreach ($comics as $comic)
                    <h2 class="text-dark">{{ $comic['title'] }}</h2>
                    <p> {{ $comic['description'] }}</p>
                @endforeach
                <span>

                </span>
            </div>
        </div>
    </div>
@endsection
