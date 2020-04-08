@extends('plantilla')

@section('titulo')
    Portafolio
@endsection

@section('tituloCuerpo')
    @lang('Portfolio')
@endsection

@section('contenido')

    <ul>
        @forelse($portafolio as $project)
            <li> {{$project['title']}} {{ $loop->last ? 'Es el ultimo' : ''}} </li>
        @empty 
                <p>No hay proyectos</p>
        @endforelse
    </ul>

@endsection