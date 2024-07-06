@extends('layouts.app')

@section('content')
    <h1>Proyectos</h1>
    <ul>
        @foreach($proyectos as $proyecto)
            <li>{{ $proyecto->nombre }}</li>
        @endforeach
    </ul>
@endsection
