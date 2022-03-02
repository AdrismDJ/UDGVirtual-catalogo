
@extends('layouts.layout')

@section('content')

<a href="/index/" class="back"><- Regresar</a>

<!--
<div class="wrapper movie-details">
    <p class="title">{{ $movie->title }}</p>
    <p class="synopsis">Synopsis - {{ $movie->synopsis }}</p>
    <p class="year">Year - {{ $movie->year }}</p>
    <p class="cover">Cover - {{ $movie->cover }}</p>          
-->

<div class="wrapper edit-movie">
    <h1>Editar la película</h1>
    <form action="{{route('movie.update',$movie->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}">

        <label for="synopsis">Synopsis</label>
        <textarea id="synopsis" name="synopsis" cols="90" rows="5">{{ $movie->synopsis }}</textarea>

        <label for="year">Año</label>
        <input type="number" id="year" name="year" value="{{ $movie->year }}">

        <label for="cover">Cover</label>
        <input type="text" id="cover" name="cover" value="{{ $movie->cover }}">  

        <input type="submit" value="Actualizar">
    </form>
</div>

</div>

@endsection
