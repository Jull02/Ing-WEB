@extends('layouts.app')

@section('content')
    <h1>Tareas In Progress</h1>
    <ul>
        @foreach($tareas as $tarea)
            <li>{{ $tarea->descripcion }} - {{ $tarea->fecha_inicio }} to {{ $tarea->fecha_fin }}</li>
        @endforeach
    </ul>
@endsection
