@extends('plantilla')
@section('titulo', 'Libros')


@section('contenido')
    @forelse ($libros as $libro)
        <h1>{{ $libro['titulo'] }}</h1>
        <h3>{{ $libro['autor'] }}</h3>
        <br>
        <br>
    @empty
        <h3>Tú que esto no va xD</h3>
    @endforelse
@endsection
