@extends('plantilla')
@section('titulo', 'Libros')


@section('contenido')
    @forelse ($libros as $libro)
        <li><a href="{{ route('libros.show', $libro) }}">{{ $libro->titulo }}</a></li>
    @empty
        <h3>Tú que esto no va xD</h3>
    @endforelse
@endsection
