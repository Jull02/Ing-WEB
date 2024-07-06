@extends('layouts.app')

@section('content')
    <h1>Empleados</h1>
    <ul>
        @foreach($empleados as $empleado)
            <li>{{ $empleado->nombre }}</li>
        @endforeach
    </ul>
@endsection
