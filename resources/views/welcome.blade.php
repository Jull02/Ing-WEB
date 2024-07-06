<!DOCTYPE html>
<html>
<head>
    <title>Vista Principal</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tareas</h1>
        <form method="GET" action="{{ url('/') }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="start_date">Fecha de Inicio</label>
                    <input type="date" id="start_date" name="start_date" value="{{ $startDate }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="end_date">Fecha de Fin</label>
                    <input type="date" id="end_date" name="end_date" value="{{ $endDate }}" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <br>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>
                        <th>Empleado</th>
                        <th>Proyecto</th>
                        <th>Días Pasados (si está vencida)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td>{{ $tarea->descripcion }}</td>
                            <td>{{ $tarea->fecha_inicio }}</td>
                            <td>{{ $tarea->fecha_fin }}</td>
                            <td>{{ $tarea->estado }}</td>
                            <td>{{ $tarea->empleado->nombre }}</td>
                            <td>{{ $tarea->proyecto->nombre }}</td>
                            <td>
                                @if($tarea->estado == 'Vencida')
                                    {{ $tarea->dias_pasados }} días
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Agregar Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
