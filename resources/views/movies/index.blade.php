
@extends('layouts.layout')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">

                <a href="/" class="h1">Regreso a página principal</a>

                <div class="title m-b-md">
                    Lista de Películas
                </div>

                <form action="/index/" method="">
                    @csrf

                    <select name="selector">
                        <option value="" disabled selected> --- ID --- </option>
                        @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->id }}</option>
                        @endforeach

                    </select>

                    <button>Buscar</button>
                </form>

                <div>
                    <a href="/index/create">Registrar una película</a>
                    <p class="mssg">{{ session('mssg')}}</p>
                </div>  


                @foreach ($movies as $movie)
                <div>
                {{ $movie->id }} - {{ $movie->title }} - {{ $movie->synopsis }} - {{ $movie->year }} - {{ $movie->cover }}
                </div>
                @endforeach




            </div>
        </div>
@endsection
