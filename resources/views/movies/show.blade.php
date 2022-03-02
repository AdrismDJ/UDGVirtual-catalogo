
@extends('layouts.layout')

@section('content')

<a href="/index/" class="back"><- Regresar</a>

<div class="wrapper movie-details">
    <p class="title">{{ $movie->title }}</p>
    <p class="synopsis">Synopsis - {{ $movie->synopsis }}</p>
    <p class="year">Year - {{ $movie->year }}</p>
    <p class="cover">Cover - {{ $movie->cover }}</p>          

<form action="/index/{{ $movie->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Borrar esta película</button>
</form>

<br>

<a href="/index/{{ $movie->id }}/edit">Modificar</a>

</div>

@endsection
