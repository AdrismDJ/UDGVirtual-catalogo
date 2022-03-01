
@extends('layouts.layout')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">

                <img src="/img/movies.jpg" class="img-movies" alt="movies">

                <div class="title m-b-md">
                <a href="/index/">Catálogo de Películas</a>
                </div>

                <p class="mssg">{{ session('mssg')}}</p>

            </div>
        </div>
@endsection
