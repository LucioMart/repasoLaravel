@extends('plantilla')

@section('titulo')
    Porfolio
@endsection

@section('tituloCuerpo')
    Porfolio
@endsection

@section('contenido')

    <ul>
        @forelse($portafolios as $portafolio)
            <li> {{$portafolio('title')}} {{dd($loop)}} </li>
        @empty 
                <p>No hay proyectos</p>
        @endforelse
    </ul>

@endsection