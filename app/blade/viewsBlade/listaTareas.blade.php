@extends('layouts/plantilla')

@section('pestaña', 'Tareas')

@section('tituloCabecera','Lista de Tareas')

@section('lateral')
<div>
    <h1>Incidencias/tareas</h1>
</div>
<div>
    <h1>Añadir nueva incidencia/tarea</h1>
</div>
<div>
    <h1>Modificar incidencia/tarea</h1>
</div>
<div>
    <h1>Eliminar tarea</h1>
</div>
<div>
    <h1>Cambiar estado de incidencia/tarea</h1>
</div>
<div>
    <h1>Buscar/Filtrar tareas</h1>
</div>

@endsection

@section('centro')

<table class="listatareas">
    <tr>
        <th>DESCRIPCION</th>
        <th>PROVINCIA</th>
        <th>POBLACION</th>
        <th>DIRECCION</th>
        <th>OPERARIO</th>
        <th>FECHA REALIZACION</th>
    </tr>
    @foreach ($tareas as $tarea) 
        <tr>
            <td>{{$tarea['descripcion'] }}</td>
            <td>{{$tarea['provincia']}}</td>
            <td>{{$tarea['poblacion']}}</td>
            <td>{{$tarea['direccion']}}</td>
            <td>{{$tarea['operario']}}</td>
            <td>{{$tarea['fecharealizacion']}}</td>
        </tr>
    @endforeach
</table>

@endsection