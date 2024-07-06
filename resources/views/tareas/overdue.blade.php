@extends('layouts.app')

@section('content')
    <h1>Tareas Vencidas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Fecha Fin</th>
                <th>Días Pasados</th>
            </tr>
        </thead>
        <tbody>
            @foreach($overdueTareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->fecha_fin }}</td>
                    <td>{{ $tarea->dias_pasados }} días</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
