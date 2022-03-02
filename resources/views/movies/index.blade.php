
@extends('layouts.layout')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">

                <a href="/" class="h1">Regreso a página principal</a>

                <div class="title m-b-md">
                    Lista de Películas
                </div>

                <form action="" method="">
                    @csrf

                    <select id="url" name="selector">
                        <option value="" name="option" disabled selected> --- ID --- </option>

                        @foreach($movies as $movie)
                        <option value="/index/{{ $movie->id }}">{{ $movie->id }}</option>
                        @endforeach
                        
                    </select>

                    <button type="button" onclick="openUrl()">Buscar</button>

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

                <script>
                function openUrl(){
                var select = document.getElementById("url");
                var url = select.options[select.selectedIndex].value;
                window.open(url,'_self');}
                </script>

@endsection
