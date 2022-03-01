
@extends('layouts.layout')

@section('content')

<a href="/index/" class="h1">Regreso</a>

<div class="wrapper create-movie">
    <h1>Agregar una nueva película</h1>
    <form action="/index/" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" id="title" name="title">

        <label for="synopsis">Synopsis</label>
        <textarea id="synopsis" name="synopsis" rows="3"></textarea>

        <label for="year">Año</label>
        <input type="number" id="year" name="year">

        <label for="cover">Cover</label>
        <input type="text" id="cover" name="cover">  

        <input type="submit" value="Registrar">
    </form>
</div>


@endsection
